<?php

$fornecedor_json = "fornecedor.json";

$fornecedores= json_decode(file_get_contents($fornecedor_json), true);

echo "<h1>Lista de clientes</h1>";
echo "<a href='fornecedores-form.php'>Cadastrar Fornecedor</a>";

//listar clientes

?>

<h2>Lista de Clientes</h2>

<ul>
    <?php foreach ($fornecedores as $fornecedor): ?>
        <li>
        Nome: <?= $fornecedor['nome']?><br>
        E-mail: <?= $fornecedor['email']?><br>
        Telefone: <?= $fornecedor['telefone']?><br>
        Tipo de serviço: <?= $fornecedor['tipodeservico']?><br>
        </li>
        <?php endforeach; ?>
</ul>

<?php echo '<a href="index.php"> Voltar para o menu</a>';?>
