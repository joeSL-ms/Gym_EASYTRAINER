<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['username'])) {
    // Si el usuario ha iniciado sesión, mostrar su nombre de usuario
    $username = $_SESSION['username'];
    $enlacePerfil = "../usuario/perfil-usuario.php"; // Reemplaza esto con la ruta correcta
    $textoEnlacePerfil = "Usuario";
    $enlaceEntreno = "../usuario/entrenos-usuario.php";
    $textoEnlaceEntreno = "MIS ENTRENOS";

} else {
    $enlacePerfil = "../perfil/index.php"; // Reemplaza esto con la ruta correcta
    $textoEnlacePerfil = "Perfil";
    $enlaceEntreno = "../entrenamiento/index.php"; // Reemplaza esto con la ruta correcta
    $textoEnlaceEntreno = "Entrenamientos";
}
?>