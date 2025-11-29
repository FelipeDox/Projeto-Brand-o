<?php
$clientes = [
    ['nome' => 'Residencial Jardins', 'cidade' => 'João Pessoa, PB', 'cap' => '10 kWp'],
    ['nome' => 'Fazenda Alegria', 'cidade' => 'Campina Grande, PB', 'cap' => '50 kWp'],
    ['nome' => 'Pousada Sol Nascente', 'cidade' => 'Pipa, RN', 'cap' => '25 kWp'],
    ['nome' => 'Comércio Central', 'cidade' => 'Natal, RN', 'cap' => '15 kWp']
];
?>

<h2>🤝 Nossos Clientes</h2>
<p>Projetos entregues gerando economia real.</p>

<div class="grid-cards">
    <?php foreach ($clientes as $c): ?>
    <div class="card">
        <h3 style="color: #ff9900;"><?php echo $c['nome']; ?></h3>
        <p>📍 <?php echo $c['cidade']; ?></p>
        <hr style="border:0; border-top:1px solid #eee;">
        <p>🔋 Potência: <strong><?php echo $c['cap']; ?></strong></p>
    </div>
    <?php endforeach; ?>
</div>
