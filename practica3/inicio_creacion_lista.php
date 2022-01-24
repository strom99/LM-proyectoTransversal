<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion Listas</title>
</head>

<body>

    <div>
        <h4>Crea tus listas</h4>
    </div>

    <form method="POST">
        <label for="lista">Nombre Lista :</label>
        <input type="text" id="lista" name="nombre_lista">
        <input type="submit" value="Crear Lista">
    </form>

    <?php

    $lista = [
        'nombrelista' => $_POST['nombre_lista']
    ];

    if (!isset($_SESSION['lista'])) {
        $_SESSION['lista'] = [];
    }

    array_push($_SESSION['lista'], $lista);
    var_dump($_SESSION['lista']);


    ?>



</body>

</html>