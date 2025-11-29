<?php

$tipodeservico_json = "fornecedor.json";

$nome = $_POST['nomecliente'];
$telefone = $_POST['telefoneservico'];
$tipodeservico = $_POST['servicco'];
$localizacao = $_POST['localizacao'];

if(file_exists($tipodeservico_json)){

    $json = file_get_contents($tipodeservico_json);
    $tipodeservicos = json_decode($json, true);

    if($tipodeservicos == null || !is_array($tipodeservicos)){
        $tipodeservicos = [];
    }
    
$novo_id = count($tipodeservicos) + 1;
$novo_tipodeservico = [

    "id" => $novo_id,
    "nome" => $nome,
    "telefone" => $telefone,
    "tipodeservico" => $tipodeservico,
    "localizacao" => $localizacao
];


$tipodeservicos[] = $novo_tipodeservico;

$novo_tipodeservico = json_encode($tipodeservicos, JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT);

if(file_put_contents($tipodeservico_json, $novo_tipodeservico)){

echo "<p>Serviço $tipodeservico solicitado com sucesso.</p>";
echo "<p><a href='index.php'>Voltar ao Inicio</p>";
}
else{
    echo "<h2>Erro ao enviar formulário.</h2>";
    echo "<p><a href='index.php'>Voltar ao Inicio</p>";

}


}

?>
