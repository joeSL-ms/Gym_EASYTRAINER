<?php 

include("../php/db.php");

if (isset($_POST['save_task'])){
   $title = $_POST['nombre'];
   $description = $_POST['contenido'];

   $query = "INSERT INTO publicaciones(nombre, contenido) VALUES ('$title', '$description')";
   $result = mysqli_query($conn, $query);
   if(!$result){
    die("Query failed");
   }
   
   header("Location: index.php");
}
?>