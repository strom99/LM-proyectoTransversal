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

<body>
    <p><?php echo implode(',', $_SESSION['array']) ?></p>

    <form>
        <p>que posicion quieres modificar ?</p>
        <input type="number" name="posicion">
        <p>que numero quieres reescribir ?</p>
        <input type="number" name="numero">
        <input type="submit">

        <p>calcular valor medio del array :</p>
        <input type="submit" value="Media" name="media_array">
        <?php if (isset($media)) {
            echo '<p>Media del array: ' . $media . '</p>';
        } ?>


        <input type="submit" value="Reiniciar array" name="reiniciar_array">
    </form>


</body>

</html>