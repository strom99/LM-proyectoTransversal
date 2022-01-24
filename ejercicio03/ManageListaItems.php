<?php session_start();


switch ($_POST['action']) {

    case 'addItem':
        $item = [
            'nombre' => $_POST['nombre'],
            'precio' => $_POST['precio'],
            'cantidad' => $_POST['cantidad']
        ];
        $listaIndice = $_POST['listaIndice'];
        array_push($_SESSION['listas'][$listaIndice]['items'], $item);
        break;
    case 'editItem':
        break;
    case 'deleteItem':
        $listaIndice = $_POST['listaIndice'];
        $itemIndice = $_POST['itemIndice'];
        array_splice($_SESSION['listas'][$listaIndice]['items'], $itemIndice, 1);
        break;
}


header('Location: http://localhost:3008/ejercicio03/creacion_lista.php');
exit;
