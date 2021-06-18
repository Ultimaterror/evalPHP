<?php
session_start();

if($_POST['images'] == "on") {
    $_SESSION['images'] = true;
}
else {
    unset($_SESSION['images']);
}

if($_POST['commentaires'] == "on") {
    $_SESSION['commentaires'] = true;
}
else {
    unset($_SESSION['commentaires']);
}

if($_POST['liens'] == "on") {
    $_SESSION['liens'] = true;
}
else {
    unset($_SESSION['liens']);
}
header("Location: /");
exit();