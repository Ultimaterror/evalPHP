<?php
session_start();

var_dump($_POST);

if($_POST['images'] == "non") {
    $_SESSION['images'] = false;
}
else {
    $_SESSION['images'] = true;
}

if($_POST['annexes'] == "non") {
    $_SESSION['annexes'] = false;
}
else {
    $_SESSION['annexes'] = true;
}

if($_POST['liens'] == "oui") {
    $_SESSION['liens'] = true;
}
else {
    $_SESSION['liens'] = false;
}

var_dump($_SESSION);