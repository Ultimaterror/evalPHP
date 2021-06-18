<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perso</title>
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
    <?php require 'templates/header.php'; ?>
    <?php if(isset($_SESSION['connected'])) : ?>
        <h1>Bonjour <?= ucfirst($_SESSION['pseudo']) ?></h1>
        <form action="/controllers/choix.php" method="POST">
            <div class="form-group">
                <input type="checkbox" name="images" checked>
                <label for="images">Afficher les images</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="commentaires">
                <label for="commentaires">Afficher les commentaires</label>
                </div>
            <div class="form-group">
                <input type="checkbox" name="liens">
                <label for="liens">Afficher les liens</label>
            </div>
        <button type="submit">Validation</button>
    </form>
    <?php else : ?>
        <h1>Vous devez être connecté pour accéder à cette page</h1>
    <?php endif ?>
</body>
</html>