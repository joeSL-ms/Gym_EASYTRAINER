<?php
$sql_gpm = "SELECT * FROM GRUPO_MUSCULAR";
$datos_gpm = mysqli_query($conn,$sql_gpm); 
while($row = mysqli_fetch_array($datos_gpm))
{
    $id_gpm = $row['id'];
    $nombre_gpm = $row['nombre'];
    ?>
    <option value=<?php echo $id_gpm ?>><?php echo $nombre_gpm ?></option>
    <?php
}
?>