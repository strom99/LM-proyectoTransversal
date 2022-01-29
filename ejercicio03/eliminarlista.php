<?php
session_start();

$listaIndice = $_POST['listaIndice'];
array_splice($_SESSION['listas'], $listaIndice, 1);

header("Location: http://localhost:3008/ejercicio03/creacion_lista.php");
exit;
