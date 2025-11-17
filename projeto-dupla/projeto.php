<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/projet.css">
</head>
<body>

    <?php
    $titulo_form = "Olá,";
    $texto_cadastro = "Não tem conta?";
    $url_cadastro = "Cadastre-se!"; 
    $link_cadastro = "cadastro.php";
    ?>

    <form method="POST" action="../Siteworld/world.php">
        <fieldset>
            <h2><?= $titulo_form ?></h2>
            
            <div class="form-group">
                <label for="usuario">Username:</label>
                <input type="text" id="usuario" name="Usuário" required>
            </div> <br>
            
            <div class="form-group">
                <label for="senha">Password:</label>
                <input type="password" id="senha" name="Senha" required>
            </div> <br>
            
            <button type="submit">Entrar</button>
            
            <div class="cadastro-link">
                <h3><?= $texto_cadastro ?></h3>
                <a href="<?= $link_cadastro ?>"><?= $url_cadastro ?></a>
            </div>
        </fieldset>
    </form>

</body>
</html>