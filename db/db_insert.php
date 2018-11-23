<?php
include_once('db_utilities.php');
if( $_POST )
{
    header('Location: ../index.php');

    $nombre = isset( $_POST['nombre'] ) ? $_POST['nombre'] : '';
    $descrpcion = isset( $_POST['descrpcion'] ) ? $_POST['descrpcion'] : '';
    $Precio = isset( $_POST['Precio'] ) ? $_POST['Precio'] : '';
    $cantidad = isset( $_POST['cantidad'] ) ? $_POST['cantidad'] : '';
    
    add( $nombre, $descrpcion, $Precio, $cantidad );
    die();
}

?>
