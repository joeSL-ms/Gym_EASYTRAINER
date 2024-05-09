<?php
session_start();
if(isset($_SESSION["username"])){
    $username = $_SESSION["username"];
    $enlace = "perfil-usuario.php";
    $nombre = "Usuario";
    $link = "../php/cerrar_sesion.php";
    $sesion = "Cerrar sesion";
}else{
    $username = "Nombre del usuario";
    $enlace = "../perfil/index.html";
    $nombre = "Perfil";
    $link = $enlace;
    $sesion = "Inicio sesion";
}
?>