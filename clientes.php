<?php
// PHP: Definição dos dados que seriam buscados de um banco de dados real
$clientes_ativos = [
    [
        'nome' => 'Residencial Jardins',
        'cidade' => 'João Pessoa, PB',
        'capacidade' => '10 kWp',
        'link' => '#portal-esperanca'
    ],
    [
        'nome' => 'Fazenda Alegria',
        'cidade' => 'Campina Grande, PB',
        'capacidade' => '50 kWp',
        'link' => '#portal-alegria'
    ],
    [
        'nome' => 'Pousada Sol Nascente',
        'cidade' => 'Pipa, RN',
        'capacidade' => '25 kWp',
        'link' => '#portal-sol'
    ]
];

echo "<h3>🤝 Nossos Clientes Satisfeitos</h3>";
echo "<p>Conheça a lista de alguns de nossos principais projetos e clientes que já estão economizando e gerando energia limpa.</p>";
?>

<div class="clientes-grid">
    <?php
    // PHP: Loop para exibir cada cliente como um cartão HTML
    foreach ($clientes_ativos as $cliente) {
    ?>
    
    <div class="cliente-card">
        <h4><?php echo htmlspecialchars($cliente['nome']); ?></h4>
        <p>📍 **Local:** <?php echo htmlspecialchars($cliente['cidade']); ?></p>
        <p>🔋 **Potência Instalada:** <span class="potencia"><?php echo htmlspecialchars($cliente['capacidade']); ?></span></p>
        <a href="<?php echo htmlspecialchars($cliente['link']); ?>" class="btn-portal">Ver Detalhes do Projeto</a>
    </div>

    <?php
    } 
    ?>
</div>

<style>
    .clientes-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }
    .cliente-card {
        background-color: #f7f9fc;
        border: 1px solid #dcdfe4;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s;
    }
    .cliente-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
    }
    .cliente-card h4 {
        color: #007bff;
        margin-top: 0;
        border-bottom: 2px solid #e9ecef;
        padding-bottom: 10px;
        margin-bottom: 15px;
    }
    .cliente-card .potencia {
        font-weight: bold;
        color: #28a745;
    }
    .btn-portal {
        display: inline-block;
        margin-top: 15px;
        padding: 8px 15px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 0.9em;
        transition: background-color 0.2s;
    }
    .btn-portal:hover {
        background-color: #1e7e34;
    }
</style>
