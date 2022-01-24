<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 01</title>
    <link rel="stylesheet" href="../estilos/estilos01.css">
</head>

<body>

    <div class="contenidoPadre">
        <header class="header">
            <p class="bienvenido">Bienvenido a tu inicio de sesion</p>
        </header>
        <div class="inicio">
            <form action="../ejercicio03/clase_session.php" method="POST">
                <label for="nombre ">Nombre : </label>
                <input type="text" id="nombre" name="usuario">

                <input type="submit" value="Entrar">
            </form>

        </div>
    </div>

</body>

</html>