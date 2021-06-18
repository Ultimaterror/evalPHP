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
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus corporis aut officia illum similique nostrum cum eveniet sapiente molestias, saepe repudiandae, quae voluptatum sit dolore nihil non quos obcaecati dicta?</p>
    <?php 
    
    if($_SESSION['images'] !== false){
        echo "<br>test images";
    }
    if($_SESSION['annexes'] !== false){
        echo "<br>test annexes";
    }
    if($_SESSION['liens'] !== false){
        echo "<br>test liens";
    }
    echo "<br>";
    var_dump($_SESSION);
    ?>
</body>
</html>