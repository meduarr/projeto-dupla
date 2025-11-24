<?php
    session_start();
    include "../components/db.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nome  = $_POST['nome']  ?? '';
        $senha = $_POST['senha'] ?? '';

        $sql   = "SELECT * FROM usuarios WHERE nome = ? AND senha = ?";
        $stmt  = $conn -> prepare($sql);
        $stmt -> bind_param("ss", $nome, $senha);
        $stmt -> execute();
        $resultado = $stmt -> get_result();
        
        if ($resultado -> num_rows > 0) {
            $_SESSION['nome'] = $nome;
            header("Location: index.php");
            exit;
        } else {
            $_SESSION['erro'] = "Usuário ou senha incorretos!";
            header("Location: login.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAPATUDO | Login</title>
    <link rel="stylesheet" href="../css/header_style.css">
    <link rel="stylesheet" href="../css/login.css">

    <style>
        body{
            margin: 0;
            background-color: #181818ff;
        }
    </style>
</head>
<body>
    <?php 
    include "../components/header.php";
    ?>
    <div>
        <div class="login">
            <?php if (isset($_SESSION['erro'])): ?>
                <h1 style="margin-bottom: 5px;">Olá <b id="Hello"></b><b id="title-final" class="underline"></b></h1>
                <p class="error"><?php echo  $_SESSION['erro']; ?></p>
            <?php else: ?>
                <h1>Olá <b id="Hello"></b><b id="title-final" class="underline"></b></h1>
            <?php endif; ?>
            <form method="post">
                <div>
                    <label for="nome">Username</label>
                    <div>
                        <input type="text" name="nome" id="nome">
                    </div>
                </div>
                <div>
                    <label for="senha">Password</label>
                    <div class="password">
                        <input type="password" name="senha" id="senha">
                        <button type="button" onclick="versenha()" id="botton_senha"><img src="../img/hidden.png" id="img_senha" width="20"></button>
                    </div>
                </div>
                <div>
                    <a id="forgot">Forgot password?</a>
                </div>
                <div>
                    <button type="submit" id="button">Entrar</button>
                </div>
                <div>
                    <a href="cadastro.php" id="cadastro">Create an account</a>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/h1chance.js"></script>
    <script src="../js/showpassword.js"></script>
</body>
</html>