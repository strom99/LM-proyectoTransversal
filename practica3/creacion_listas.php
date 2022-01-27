<?php
session_start();
if (!isset($_SESSION['lista'])) {
    $_SESSION['lista'] = [];
}

$name = $_POST['nombre_lista'];
array_push($_SESSION['lista'], $name);
//$_SESSION['lista'][0] = $name;

header("Location: http://localhost:3008/practica3/inicio_creacion_lista.php");
exit;
