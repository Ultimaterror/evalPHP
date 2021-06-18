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
                <div class="form-radio">
                    <input type="radio" name="images" value="oui" checked>
                    <label for="oui">Afficher les images</label>
                </div>
                <div class="form-radio">    
                    <input type="radio" name="images" value="non">
                    <label for="non">Ne pas afficher d'images</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-radio">
                    <input type="radio" name="commentaires" value="oui">
                    <label for="oui">Afficher les commentaires</label>
                </div>
                <div class="form-radio">
                    <input type="radio" name="commentaires" value="non" checked>
                    <label for="non">Ne pas afficher de commentaires</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-radio">
                    <input type="radio" name="liens" value="oui">
                    <label for="oui">Afficher les liens</label>
                </div>
                <div class="form-radio">
                    <input type="radio" name="liens" value="non" checked>
                    <label for="non">Ne pas afficher de liens</label>
                </div>
            </div>
        <button type="submit">Validation</button>
    </form>
    <?php else : ?>
        <h1>Vous devez être connecté pour accéder à cette page</h1>
    <?php endif ?>
</body>
</html>