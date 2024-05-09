<?php
include "credenciales.php";
    $servidor = $ser;
    $usuario = $nombre;
    $contraseña = $pass;
    $database = $db;

    $conn = new mysqli($servidor,$usuario,$contraseña,$database);

    if($conn -> connect_error){
        die("Error de conexcion: " . $connect_error);
    }
?>