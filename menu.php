<?php
// includes/menu.php
?>
<nav>
    <ul>
        <li><a href="?pg=principal">Principal</a></li>
        <li><a href="?pg=quemsomos">Quem Somos</a></li>
        <li><a href="?pg=clientes">Clientes</a></li>
        <li><a href="?pg=faleconosco">Fale Conosco</a></li>
        <li><a href="?pg=fornecedores">Fornecedores</a></li>
        <li><a href="?pg=tipodeservico">Serviços</a></li>
    </ul>
</nav>

<style>
    /* O menu deve estar fora do .container para estilização ideal, mas aqui está dentro. */
    nav {
        background-color: #c8dd07;
        padding: 10px 0;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        margin: 0 -20px 20px -20px; /* Expande o fundo no container */
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: center;
    }

    nav ul li {
        display: inline-block;
        margin: 0 15px;
    }

    nav ul li a {
        color: #1a1a1a;
        text-decoration: none;
        font-weight: bold;
        padding: 8px 15px;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    nav ul li a:hover {
        background-color: #deee02;
        color: #000;
    }
</style>

