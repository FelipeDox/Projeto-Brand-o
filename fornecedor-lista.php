<?php

$fornecedor_json = "fornecedores.json";

// Verifica se o arquivo existe e o lê
if (file_exists($fornecedor_json)) {
    $fornecedores = json_decode(file_get_contents($fornecedor_json), true);
    // Se o decode falhar ou o arquivo estiver vazio, inicializa como array vazio
    if (!is_array($fornecedores)) {
        $fornecedores = [];
    }
} else {
    // Se o arquivo não existe, inicializa a lista como vazia e pode emitir um aviso
    $fornecedores = [];
    echo "<p>Aviso: O arquivo 'fornecedores.json' não foi encontrado.</p>";
}

echo "<h1>Lista de Fornecedores</h1>"; // CORRIGIDO: Era "clientes"
echo "<a href='fornecedores-form.php'>Cadastrar Fornecedor</a>";

//listar fornecedores

?>

<h2>Lista de Fornecedores</h2> <ul>
    <?php if (count($fornecedores) > 0): ?>
        <?php foreach ($fornecedores as $fornecedor): ?>
            <li>
            Nome: <?= $fornecedor['nomef']?><br>
            E-mail: <?= $fornecedor['emailf']?><br>
            Telefone: <?= $fornecedor['telefonef']?><br>
            Tipo de serviço: <?= $fornecedor['tipodeservico']?><br>
            Mensagem: <?= $fornecedor['mensagemf']?><br>
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <li>Nenhum fornecedor cadastrado.</li>
    <?php endif; ?>
</ul>

<?php echo '<a href="index.php"> Voltar para o menu</a>';?>
