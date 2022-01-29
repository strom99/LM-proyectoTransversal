<?php session_start();
//modificacion del item de una lista

switch ($_POST['action']) {

    case 'addItem':
        $listaIndice = $_POST['listaIndice'];
        $item = [
            'nombre' => $_POST['nombre'],
            'precio' => $_POST['precio'],
            'cantidad' => $_POST['cantidad']
        ];

        if ($_SESSION['itemSeleccionado'] === null) {
            array_push($_SESSION['listas'][$listaIndice]['items'], $item);
        } else {
            $itemIndice = $_SESSION['itemSeleccionado']['indice'];
            $_SESSION['listas'][$listaIndice]['items'][$itemIndice] = $item;
            // update item seleccionado
        }
        $_SESSION['itemSeleccionado'] = null;

        break;
    case 'editItem':
        $listaIndice = $_POST['listaIndice'];
        $itemIndice = $_POST['itemIndice'];
        $_SESSION['itemSeleccionado'] = $_SESSION['listas'][$listaIndice]['items'][$itemIndice];
        $_SESSION['itemSeleccionado']['indice'] = $itemIndice;
        $_SESSION['itemSeleccionado']['listaIndice'] = $listaIndice;
        break;
    case 'deleteItem':
        $listaIndice = $_POST['listaIndice'];
        $itemIndice = $_POST['itemIndice'];
        array_splice($_SESSION['listas'][$listaIndice]['items'], $itemIndice, 1);
        break;
}


header('Location: http://localhost:3008/ejercicio03/creacion_lista.php');
exit;
