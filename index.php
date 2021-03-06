<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/header.css">
</head>
<body>
    <?php require 'templates/header.php'; ?>
    <h1>Accueil</h1>
    <div>
        <p>Sur ce site je vais parler de manchots, et plus particulièrement des manchots empereurs.</p>
        <?php if(isset($_SESSION['commentaires'])) :?>
        <p class="comm">J'ai demandé à ma mère pour le thème et elle m'a dit ça.</p>
        <?php endif ?>
    </div>
    <?php if(isset($_SESSION['images'])) : ?>
        <img src="/images/manchot_empereur_seul.jpg" alt="Manchot Seul">
        <span class="src">Source : Futura Sciences</span>
        <?php if(isset($_SESSION['liens'])) :?>
            <a href="https://www.futura-sciences.com/planete/definitions/zoologie-manchot-empereur-9866/">ICI</a>
        <?php endif ?>
    <?php endif ?>
</body>
</html>