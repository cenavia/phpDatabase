<?php
    include_once('db_utilities.php');
    $result = run_query();
?>
<table>
    <thead>
        <tr>
        <th width="200">Producto</th>
        <th>descripcion</th>
        <th width="150">Precio</th>
        <th width="350">cantidad</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        while($producto = $result->fetch_assoc())
        {
        ?>
        <tr>
        <td><?php echo $producto['nombre']; ?></td>
        <td><?php echo $producto['descrpcion']; ?></td>
        <td><?php echo $producto['Precio']; ?></td>
        <td><?php echo $producto['cantidad']; ?></td>
        <td>
            <a href="db/details.php?id=<?php echo $producto['prod_id']; ?>" >Detalles</a>
            <a href="db/delete.php?id=<?php echo $producto['prod_id']; ?>" >Eliminar</a>
        </td>
        
        </tr>
        <?php
    }
        ?>
    </tbody>
</table>