<?php include '../php/verificacion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../entrenamiento/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Entrenamientos | EasyTrainer </title>
    <link rel="icon" type="image/x-icon" href="../img/icon.ico">
    <?php include("../php/usuario.php")?>
     <!--Font Awesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
</head>
<div>
    <nav>
        <div class="wrapper" >
            <div class="logo"><a href="#"><img src="../img/logo.png" alt="Logo"></a></div>
            <input type="radio" name="slider" id="menu-btn">
            <input type="radio" name="slider" id="close-btn">
            <ul class="nav-links">
                <label for="close-btn" class="btn close-btn"><i class="fa fa-times"></i></label>
                <li><a href="../inicio/index.php">Inicio</a></li>
                <li><a href=<?php echo $enlaceEntreno ?> data-hover= <?php echo $textoEnlaceEntreno ?>><?php echo $textoEnlaceEntreno ?></a></li>
                <li><a href="../comunidad/index.php">Comunidad</a></li>
                <li><a href="../inicio/index.php #contacto">Contacto</a></li>
                <li>
                    <a href="#" class="desktop-item">Usuario</a>
                    <input type="checkbox" id="showDrop">
                    <label for="showDrop" class="mobile-item">Usuario</label>
                    <ul class="drop-menu">
                        <li><a href=<?php echo $enlacePerfil ?>><?php echo $textoEnlacePerfil ?></a></li>
                        <li><a href=<?php echo $link ?>><?php echo $sesion ?></a></li>
                    </ul>
                </li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fa fa-bars"></i></label>
        </div>
    </nav>
    
    <div class="box-carousel" id="probar-entrenos">
    <h1> Elige un entreno ya hecho </h1>
      <div class="carousel">
        <div class="carousel-elemento imagen-1 active">
          <p>Entrenamiento default 1</p>
          <a target="blank" href="https://i.postimg.cc/bv7xCyyq/Captura-de-pantalla-2024-05-10-084528.png" class="btn-probar">Probar</a>
        </div>
        <div class="carousel-elemento imagen-2">
          <p>Entrenamiento default 2</p>
          <a target="blank" href="https://i.postimg.cc/BbZByG8T/Captura-de-pantalla-2024-05-10-084745.png" class="btn-probar">Probar</a>
        </div>
        <div class="carousel-elemento imagen-3">
          <p>Entrenamiento default 3</p>
          <a target="blank" href="https://i.postimg.cc/J06tFxNj/Captura-de-pantalla-2024-05-10-084849.png" class="btn-probar">Probar</a>
        </div>
      </div>
      <div class="carousel-botones">
        <button type="button" class="carousel-boton">&#10094;</button>
        <button type="button" class="carousel-boton">&#10095;</button>
      </div>
    </div>
        <div class="box-formulario-entreno" id="crear-entrenos">
            <h1>Crear entreno</h1>
            <div class="formulario-entreno">
              <form method="POST" action="../php/save_table.php">
              <label for="name">Nombre de tu entreno:</label>
                  <input type="text" id="name" name="name" required>
                  <input type="hidden" id="saveName" name="saveName" value="John Doe">
                  
                  <label for="grupoMuscular">Elige un grupo muscular:</label>
                  <select id="grupoMuscular" name="grupoMuscular" onchange="enlace()">
                      <option value="0">Todos</option>
                      <?php include '../php/tablas/gpm.php'?>
                  </select>
                  <label for="ejercicio">Elige un ejercicio:</label>
                  <select id="ejercicio" name="ejercicio">
                      <?php include '../php/tablas/ejercicio.php'?>
                  </select>
                  <label for="series">Número de series:</label>
                  <input type="number" id="series" name="series">
                  <label for="repeticiones">Número de repeticiones:</label>
                  <input type="number" id="repeticiones" name="repeticiones">
                  <label for="peso">Peso (en kg):</label>
                  <input type="number" id="peso" name="peso">
                  <input type="submit" value="Guardar">
              </form>
          </div>
        </div>
          <div class="box-formulario-entreno">
            <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Ejercicios</th>
                            <th>Series</th>
                            <th>repeticiones</th>
                            <th>KG</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include "../php/session.php";
                        $id_usu= "SELECT id FROM usuario WHERE username LIKE '$username'"; 
                        
                        $consulta = "SELECT id FROM usuario WHERE nombre LIKE '$username';";
                        $resultado = $conn->query($consulta);
                        if ($fila = $resultado->fetch_assoc()) {
                            $id = $fila["id"];
                            $consulta = "SELECT * FROM entrenamientos WHERE ID_USUARIO LIKE '$id';";
                            $resultado = $conn->query($consulta);
                            if ($fila = $resultado->fetch_assoc()) {
                                
                            
                        
                        

                            while($row = mysqli_fetch_array($resultado)) {  ?>
                            <tr>
                                <td><?php echo $row['NombreEntrenamiento']?></td>
                                <td><?php echo $row['NombreEjercicio']?></td>
                                <td><?php echo $row['Serie']?></td>
                                <td><?php echo $row['Repeticiones']?></td>
                                <td><?php echo $row['Peso']?></td>
                                <td>
                                    <a href="../php/delete_row.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>           
                                </td>
                            </tr>
                        <?php }
                        }
                    }?>
                    </tbody>
                </table>
              </div>
    
        <script src="../js/conectores.js"></script>

    
    
    <script src="../js/interact.js"></script>
    <script src="../js/carousel-prueba.js"></script>
       <!-- Pie de página -->
       <footer>
      <div class="contfooter">
        <ul class="list">
          <li class="list-inline-item">&copy; 2024 JRM Company, LLC.</li>
          <li class="list-inline-item">Todos los derechos reservados. @EasyTrainer</li>
          <li class="list-inline-item"><a target="blank" href="https://www.privacypolicies.com/live/fec8d74e-b1ce-48de-8125-d8df54c48f1d">Política de privacidad</a>.</li>
        </ul>
      </div>
    </footer>
</body>
</html>