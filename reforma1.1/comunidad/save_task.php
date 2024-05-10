<?php 

include("../php/verificacion.php");
include("../php/db.php");

if (isset($_POST['save_task'])){
   $id_comunidad = $_POST['comunidad'];
   $description = $_POST['contenido'];
   if(isset($_SESSION['username'])){
      $username = $_SESSION['username'];
      $id_usu= "SELECT id FROM usuario WHERE username LIKE '$username'"; 
   }else{
      $username = "Anonimo";
      $id_usu = 1;
   }
   $query = "INSERT INTO publicaciones(contenido, id_usuario, id_comunidad) VALUES ('$description',$id_usu, $id_comunidad)"; //Aqui el 1 reemplazalo con el id_usu una vez funcional
   $result = mysqli_query($conn, $query);
   if(!$result){
    die("Query failed");
   }

   header("Location: index.php");
}



?>