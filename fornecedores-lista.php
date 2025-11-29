<?php
// fornecedores-lista.php

$arquivo_json = 'fornecedores.json';
$fornecedores = [];

// Tenta ler o arquivo
if (file_exists($arquivo_json)) {
    $conteudo = file_get_contents($arquivo_json);
    $fornecedores = json_decode($conteudo, true);
}

// Se der erro na leitura ou arquivo vazio
if (!is_array($fornecedores)) {
    $fornecedores = [];
}
?>

<h2>📋 Lista de Fornecedores Cadastrados</h2>
<div style="margin-bottom: 20px;">
    <a href="?pg=fornecedores" class="btn" style="background:#777; font-size:0.9em;">← Voltar</a>
    <a href="?pg=fornecedores-form" class="btn" style="font-size:0.9em;">+ Cadastrar Novo</a>
</div>

<?php if (count($fornecedores) > 0): ?>
    <table>
        <thead>
            <tr>
                <th>Data</th>
                <th>Nome</th>
                <th>Serviço</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // Inverte para mostrar os mais novos primeiro
            $lista_invertida = array_reverse($fornecedores);
            
            foreach ($lista_invertida as $f): 
            ?>
            <tr>
                <td><small><?php echo $f['data_cadastro'] ?? '-'; ?></small></td>
                <td><strong><?php echo $f['nome'] ?? $f['nomef'] ?? 'Sem nome'; ?></strong></td>
                <td><span style="background:#e9ecef; padding:3px 8px; border-radius:4px; font-size:0.9em;"><?php echo $f['servico'] ?? $f['tipodeservico'] ?? 'Geral'; ?></span></td>
                <td><?php echo $f['telefone'] ?? '-'; ?></td>
                <td><?php echo $f['email'] ?? '-'; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <div class="alert error" style="background-color: #fff3cd; color: #856404; border: 1px solid #ffeeba;">
        📂 Nenhum fornecedor encontrado no arquivo <strong>fornecedores.json</strong>.<br>
        Clique em "Cadastrar Novo" para começar!
    </div>
<?php endif; ?>
