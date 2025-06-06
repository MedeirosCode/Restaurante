<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/desaparecidos/assets/css/style.css">
    <link rel="icon" href="../desaparecidos/photos/imagemdosite.png">
    <title>Site de compra</title>
    
</head>
<body>
    <div>
        <ul>
            <li><a href="/desaparecidos/home" class="<?= ($_GET['url'] == 'home') ? 'active' : '' ?>">Home</a></li>
            <li><a href="/desaparecidos/produto" class="<?= ($_GET['url'] == 'produto') ? 'active' : '' ?>">Produtos</a></li>
            <li><a href="/desaparecidos/cliente" class="<?= ($_GET['url'] == 'cliente') ? 'active' : '' ?>">Clientes</a></li>
            <li class="link-usuario"><a href="/desaparecidos/usuario" class="<?= ($_GET['url'] == 'usuario') ? 'active' : '' ?>">Usuário</a></li>
        </ul>
    </div>

    <div class="container">
        <?php
            $url = $_GET['url'] ?? '/';
            require 'rotas.php';
        ?>
    </div>
</body>
<!--<script src="./assets/js/script.js"></script>-->

</html>
