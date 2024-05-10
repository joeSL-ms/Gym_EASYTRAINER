<?php 

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

?>