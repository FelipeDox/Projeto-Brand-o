<?php
// index.php
// Arquivo principal que gerencia a inclusão de outras páginas

// Inclui a estrutura superior e o menu
include_once "topo.php";
include_once "menu.php";

// Lógica de roteamento
$pagina_solicitada = "principal"; // Página padrão

if (!empty($_GET['pg'])) {
    // Sanitize o nome da página para evitar inclusão de arquivos maliciosos
    $pg = basename($_GET['pg']); 
    // Garante que o arquivo existe antes de tentar incluir (segurança)
    if (file_exists($pg . '.php')) {
        $pagina_solicitada = $pg;
    } else {
        // Opcional: tratar erro 404
        echo "<h2>Página não encontrada!</h2>";
    }
}

// Inclui o conteúdo da página solicitada
include_once $pagina_solicitada . ".php";

// Inclui a estrutura inferior
include_once "rodape.php";
?>
