<?php
// faleconosco.php
// Página que exibe o formulário de contato

echo "<h1>📧 Fale Conosco</h1>";
echo "<p>Preencha o formulário abaixo ou entre em contato diretamente através do email: <strong>contato@exemplo.com</strong>.</p>";
?>

<form action="envia-form.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nomef" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="emailf" required>

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefonef" required>

    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagemf" rows="5" required></textarea>

    <label for="tipodeservico">Tipo de Serviço:</label>
    <input type="text" id="tipodeservico" name="tipodeservico">
    <input type="submit" value="Enviar Mensagem">
</form>
