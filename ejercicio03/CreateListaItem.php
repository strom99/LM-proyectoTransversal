<?php session_start();

$item = [
    'nombre' => $_POST['nombre'],
    'precio' => $_POST['precio'],
    'cantidad' => $_POST['cantidad']
];

$listaIndice = $_POST['listaIndice'];

array_push($_SESSION['listas'][$listaIndice]['items'], $item);





header('Location: http://localhost:3008/ejercicio03/creacion_lista.php');
exit;
