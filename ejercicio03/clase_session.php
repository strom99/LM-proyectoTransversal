<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
}

if (!isset($_SESSION['salir'])) {
    $_SESSION['salir'] = $_POST['salir'];
    session_destroy();
}
// eliminar trabajador
// unset $_session['trabajador']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./inicio_sesion_clase.php">
        <h4>bienvenido <?php echo $_SESSION['usuario'] ?></h4>

        <label>Selecciona el producto que quieres modificar : </label>
        <select name="selectProducto">
            <option value="value1">Value 1</option>
            <option value="value2" selected>Value 2</option>
            <option value="value3">Value 3</option>
        </select>
        <button name="salir">salir</button>
    </form>

</body>

</html>