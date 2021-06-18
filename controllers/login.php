<?php
session_start();

$adminName = "admin";
$adminPW = "master";

if ($_POST['name'] === $adminName && $_POST['pw'] === $adminPW){
    $_SESSION['pseudo'] = $_POST['name'];
    $_SESSION['connected'] = true;
    $_SESSION['images'] = true;
    header("Location: /");
    exit();
}
header("Location: /connexion.php");
exit();