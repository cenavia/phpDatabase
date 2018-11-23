<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ingreso Productos Tienda</h1>
    <form action="db/db_insert.php" method="post">
    <fieldset>
        <legend>Ingreso de Productos</legend>
            <label for="">Nombre Producto:</label>
            <input type="text" name="nombre">
            <br>
            <label for="">Description</label>
            <input type="text" name="descrpcion">
            <label for="">Precio</label>
            <br>
            <input type="number" name="Precio" id="">
            <label for="">Cantidad</label>
            <input type="number" name="cantidad" id="">
            <br>
            <input type="submit" value="Grabar">

    </fieldset>
    </form>
    <?php include_once('db/list.php');?>
</body>
</html>