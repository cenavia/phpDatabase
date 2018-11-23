<?php
require_once('db_credentials.php');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if ($mysqli->connect_errno){
    echo 'Error en la conexion';
    exit;
}

function run_query(){
    global $mysqli, $result;
    $sql = 'SELECT * FROM productos';
    return $mysqli->query($sql);
}

function add( $nombre, $descrpcion, $Precio, $cantidad )
{
	global $mysqli;
	$sql = "INSERT INTO productos (prod_id, nombre, descrpcion, Precio, cantidad) VALUES (null, '{$nombre}', '{$descrpcion}', '{$Precio}', '{$cantidad}')";
	$mysqli->query($sql);

}

function update( $id, $nombre, $descrpcion, $Precio, $cantidad )
{
	global $mysqli;
	$sql = "UPDATE productos SET nombre = '{$nombre}', descrpcion = '{$descrpcion}', Precio = '{$Precio}', cantidad = '{$cantidad}' WHERE prod_id = {$id}";
	$mysqli->query( $sql );

}

function delete( $id )
{
	global $mysqli;
	$sql = "DELETE FROM productos WHERE prod_id = {$id}";
	$mysqli->query($sql);
}

function get_user_by_id( $id )
{
	global $mysqli;
	$sql = "SELECT * FROM productos WHERE prod_id = {$id}";
	$result = $mysqli->query($sql);
	if( $result->num_rows )
		return $result->fetch_assoc();
	return false;

}