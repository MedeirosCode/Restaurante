<?php
include 'config.php';
$clientes = $pdo->query("SELECT * FROM clientes")->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
<head>
    <title>Restaurante</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Clientes</h1>
    <div class="adicionar">
        
        <a href="add_cliente.php">Adicionar Cliente</a>
        
        <a href="add_produto.php">Adicionar Produto</a>
     
    </div>
    <ul>
        <?php foreach ($clientes as $cliente) { ?>
            <li><a href="pedidos.php?id=<?= $cliente['id'] ?>"> <?= $cliente['nome'] ?> </a></li>
        <?php } ?>
    </ul>
</body>
</html> 