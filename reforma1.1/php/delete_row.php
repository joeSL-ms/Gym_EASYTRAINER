<?php 
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM entrenamiento WHERE ID= $id";
    $result = mysqli_query($conn, $query );
    if(!$result){
        die('Query failed');
    }
    $conn->close();
    
   $_SESSION['message'] = 'Task Deleted succesfully';
   $_SESSION['message_type'] = 'info';
header('Location: entrenos-usuario.php');
}