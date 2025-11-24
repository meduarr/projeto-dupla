<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SAPATUDO | Shop</title>
    <link rel="stylesheet" href="../css/header_style.css">
    <link rel="stylesheet" href="../css/shop.css">
</head>
<body>
    <?php 
    include "../components/header.php";
    ?>
    <div class="shop">
        <h2>Produtos:</h2>
        <div class="produtos">
            <div class="produto">
                <img id="imgproduto" src="../img/sapato1.jpg" width="250">
                <div class="preco">
                    <p id="precoatual">R$ 41.99</p>
                    <p id="precopassado">R$ 79.00</p>
                </div>
                <button id="buttonproduto" type="button">Comprar</button>
            </div>
            <div class="produto">
                <img id="imgproduto" src="../img/sapato2.jpg" width="250">
                <div class="preco">
                    <p id="precoatual">R$ 33.99</p>
                    <p id="precopassado">R$ 66.00</p>
                </div>
                <button id="buttonproduto" type="button">Comprar</button>
            </div>
            <div class="produto">
                <img id="imgproduto" src="../img/sapato3.jpg" width="250">
                <div class="preco">
                    <p id="precoatual">R$ 89.99</p>
                </div>
                <button id="buttonproduto" type="button">Comprar</button>
            </div>
        </div>
    </div>
</body>
</html>