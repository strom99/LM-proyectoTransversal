<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Inicio para crear lista -->
    <header class="header">
        <h2>Gestiona las listas de tu compras</h2>
    </header>
    <form action="CreateLista.php" method="POST">
        <label for="nombrelista">nombre de la lista : </label>
        <input name="nombre_lista" type="text" for="nombrelista">
        <input type="submit" value="Crear">
    </form>
    <!-- -------------- -->


    <?php if (isset($_SESSION['listas'])) : ?>
        <ul>
            <?php foreach ($_SESSION['listas'] as $index => $lista) : ?>
                <li>
                    <h2>Lista <?php echo $lista['nombre'] ?></h2>
                    <form action="ManageListaItems.php" method="POST">
                        <input placeholder="Nombre" type="text" name="nombre">
                        <input placeholder="Precio" type="number" name="precio">
                        <input placeholder="Cantidad" type="number" name="cantidad">
                        <input type="hidden" name="listaIndice" value="<?= $index ?>">
                        <input type="hidden" name="action" value="addItem">
                        <button title="Añadir item" type="submit">+</button>
                    </form>
                    <ul>
                        <?php foreach ($lista['items'] as $itemIndice => $item) : ?>
                            <li>
                                <?php echo $item['nombre']; ?>
                                <?php echo $item['cantidad'] ?> - <?php echo $item['precio'] * $item['cantidad'] ?>€
                                <button>Editar</button>
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

</body>

</html>