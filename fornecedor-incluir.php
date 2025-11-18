<?php

$fornecedor_json = "fornecedor.json";

$nome = $_POST['nomef'];
$email = $_POST['emailf'];
$telefone = $_POST['telefonef'];
$tipodeservico = $_POST['servico'];


if(file_exists($fornecedor_json)){

    $json = file_get_contents($fornecedor_json);
    $fornecedores = json_decode($json, true);

    if($fornecedores == null || !is_array($fornecedores)){
        $fornecedores = [];
    }
    
$novo_id = count($fornecedores) + 1;
$novo_fornecedor = [

    "id" => $novo_id,
    "nome" => $nome,
    "email" => $email,
    "telefone" => $telefone,
    "tipodeservico" => $tipodeservico
];


$fornecedores[] = $novo_fornecedor;

$novo_fornecedor = json_encode($fornecedores, JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT);

if(file_put_contents($fornecedor_json, $novo_fornecedor)){

echo "<p>Fornecedor $nome cadastrado com sucesso.</p>";
echo "<p><a href='fornecedor-lista.php'>Listar Clientes</p>";
}
else{
    echo "<h2>Erro ao enviar formulário.</h2>";
    echo "<p><a href='clientes-lista.php'>Lista Clientes</p>";

}


}

?>