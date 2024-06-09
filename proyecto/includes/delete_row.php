<?php 
include("session.php");

#confirmar que se recibe un parametro dentro del enlace
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM usu_ent WHERE ID_ENTRENAMIENTO= $id";
    $result = mysqli_query($conn, $query );

    if ($result === false) {
        echo 'Query failed: ' . mysqli_error($conn);
    }
    #procede a la eliminacion del dato especificado
    $query2 = "DELETE FROM entrenamiento WHERE ID= $id";
    $result2 = mysqli_query($conn, $query2 );
    if ($result2 === false) {
        echo 'Query failed: ' . mysqli_error($conn);
    }

    $conn->close();
    
#redirecciona al usuario a su tabla de entrenamientos
header('Location: ../views/usuario/entrenos-usuario.php');
}