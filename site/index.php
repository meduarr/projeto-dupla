<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAPATUDO | Home</title>
    <link rel="stylesheet" href="../css/header_style.css">
    <link rel="stylesheet" href="../css/index_style.css">
    <link rel="stylesheet" href="../css/slider.css">
</head>
<body>
    <?php 
        include "../components/header.php";
    ?>
    <div id="descrição">
        <div>
            <img width="350" src="../img/shadow_logo.png" alt="SAPATUDO">
        </div>
        <p>A loja onde você encontra sapatos para todos os estilos e ocasiões, com conforto, qualidade e preço acessível.</p>
    </div>
    <?php
        include "../components/slider.php";
    ?>
    <script src="../js/slider.js"></script>
</body>
</html>
