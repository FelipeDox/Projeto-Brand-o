<?php
// envia-form.php
// Processa o formulário de contato e salva os dados em um arquivo JSON.

// Verifica se o método é POST para garantir que o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    // Redireciona de volta ou exibe uma mensagem de erro se o acesso for direto
    header("Location: ?pg=fornecedores");
    exit();
}

// 1. Definição do arquivo de dados
$arquivo_json = 'fornecedores.json';

// 2. Limpeza e Validação de Dados (Boas Práticas)
$nome = htmlspecialchars(trim($_POST['nomef'] ?? ''));
$email = htmlspecialchars(trim($_POST['emailf'] ?? ''));
$mensagem = htmlspecialchars(trim($_POST['servico'] ?? ''));
$telefone = htmlspecialchars(trim($_POST['telefonef'] ?? ''));
$tipodeservico = htmlspecialchars(trim($_POST['tipodeservico'] ?? ''));

// Verificação simples
if (empty($nome) || empty($email) || empty($mensagem) || empty($telefone)) {
    // Exibe a mensagem de erro (O ideal seria redirecionar com uma mensagem de erro)
    die("❌ Erro: Todos os campos são obrigatórios.");
}

// 3. Leitura dos dados existentes
$contatos = [];
if (file_exists($arquivo_json)) {
    $json = file_get_contents($arquivo_json);
    $dados_existentes = json_decode($json, true);

    if (is_array($dados_existentes)) {
        $contatos = $dados_existentes;
    }
}

// 4. Criação do novo contato
$novo_contato = [
    'data' => date("Y-m-d H:i:s"),
    'nome' => $nome,
    'email' => $email,
    'telefone' => $telefone,
    'Tipo de Serviço' => $mensagem
];

// 5. Adiciona o novo contato ao array
$contatos[] = $novo_contato;

// 6. Grava no arquivo
// JSON_PRETTY_PRINT é opcional, mas ajuda na leitura do arquivo
$sucesso = file_put_contents($arquivo_json, json_encode($contatos, JSON_PRETTY_PRINT));


// 7. Feedback para o usuário (inclui topo e rodapé para exibir corretamente)
include_once "topo.php";
include_once "menu.php";

if ($sucesso !== false) {
    // Bloco de SUCESSO
    echo "<h2>🎉 Contato Enviado com Sucesso!</h2>";
    echo "<p style='color: green; font-weight: bold;'>✅ Obrigado pelo contato, **$nome**!</p>";
    echo "<p>Recebemos sua mensagem: **'$mensagem'**. Entraremos em contato através do email: **$email** ou telefone: **$telefone** em breve.</p>";
} else {
    // Bloco de FALHA
    echo "<h2>😢 Erro ao Enviar</h2>";
    echo "<p style='color: red; font-weight: bold;'>❌ Erro ao enviar mensagem. Por favor, tente novamente mais tarde.</p>";
}

include_once "rodape.php";
?>
