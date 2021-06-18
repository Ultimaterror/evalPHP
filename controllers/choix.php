<?php
session_start();

if($_POST['images'] == "non") {
    $_SESSION['imagesNon'] = false;
}
else {
    unset($_SESSION['imagesNon']);
}

if($_POST['commentaires'] == "oui") {
    $_SESSION['commentairesOui'] = true;
}
else {
    unset($_SESSION['commentairesOui']);
}

if($_POST['liens'] == "oui") {
    $_SESSION['liensOui'] = true;
}
else {
    unset($_SESSION['liensOui']);
}

header("Location: /");
exit();