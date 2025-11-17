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

     echo '<form method="POST action=" ">';
     echo '<fieldset>';
     echo '<h2> '. $titulo_form .' </h2>';
     echo 'Username: <input type="text" name="Usuário" required> <br> <br>';
     echo 'Password: <input type="password" name="Senha" required> <br> <br>';
     echo '<button type="submit"> Entrar </button>';
     echo '<h3> '. $texto_cadastro .'</h3>';
     echo '<a href " "> '. $url_cadastro.' </a>';
     echo '</fieldset>';
     echo '</form>';

    ?>

</body>
</html>