<?php 

include("db.php");

if (isset($_POST['save_table'])){
   
   $nombre_entreno= $_POST['nombre_entreno'];
   $ejercicio = $_POST['ejercicio'];
   $series = $_POST['series'];
   $repeticiones = $_POST['repeticiones'];
   $kg = $_POST['kg'];

   $query = "INSERT INTO entrenamiento(NOMBRE,EJERCICIO, SERIES, REPETICIONES, KG) VALUES ('$nombre_entreno','$ejercicio', '$series', '$repeticiones', '$kg')";
   $result = mysqli_query($conn, $query);
   if(!$result){
    die("Query failed");
   }
   echo 'success';
   $_SESSION['message'] = 'Ejercicio guardado succesfully';
   $_SESSION['message_type'] = 'primary';
   header("Location: ../usuario/entrenos-usuario.php");

}
?>