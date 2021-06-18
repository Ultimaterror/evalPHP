<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos</title>
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/infos.css">
</head>
<body>
    <?php require 'templates/header.php'; ?>
    <h1>Infos</h1>
    <div class="fcenter">
        <h3>Attention</h3>
        <p>
            Il ne faut pas confondre le pingouin et les manchots.
            <br>
            <?php if(isset($_SESSION['commentaires'])) :?>
                <span class="comm">C'est une faute courante hélas.</span>
                <br>
            <?php endif ?>
        </p>
        <p>Et un pingouin ...</p>
        <?php if(isset($_SESSION['images'])) : ?>
            <img src="/images/pingouin.jpg" alt="pingouin">
            <span class="src">Source : Wikipedia</span>
            <?php if(isset($_SESSION['liens'])) :?>
                <a href="https://fr.wikipedia.org/wiki/Pingouin">ICI</a>
            <?php endif ?>
        <?php endif ?>
        <p>ça peut voler</p>
        <?php if(isset($_SESSION['images'])) : ?>
            <img src="/images/pingouin-en-vol.jpg" alt="pingouin en vol">
            <span class="src">Source : Futura Sciences</span>
            <?php if(isset($_SESSION['liens'])) :?>
                <a href="https://www.futura-sciences.com/planete/actualites/zoologie-manchots-ne-volent-ils-pas-comme-pingouins-46579/">ICI</a>
            <?php endif ?>
        <?php endif ?>
    </div>
    <div class="fcenter">
        <p>
            Le manchot empereur, de son nom scientifique "Aptenodytes forsteri"
            <?php if(isset($_SESSION['commentaires'])) :?>
                <span class="comm">(Comme tous les noms scientifiques, c'est pourri)</span>
            <?php endif ?>
            , vit principalement en Antarctique.
        </p>
        <?php if(isset($_SESSION['images'])) : ?>
            <img src="/images/manchot_empereur_groupe.jpg" alt="Manchot Groupe">
            <span class="src">Source : Futura Sciences</span>
            <?php if(isset($_SESSION['liens'])) :?>
                <a href="https://www.futura-sciences.com/planete/definitions/zoologie-manchot-empereur-9866/">ICI</a>
            <?php endif ?>
        <?php endif ?>
        <p>
            Seul 19% des oisillons fêtent leur premier anniversaire.
            <?php if(isset($_SESSION['commentaires'])) :?>
                <br>
                <span class="comm">Les pauvres TT</span>
            <?php endif ?>
        </p>
        <?php if(isset($_SESSION['images'])) : ?>
            <img src="/images/manchot_empereur_bebes.jpg" alt="Manchot Bébés">
            <span class="src">Source : Wikipedia</span>
            <?php if(isset($_SESSION['liens'])) :?>
                <a href="https://fr.wikipedia.org/wiki/Manchot_empereur">ICI</a>
            <?php endif ?>
        <?php endif ?>
    </div>
    <div class="fcenter">
        <p>
            Les manchots ne savent peut-être pas voler, mais ce sont d'excellents nageurs.
            <?php if(isset($_SESSION['commentaires'])) :?>
                <br>
                <span class="comm">Ceux qui les ont vu nager disent qu'ils volent sous l'eau.</span>
            <?php endif ?>
        </p>
        <?php if(isset($_SESSION['images'])) : ?>
            <img src="/images/manchot_empereur_nage.jpg" alt="pingouin">
            <span class="src">Source : WWF Ranger Club</span>
            <?php if(isset($_SESSION['liens'])) :?>
                <a href="https://rangerclub.be/fr/photos/animaux/manchot-empereur/">ICI</a>
            <?php endif ?>
        <?php endif ?>
    </div>
    <div id="fleft">
        <h4>Sources</h4>
        <ul class="info_sources">
            <?php if(isset($_SESSION['liens'])) :?>
                <li><a href="https://fr.wikipedia.org/wiki/Manchot_empereur">Wikipedia</a></li>
                <li><a href="https://www.futura-sciences.com/planete/definitions/zoologie-manchot-empereur-9866/">Futura Sciences</a></li>
                <li><a href="https://rangerclub.be/fr/photos/animaux/manchot-empereur/">WWF Ranger Club</a></li>
            <?php else : ?>
                <li>Wikipedia</li>
                <li>Futura Sciences</li>
                <li>WWF Ranger Club</li>
            <?php endif ?>
        </ul>
    </div>
    <?php if(isset($_SESSION['commentaires'])) :?>
        <p class="comm">J'ai mis le fond noir pour que la neige et la glace ressortent mieux</p>
    <?php endif ?>
</body>
</html>