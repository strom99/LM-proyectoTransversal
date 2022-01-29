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
<!-- 
    3. crea un código php que permita gestionar una lista de la compra.
    - Permite asignar un nombre a la lista.
    - Permite añadir un nuevo item
    - Permite editar un item en concreto
    - Permite borrar un item en concreto.
    - Permite almacenar de cada item su precio y cantidad
    - Muestra el coste total de la lista
    - Permite gestionar varias listas de la compra.
-->

<body class="flot">
    <div class="contenidoPadre">
        <!-- Inicio para crear lista -->
        <header class="header">
            <h2>Gestiona las listas de tu compras</h2>
        </header>
        <form action="CreateLista.php" method="POST" class="form_recuadro">
            <label for="nombrelista">nombre de la lista : </label>
            <input name="nombre_lista" type="text" for="nombrelista">
            <input type="submit" value="Crear">
        </form>
        <!-- -------------- -->

        <?php if (isset($_SESSION['listas']) && count($_SESSION['listas']) != 0) : ?>
            <!-- ahora existe session lista , y imprime el ul-->
            <ul class="scroll">
                <!-- recorre sesssion lista -->
                <?php foreach ($_SESSION['listas'] as $index => $lista) : ?>
                    <li class="form_recuadro">
                        <div style="display: flex; gap:30px; align-items:center">
                            <h2>Lista <?php echo $lista['nombre'] ?></h2>
                            <form action="eliminarlista.php" method="POST">
                                <input type="hidden" name="listaIndice" value="<?php echo $index ?>">
                                <input type="submit" value="eliminar lista">
                            </form>
                        </div>
                        <form action="ManageListaItems.php" method="POST">
                            <input placeholder="Nombre" type="text" name="nombre" value="<?php echo ($_SESSION['itemSeleccionado']['listaIndice'] == $index) ? $_SESSION['itemSeleccionado']['nombre'] : '' ?>" required>
                            <input placeholder="Precio" type="number" name="precio" value="<?php echo ($_SESSION['itemSeleccionado']['listaIndice'] == $index) ? $_SESSION['itemSeleccionado']['precio'] : '' ?>" required>
                            <input placeholder="Cantidad" type="number" name="cantidad" value="<?php echo ($_SESSION['itemSeleccionado']['listaIndice'] == $index) ? $_SESSION['itemSeleccionado']['cantidad'] : '' ?>" required>
                            <input type="hidden" name="listaIndice" value="<?= $index ?>">
                            <input type="hidden" name="action" value="addItem">
                            <button title="Añadir item" type="submit">
                                <?php echo ($_SESSION['itemSeleccionado'] && $_SESSION['itemSeleccionado']['listaIndice'] == $index) ? "Actualizar" : " + " ?>
                            </button>
                        </form>

                        <!-- Impresion Lista de productos -->
                        <ul>
                            <?php foreach ($lista['items'] as $itemIndice => $item) : ?>
                                <li>
                                    <?php echo $item['nombre'] . " : "; ?>
                                    <?php echo $item['cantidad'] ?> - <?php echo " total :" . ($item['precio'] * $item['cantidad']) ?>€

                                    <form action="ManageListaItems.php" method="POST">
                                        <input type="hidden" name="listaIndice" value="<?= $index ?>">
                                        <input type="hidden" name="itemIndice" value="<?= $itemIndice ?>">
                                        <input type="hidden" name="action" value="editItem">
                                        <button>Editar</button>
                                    </form>

                                    <form action="ManageListaItems.php" method="POST">
                                        <input type="hidden" name="listaIndice" value="<?= $index ?>">
                                        <input type="hidden" name="itemIndice" value="<?= $itemIndice ?>">
                                        <input type="hidden" name="action" value="deleteItem">
                                        <button>Eliminar</button>
                                    </form>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach ?>
            </ul>

        <?php endif ?>
    </div>

</body>

</html>