<?php
include_once('db_utilities.php');

$id = isset( $_GET['id'] ) ? $_GET['id'] : '';

if( $_POST )
{

    header('Location: ../index.php');

    $nombre = isset( $_POST['nombre'] ) ? $_POST['nombre'] : '';
    $descrpcion = isset( $_POST['descrpcion'] ) ? $_POST['descrpcion'] : '';
    $Precio = isset( $_POST['Precio'] ) ? $_POST['Precio'] : '';
    $cantidad = isset( $_POST['cantidad'] ) ? $_POST['cantidad'] : '';
    

    update( $id, $nombre, $descrpcion, $Precio, $cantidad  );
    die();

}

$producto = get_user_by_id( $id );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <fieldset>
        <legend>Ingreso de Productos</legend>
            <label for="">Nombre Producto:</label>
            <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>">
            <br>
            <label for="">Description</label>
            <input type="text" name="descrpcion" value="<?php echo $producto['descrpcion']; ?>">
            <label for="">Precio</label>
            <br>
            <input type="number" name="Precio" value="<?php echo $producto['Precio']; ?>">
            <label for="">Cantidad</label>
            <input type="number" name="cantidad" value="<?php echo $producto['cantidad']; ?>">
            <br>
            <input type="submit" value="Actualizar">

    </fieldset>
    </form>
    <?php // include_once('db/list.php');?>
</body>
</html>