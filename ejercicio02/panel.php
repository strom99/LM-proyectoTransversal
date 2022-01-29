<?php session_start(); //en el servidor
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/estilos01.css">
</head>
<!-- 
    2. Crea un php con un array inicial con 3 valores numéricos.
    - crea un formulario que permita modificar el valor en una posición en
    concreto.
    - Consigue que se mantenga las modificaciones en el array.
    - Añade un botón para calcular el valor medio.
-->
<?php
$array = [0, 1, 2];

$posicion = $_GET['posicion'];
$numero = $_GET['numero'];
$calculo = $_GET['media_array'];

if (isset($_GET['reiniciar_array'])) {
    $_SESSION['array'] = $array;
}

if (!$_SESSION['array']) {
    $_SESSION['array'] = $array;
}
if (isset($_SESSION['array'][$posicion]) && $numero !== null) {
    $_SESSION['array'][$posicion] = $numero;
}

if (isset($calculo)) {
    // Alternativa en php
    //$suma = array_sum($_SESSION['array']);
    $suma = 0;
    foreach ($_SESSION['array'] as $numero) {
        $suma += $numero;
    }
    $media = $suma / count($_SESSION['array']);
}

?>

<body class="flot">
    <div class="contenidoPadre">
        <p class="header">
            <?php echo " Tus numeros de la suerte son : " . implode(',', $_SESSION['array']) ?>
        </p>

        <form class="form_recuadro">
            <p>que posicion quieres modificar ?</p>
            <input type="number" name="posicion">
            <p>que numero quieres escribir ?</p>
            <input type="number" name="numero">
            <input type="submit" value="Modificar"><br>

            <div class="calculo">
                <p>calcular valor medio del array :</p>
                <input type="submit" value="Media" name="media_array">
                <?php if (isset($media)) {
                    echo '<p>Media del array: ' . $media . '</p>';
                } ?>


                <input type="submit" value="Reiniciar array" name="reiniciar_array">
            </div>
        </form>
    </div>
</body>

</html>