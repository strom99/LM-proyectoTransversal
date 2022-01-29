<?php

session_start();

if (isset($_POST['masLeche'])) {
    $_SESSION['leche']++;
}

if (isset($_POST['quitarLeche'])) {
    if ($_SESSION['leche'] <= 0) {
        $_SESSION['leche'];
    } else {
        $_SESSION['leche']--;
    }
}


if (isset($_POST['masRefresco'])) {
    $_SESSION['refresco']++;
}

if (isset($_POST['quitarRefresco'])) {
    if ($_SESSION['refresco'] <= 0) {
        $_SESSION['refresco'];
    } else {
        $_SESSION['refresco']--;
    }
}

header('Location: http://localhost:3008/ejercicio01/panel.php');
exit;
