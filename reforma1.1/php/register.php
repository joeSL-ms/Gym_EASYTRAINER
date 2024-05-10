<?php
    session_start();

    include 'session.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $username = $_POST["txt"];
        $email = $_POST["email"];
        $contrasenia = $_POST["pswd_r1"];
        $contrasenia_com = $_POST["pswd_r2"];

        echo $username . "<br>";
        echo $email . "<br>";
        echo $contrasenia . "<br>";
        echo $contrasenia_com . "<br>";
        
        $sql = "SELECT * FROM  USUARIO WHERE email = '$email' OR nombre = '$username'";
        $result = $conn -> query($sql);
        if($result -> num_rows == 0){
            if($contrasenia == $contrasenia_com){
                $sql = "INSERT INTO USUARIO (id,nombre,email,contraseña,id_comunidad) VALUES(null,'$username','$email','$contrasenia',default)";
            }else {
                echo "Contraseña incorrecta";
            }
        }
        if ($conn->query($sql) === TRUE) {
            echo "Datos insertados correctamente.<br>";
            $_SESSION['message'] = 'Ahorra haz tu primer Login Porfavor.';
            $_SESSION['message_type'] = 'primary';
        } else {
            echo "Error al insertar datos: " . $conn->error . "<br>";
        }   
    }
    $conn->close();
    header("Location: ../perfil/index.php")
?>