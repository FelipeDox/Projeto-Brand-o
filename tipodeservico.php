<?php

    echo "<p>Qual(is) serviço(s) deseja?</p>";
    echo "<h3>- Orçamento</h3>";
    echo "<h3>- Manutenção</h3>";
    echo "<h3>- Instalação</h3>";
    echo "<h3>- Limpeza</h3>";
    echo "<h3>- Específico</h3>";

    echo "<h2>Caso seja novo cliente, preencha o formulário abaixo, para que possamos entrar em contrato.</h2>";
    echo "<h2>Se tem sido nosso cliente, por favor, entre em contato conosco.</h2>"
?>




<form action="?pg=tipodeservico-incluir" method="post">

    <label>Nome:</label>
    <input type="text" name="nomecliente"><br>
    <label>Telefone:</label>
    <input type="text" name="telefoneservico"><br>
    <label>Localização:</label>
    <input type="text" name="localizacao"><br>
    <label>Tipo de serviço:</label>
    <input type="text" name="servicco"><br>
    <input type="submit" value="Enviar">

</form>

<?php echo '<a href="index.php"> Voltar para o menu</a>';?>