<?php
include "session.php";
// Conexión a la base de datos
$confirmacion = "false";
// Procesar formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["pswd_log"];     

    // Busca el usuario en la base de datos
    $sql = "SELECT * FROM usuario WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($password == $row["contraseña"]) {
            session_start();
            // Inicio de sesión exitoso, establece las variables de sesión si lo deseas
            $_SESSION["username"] = $row["nombre"];
            header("Location: ../views/usuario/perfil-usuario.php");
        }
    }else{
        header("Location: ../views/perfil/index.php");
        $_SESSION['message'] = 'Ha habido un error prueba de nuevo o registrate.';
            $_SESSION['message_type'] = 'primary';

        }
}
?>