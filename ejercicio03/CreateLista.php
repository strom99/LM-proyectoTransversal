<?php session_start();


if (!isset($_SESSION['listas'])) {
    $_SESSION['listas'] = [];
}

$lista = [
    'nombre' => $_POST['nombre_lista'],
    'items' => []
];

array_push($_SESSION['listas'], $lista);

var_dump($_SESSION['listas']);



header('Location: http://localhost:3008/ejercicio03/creacion_lista.php');
exit;
