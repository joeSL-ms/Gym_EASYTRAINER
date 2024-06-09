<?php 
#confirmar que se reciven parametros post, es decir que nuestra consulta no tiene un dato nulo o vacio
if (isset($_POST['save_task'])){
   $title = $_POST['nombre'];
   $description = $_POST['contenido'];
   #Insertar en la base de dartos el contenido 
   $query = "INSERT INTO publicaciones(nombre, contenido) VALUES ('$title', '$description')";
   $resultado = $conn->query($consulta);
   if(!$result){
    die("Query failed");
   }
   #redirigir al usuario nuevamente a la ventana donde esta publicando
   header("Location: ../views/comunidad");
}
?>