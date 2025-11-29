<?php
// Dados simulados
$geracao = 12.5;
$economia = 240.00;
?>

<h2>📊 Painel de Controle</h2>
<p>Bem-vindo ao sistema de monitoramento solar.</p>

<div class="grid-cards">
    <div class="card">
        <h3>⚡ Energia Hoje</h3>
        <p style="font-size: 2.5em; font-weight: bold; color: #007bff; margin: 10px 0;">
            <?php echo number_format($geracao, 1, ',', '.'); ?> kWh
        </p>
        <small>Produção diária</small>
    </div>

    <div class="card">
        <h3>💰 Economia Mês</h3>
        <p style="font-size: 2.5em; font-weight: bold; color: #28a745; margin: 10px 0;">
            R$ <?php echo number_format($economia, 2, ',', '.'); ?>
        </p>
        <small>Estimativa atual</small>
    </div>

    <div class="card">
        <h3>✅ Status</h3>
        <p style="font-size: 1.5em; font-weight: bold; color: orange; margin: 25px 0;">
            Operando Normal
        </p>
        <small>Atualizado às <?php echo date('H:i'); ?></small>
    </div>
</div>
