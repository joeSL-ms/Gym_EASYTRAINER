<?php
include '../session.php';
#obtencion de los parametros dentro del link que se envia
$grupo_muscular = $_GET['grupoMuscular'];

#mostrar la tabla de forma dinamica segun los cambios que el usuario elija
$sql_ejercicio= "SELECT * FROM datos GROUP BY ejercicio ORDER BY id_ejer";
if($grupo_muscular != 'Todos' && $grupo_muscular){
    $sql_ejercicio= "SELECT * FROM datos where grupo_muscular = '$grupo_muscular' GROUP BY ejercicio ORDER BY id_ejer";
}
$datos_ejercicios = mysqli_query($conn,$sql_ejercicio);

while($row = mysqli_fetch_array($datos_ejercicios))
{
    $id_ejer = $row['id_ejer'];
    $nombre_ejer = $row['ejercicio']; 
    ?>
    <option value=<?php echo $id_ejer ?>><?php echo $nombre_ejer ?></option>
    <?php
}
?>