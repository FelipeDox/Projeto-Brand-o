<?php
// fornecedores-form.php

$msg = "";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Pega os dados
    $nome = htmlspecialchars($_POST['nomef'] ?? '');
    $email = htmlspecialchars($_POST['emailf'] ?? '');
    $telefone = htmlspecialchars($_POST['telefonef'] ?? '');
    $servico = htmlspecialchars($_POST['tipodeservico'] ?? '');
    $obs = htmlspecialchars($_POST['mensagemf'] ?? '');

    // 2. Cria o novo registro
    $novo_fornecedor = [
        'nome' => $nome,
        'email' => $email,
        'telefone' => $telefone,
        'servico' => $servico,
        'obs' => $obs,
        'data_cadastro' => date('d/m/Y H:i')
    ];

    // 3. Lê o arquivo atual ou cria lista vazia
    $arquivo_json = 'fornecedores.json';
    $lista_atual = [];
    
    if (file_exists($arquivo_json)) {
        $conteudo = file_get_contents($arquivo_json);
        $lista_atual = json_decode($conteudo, true);
        if (!is_array($lista_atual)) $lista_atual = [];
    }

    // 4. Adiciona e Salva
    $lista_atual[] = $novo_fornecedor;

    if (file_put_contents($arquivo_json, json_encode($lista_atual, JSON_PRETTY_PRINT))) {
        $msg = "<div class='alert success'>✅ Fornecedor <strong>$nome</strong> salvo com sucesso!</div>";
    } else {
        $msg = "<div class='alert error'>❌ Erro ao salvar arquivo. Verifique permissões.</div>";
    }
}
?>

<h2>📝 Cadastro de Fornecedor</h2>
<a href="?pg=fornecedores" class="btn" style="background-color: #777;">← Voltar</a>
<a href="?pg=fornecedores-lista" class="btn" style="background-color: #007bff;">Ver Lista Salva</a>

<?php echo $msg; ?>

<form action="?pg=fornecedores-form" method="post">
    <label>Nome da Empresa/Pessoa:</label>
    <input type="text" name="nomef" required placeholder="Ex: Solar Distribuidora Ltda">

    <label>E-mail:</label>
    <input type="email" name="emailf" required>

    <label>Telefone:</label>
    <input type="tel" name="telefonef" required>

    <label>Tipo de Serviço:</label>
    <input type="text" name="tipodeservico" required placeholder="Ex: Placas, Cabos, Instalação">

    <label>Observações:</label>
    <textarea name="mensagemf" rows="3"></textarea>

    <input type="submit" value="Salvar Cadastro">
</form>
