<?php
// PHP: Definição dos dados que seriam lidos do sistema solar
// Estes são os dados mais importantes para a página principal.
$energia_gerada_hoje = 8.45; // kWh
$economia_mes_real = 189.75; // R$
$status_sistema = "Operando Normal";
$ultima_atualizacao = date("H:i:s"); // Pega a hora atual do servidor

echo "<h2>📊 Monitoramento da Geração Solar</h2>";
echo "<p>Bem-vindo ao painel de controle. Aqui você pode visualizar o desempenho atual do sistema fotovoltaico.</p>";
?>

<div style="display: flex; gap: 20px; justify-content: space-around; margin-top: 30px;">
    
    <div class="card" style="background-color: #e3f2fd; border: 1px solid #90caf9; flex: 1; text-align: center;">
        <h3>⚡ Energia Gerada Hoje</h3>
        <p style="font-size: 2.5em; font-weight: bold; color: #1e88e5;">
            <?php echo number_format($energia_gerada_hoje, 2, ',', '.') . " kWh"; ?>
        </p>
    </div>
    
    <div class="card" style="background-color: #e8f5e9; border: 1px solid #a5d6a7; flex: 1; text-align: center;">
        <h3>💰 Economia Estimada (Mês)</h3>
        <p style="font-size: 2.5em; font-weight: bold; color: #43a047;">
            <?php echo "R$ " . number_format($economia_mes_real, 2, ',', '.'); ?>
        </p>
    </div>
    
</div>

<div style="text-align: center; margin-top: 30px; padding: 15px; background-color: #fff3e0; border-radius: 8px;">
    <p style="font-size: 1.2em; font-weight: bold; color: #ff9800;">
        ✅ Status Geral: **<?php echo $status_sistema; ?>**
    </p>
    <small>Última atualização: <?php echo $ultima_atualizacao; ?></small>
</div>
