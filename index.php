<?php
// index.php

// Inclui o topo (que traz o CSS e o visual) e o menu
include_once "topo.php";
include_once "menu.php";

// Lógica de navegação segura
$pg = isset($_GET['pg']) ? $_GET['pg'] : 'principal';

// Lista de páginas permitidas para evitar erros ou invasões
$paginas_permitidas = [
    'principal', 
    'quemsomos', 
    'clientes', 
    'faleconosco', 
    'fornecedores', 
    'fornecedores-form', 
    'fornecedores-lista', 
    'tipodeservico'
];

echo "<div class='fade-in'>"; // Efeito suave de entrada

if (in_array($pg, $paginas_permitidas)) {
    if (file_exists($pg . ".php")) {
        include_once $pg . ".php";
    } else {
        echo "<div class='alert error'>⚠️ O arquivo <strong>$pg.php</strong> não foi encontrado.</div>";
    }
} else {
    echo "<div class='alert error'>❌ Página não encontrada.</div>";
}

echo "</div>";

// Inclui o rodapé
include_once "rodape.php";
?>
