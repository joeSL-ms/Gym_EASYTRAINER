<?php
if(isset($_SESSION["username"])){
    $username = $_SESSION["username"];
    $enlace = "../usuario/perfil-usuario.php";
    $nombre = "Usuario";
    $link = "../php/cerrar_sesion.php";
    $sesion = "Cerrar sesión";
}else{
    $username = "Nombre del usuario";
<<<<<<< HEAD
    $enlace = "../perfil/index.php";
=======
    $enlace = "../perfil/index.html";
>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
    $nombre = "Perfil";
    $link = $enlace;
    $sesion = "Iniciar sesión";
}
?>