<?php 

session_start();
require_once __DIR__ . '/../components/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome  = $_POST['nome']  ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($nome && $senha) {
        $sql  = "INSERT INTO usuarios (nome, senha) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $nome, $senha);
        if ($stmt->execute()) {
            header("Location: login.php");
        }  
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAPATUDO | Cadastro</title>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>
    <div class="login">
        <h1>Criar Conta</h1>
        <form action="" method="post">
                <div>
                    <label for="nome">Username</label>
                    <div>
                        <input type="text" name="nome" id="nome" require>
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
                    <label for="senha" id="label-cs">Confirm password</label>
                    <div class="password">
                        <input type="password" name="senha" id="senha2">
                        <button type="button" onclick="versenha2()" id="botton_senha"><img src="../img/hidden.png" id="img_senha2" width="20"></button>
                    </div>
                </div>
                <div>
                    <button type="submit" id="create" disabled>Criar</button>
                </div>
                <div>
                    <a href="login.php">Login</a>
                </div>
            </form>
    </div>
    <div class="img"></div>
    <script src="../js/showpassword.js"></script>
    <script src="../js/confirmpassword.js"></script>
    <script src="../js/showpassword2.js"></script>
</body>
</html>