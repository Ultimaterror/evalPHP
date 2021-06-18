<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
    <?php if(isset($_SESSION['connected'])) {
        header('Location: /');
        exit();
    } ?>
    <?php require 'templates/header.php'; ?>
    <h1>Connexion</h1>
    <form action="./controllers/login.php" method="POST">
        <div class="form-group">
            <label for="name">Nom :</label>
            <input value="admin" name="name" type="text">
        </div>
        <div class="form-group">
            <label for="pw">Mot de passe :</label>
            <input value="master" name="pw" type="password">
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>