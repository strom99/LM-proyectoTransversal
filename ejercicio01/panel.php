<?php session_start(); ?>

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

// if(isset($_post['nombre']) && isset($_post['nombre_producto'])){
//  
//
//    if(isset($_post['add_producto'])){
//
//      }
//}
if (!isset($_SESSION['nombre'])) {
    $_SESSION['nombre'] = $_POST['nombre'];
}
if (!$_SESSION['leche']) {
    $_SESSION['leche'] = 0;
}

if (!$_SESSION['refresco']) {
    $_SESSION['refresco'] = 0;
}
?>

<body>
    <div class="flot">
        <div class="contenidoPadre">
            <div class="header">
                <h3> Bienvenido <?php echo $_SESSION['nombre'] ?></h3>
                <form class="inicio" action="../ejercicio01/cerrar_sesion.php" method="POST">
                    <input type="submit" value="Salir">
                </form>
            </div>

            <form action="../ejercicio01/incrementar_ingredientes.php" method="POST">
                <div class="form_recuadro">
                    <span>Cantidad de leche : </span>
                    <p><?php echo $_SESSION['leche'] ?></p>
                    <button name="masLeche" type="submit"> + </button>
                    <button name="quitarLeche" type="submit"> - </button><br>
                    <span><?php echo ($_SESSION['leche'] <= 0) ? "ya no hay mas leche que quitar!" : '' ?></span>
                </div>
                <div class="form_recuadro">
                    <span>Cantidad de refresco : </span>
                    <p><?php echo $_SESSION['refresco'] ?></p>
                    <button name="masRefresco" type="submit"> + </button>
                    <button name="quitarRefresco" type="submit"> - </button><br>
                    <span><?php echo ($_SESSION['refresco'] <= 0) ? "ya no hay mas refrescos que quitar!" : '' ?></span>
                </div>
            </form>
        </div>
    </div>
</body>

</html>