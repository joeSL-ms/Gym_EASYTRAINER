<?php 
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
<<<<<<< HEAD
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
=======
    $query = "DELETE FROM entrenamiento WHERE ID= $id";
    $result = mysqli_query($conn, $query );
    if(!$result){
        die('Query failed');
    }
    $conn->close();
    
   $_SESSION['message'] = 'Task Deleted succesfully';
   $_SESSION['message_type'] = 'info';
header('Location: entrenos-usuario.php');
>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
}