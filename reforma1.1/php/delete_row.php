<?php 
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM usu_ent WHERE ID_ENTRENAMIENTO= $id";
    $result = mysqli_query($conn, $query );
    echo $query;
    echo $id;
    echo $result;
    if ($result === false) {
        echo 'Query failed: ' . mysqli_error($conn);
    }
    $query2 = "DELETE FROM entrenamiento WHERE ID= $id";
    $result2 = mysqli_query($conn, $query2 );
    if ($result2 === false) {
        echo 'Query failed: ' . mysqli_error($conn);
    }

    $conn->close();
    
  
header('Location: ../usuario/entrenos-usuario.php');
}