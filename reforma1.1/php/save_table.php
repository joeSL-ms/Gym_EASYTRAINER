<?php 

<<<<<<< HEAD
include("verificacion.php");
include("db.php");
   if(isset($_SESSION['username'])){
   $nombre_entreno= $_POST['name'];
   $id_ejercicio = $_POST['ejercicio'];
   $series = $_POST['series'];
   $repeticiones = $_POST['repeticiones'];
   $kg = $_POST['peso'];
   
   $query = "INSERT INTO entrenamiento(NOMBRE,ID_EJERCICIO, SERIE, REPETICIONES, KG) VALUES ('$nombre_entreno','$id_ejercicio', '$series', '$repeticiones', '$kg')";
   $result1 = mysqli_query($conn, $query);
   if(!$result1){
    die("Query failed");
   }

   $consulta = "SELECT id FROM usuario WHERE nombre LIKE '$username';";
   $resultado = $conn->query($consulta);
   if ($fila = $resultado->fetch_assoc()) {
      $id_usu = $fila["id"];
      $consulta2 = "SELECT id FROM entrenamiento WHERE NOMBRE LIKE '$nombre_entreno'";
      $resultado2 = $conn->query($consulta2);
      if ($fila2 = $resultado2->fetch_assoc()) {
         $id_ent = $fila2["id"];
      
         $query2 = "INSERT INTO usu_ent (ID_USUARIO, ID_ENTRENAMIENTO) VALUES ('$id_usu','$id_ent')";
         $result2 = mysqli_query($conn, $query2);
         if(!$result2){
         die("Query 2 failed");
         }
      }
   }
   header("Location: ../usuario/entrenos-usuario.php");
}
=======
include("db.php");

   include "session.php";
   $nombre_entreno= $_POST['name'];
   $ejercicio = $_POST['ejercicio'];
   $sql = "SELECT id FROM ejercicio WHERE nombre LIKE '$ejercicio'";
   $series = $_POST['series'];
   $repeticiones = $_POST['repeticiones'];
   $kg = $_POST['peso'];

   $id_ejercicio = mysqli_query($conn,$sql);

   echo $nombre_entreno . "<br>";
   echo $ejercicio . "<br>";
   echo  $id_ejercicio . "<br>";
   echo $series . "<br>";
   echo $repeticiones . "<br>";
   echo $kg;

>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
?>