<?php 
include "session.php";
$nombre = $_GET['nombre'];
$id = $_SESSION['id'];
$sql = "UPDATE USUARIO SET NOMBRE = $nombre WHERE id = $id";
?>