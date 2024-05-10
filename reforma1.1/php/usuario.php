<?php
if(isset($_SESSION["username"])){
    $username = $_SESSION["username"];
    $enlace = "../usuario/perfil-usuario.php";
    $nombre = "Usuario";
    $link = "../php/cerrar_sesion.php";
    $sesion = "Cerrar sesión";
}else{
    $username = "Nombre del usuario";
    $enlace = "../perfil/index.html";
    $nombre = "Perfil";
    $link = $enlace;
    $sesion = "Iniciar sesión";
}
?>