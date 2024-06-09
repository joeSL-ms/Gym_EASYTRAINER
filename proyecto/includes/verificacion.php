<?php
session_start();

include "session.php";
// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['username'])) {
    // Si el usuario ha iniciado sesión, mostrar su nombre de usuario
    $username = $_SESSION['username'];
    $enlacePerfil = "../../views/usuario/perfil-usuario.php"; // Reemplaza esto con la ruta correcta
    $textoEnlacePerfil = "Usuario";
    $enlaceEntreno = "../../views/usuario/entrenos-usuario.php";
    $textoEnlaceEntreno = "MIS ENTRENOS";
} else {
    $username = "Nombre del usuario";
    $enlacePerfil = "../perfil/"; // Reemplaza esto con la ruta correcta
    $textoEnlacePerfil = "Perfil";
    $enlaceEntreno = "../../views/entrenamiento"; // Reemplaza esto con la ruta correcta
    $textoEnlaceEntreno = "Entrenamientos";
}
if(isset($_SESSION["username"])){
    $enlace = "../usuario/perfil-usuario.php";
    $nombre = "Usuario";
    $link = "../../includes/cerrar_sesion.php";
    $sesion = "Cerrar sesión";
}else{
    $enlace = "../perfil/index.php";
    $nombre = "Perfil";
    $link = $enlace;
    $sesion = "Iniciar sesión";
}
?>