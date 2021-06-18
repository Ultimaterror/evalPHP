<header>
    <nav>
        <ul>
            <li><a href="/">Acceuil</a></li>
            <li><a href="/infos.php">Infos</a></li>
            <?php if(isset($_SESSION['connected'])) : ?>
                <li><a href="/perso.php">Page perso</a></li>
                <li><a href="/controllers/disconnect.php">Déconnexion</a></li>
            <?php else : ?>
                <li><a href="/connexion.php">Connexion</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>