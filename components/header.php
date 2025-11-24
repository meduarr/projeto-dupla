<header>
    <img src="../img/logo_sapatudo.png" width="185" id="logo">
    <nav>
        <ul>
            <li><a href="index.php"><img id="icon" src="../img/home.png" width="30" style="filter: invert();">Home</a></li>
            <li><a href="shop.php"><img id="icon" src="../img/shopping-cart.png" width="30" style="filter: invert();">Shop</a></li>
        </ul>
    </nav>
    <?php if (isset($_SESSION['nome'])): ?>
        <?php $nome = $_SESSION['nome'];?>
            <p style="padding-right: 40px; color: white;font-family: 'Hubballi';font-weight: 900;font-size: 20px;">Olá <?php echo $nome; ?></p>
    <?php else: ?>
            <a href="login.php"><button>Entrar</button></a>
    <?php endif;?>
</header>