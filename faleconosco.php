<?php
// PROCESSAMENTO DO FORMULÁRIO (Fica no topo do arquivo)
$mensagem_feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $msg = htmlspecialchars($_POST['mensagem']);

    if ($nome && $email && $msg) {
        $arquivo_json = 'contatos.json';
        
        // Lê existentes ou cria array vazio
        $dados_existentes = file_exists($arquivo_json) ? json_decode(file_get_contents($arquivo_json), true) : [];
        if (!is_array($dados_existentes)) $dados_existentes = [];

        // Adiciona novo
        $dados_existentes[] = [
            'data' => date('Y-m-d H:i:s'),
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone,
            'mensagem' => $msg
        ];

        // Salva
        if (file_put_contents($arquivo_json, json_encode($dados_existentes, JSON_PRETTY_PRINT))) {
            $mensagem_feedback = "<div class='alert success'>✅ Mensagem enviada com sucesso, <strong>$nome</strong>!</div>";
        } else {
            $mensagem_feedback = "<div class='alert error'>❌ Erro ao salvar os dados.</div>";
        }
    } else {
        $mensagem_feedback = "<div class='alert error'>❌ Preencha todos os campos obrigatórios.</div>";
    }
}
?>

<h1>📧 Fale Conosco</h1>
<p style="text-align:center;">Dúvidas sobre energia solar? Entre em contato conosco.</p>

<?php echo $mensagem_feedback; // Exibe a mensagem se houver ?>

<form action="?pg=faleconosco" method="post">
    <label>Nome Completo:</label>
    <input type="text" name="nome" required>

    <label>E-mail:</label>
    <input type="email" name="email" required>

    <label>Telefone:</label>
    <input type="tel" name="telefone" required>

    <label>Mensagem:</label>
    <textarea name="mensagem" rows="5" required></textarea>

    <input type="submit" value="Enviar Mensagem">
</form>
