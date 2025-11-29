<?php
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servico = [
        'cliente' => $_POST['nomecliente'],
        'telefone' => $_POST['telefoneservico'],
        'local' => $_POST['localizacao'],
        'tipo' => $_POST['servicco']
    ];
    // Salvar num arquivo JSON específico para serviços
    $arquivo = 'servicos_solicitados.json';
    $atuais = file_exists($arquivo) ? json_decode(file_get_contents($arquivo), true) : [];
    if(!is_array($atuais)) $atuais = [];
    $atuais[] = $servico;
    file_put_contents($arquivo, json_encode($atuais, JSON_PRETTY_PRINT));
    
    $msg = "<div class='alert success'>✅ Solicitação de serviço enviada!</div>";
}
?>

<h1>🛠️ Solicitação de Serviços</h1>
<p>Escolha o serviço que você precisa:</p>

<div class="grid-cards" style="grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); margin-bottom: 30px;">
    <div class="card">📄 Orçamento</div>
    <div class="card">🔧 Manutenção</div>
    <div class="card">🔌 Instalação</div>
    <div class="card">🧼 Limpeza</div>
</div>

<h3>Solicitar Atendimento</h3>
<?php echo $msg; ?>

<form action="?pg=tipodeservico" method="post">
    <label>Seu Nome:</label>
    <input type="text" name="nomecliente" required>

    <label>Telefone para Contato:</label>
    <input type="tel" name="telefoneservico" required>

    <label>Localização (Cidade/Bairro):</label>
    <input type="text" name="localizacao" required>

    <label>Qual serviço deseja?</label>
    <select name="servicco" style="width:100%; padding:10px; margin-top:5px; border:1px solid #ccc; border-radius:4px;">
        <option value="Orcamento">Orçamento Novo Sistema</option>
        <option value="Manutencao">Manutenção/Reparo</option>
        <option value="Limpeza">Limpeza de Placas</option>
        <option value="Outro">Outro</option>
    </select>

    <input type="submit" value="Solicitar Serviço">
</form>
