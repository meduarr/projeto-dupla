<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>\Projeto</title>
    <link rel="stylesheet" href="css/projet.css">
</head>
<body>

    <?php
    echo '<form>';
       echo '<fieldset>';
        echo '<h2> Olá </h2>';
          echo 'Username: <input type="text" name="Usuário" required> <br> <br>';
          echo 'Password: <input type="password" name="Senha" required> <br> <br>';
        echo '<button type="submit"> Entrar </button>';
          echo '<h3> Não tem conta?</h3>';
          echo '<a href " "> Cadastre-se</a>';
       echo '</fieldset>';
    echo '</form>';

    ?>
    
</body>
</html>