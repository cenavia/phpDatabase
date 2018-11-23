<?php
include_once('db_utilities.php');

header('Location: ../index.php');
$id = isset( $_GET['id'] ) ? $_GET['id'] : 0;
delete( $id );