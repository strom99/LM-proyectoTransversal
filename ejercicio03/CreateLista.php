<?php session_start();

$datolista = $_POST['nombre_lista'];
if ($datolista != null) {
    if (!isset($_SESSION['listas'])) {
        $_SESSION['listas'] = [
            // $lista = []
        ];
    }
    $lista = [
        'nombre' => $_POST['nombre_lista'],
        'items' => []
    ];

    array_push($_SESSION['listas'], $lista);
}




header('Location: http://localhost:3008/ejercicio03/creacion_lista.php');
exit;
