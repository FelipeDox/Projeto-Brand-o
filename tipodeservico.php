<?php

    echo "<p>Qual(is) serviço(s) deseja?</p>";
    echo "<h2>- Orçamento</h2>";
    echo "<h2>- Manutenção</h2>";
    echo "<h2>- Instalação</h2>";
    echo "<h2>- Limpeza</h2>";
    echo "<h2>- Específico</h2>";

    echo "<h3>Caso seja novo cliente, preencha o formulário abaixo, para que possamos entrar em contrato.</h3>";
    echo "<h3>Se tem sido nosso cliente, por favor, entre em contato conosco.</h3>"
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