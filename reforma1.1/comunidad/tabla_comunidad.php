<?php
    $tema = $_GET['tema'];
    $query = "SELECT * FROM publicaciones_ref WHERE id_comunidad= $tema";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result)) {  ?>
        <tr>
            <td><?php echo $row['nombre']?></td>
            <td><?php echo $row['contenido']?></td>
            <td><?php echo $row['likes']?></td>
            <td><?php echo $row['creado']?></td>
            
        </tr>
                
<?php }
?>