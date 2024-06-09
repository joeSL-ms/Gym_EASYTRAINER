<?php
 #Coneccion con la base de datos
    $servidor = "localhost";
    $usuario = "easytrainer";
    $contraseña = "c0ntr4s3n14";
    $database = "easytrainer";

    $conn = new mysqli($servidor,$usuario,$contraseña,$database);

    if($conn -> connect_error){
        die("Error de conexcion: " . $connect_error);
    }
?>