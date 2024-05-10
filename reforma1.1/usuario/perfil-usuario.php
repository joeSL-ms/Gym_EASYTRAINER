<<<<<<< HEAD
=======
<?php include '../php/usuario.php'; ?>
<?php include '../php/verificacion.php'; ?>
>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/style.css">
        <link rel="stylesheet" href="CSS/perfil-usuario.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Perfil | EasyTrainer</title>
        <link rel="icon" type="image/x-icon" href="../img/icon.ico">
<<<<<<< HEAD
         <!--Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <?php include("../php/usuario.php")?>
        <?php include ('../php/verificacion.php') ?>

=======
>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
    </head>

    <body>
        <nav>
            <div class="wrapper">
                <div class="logo"><a href="#"><img src="../img/logo.png" alt="Logo"></a></div>
                <input type="radio" name="slider" id="menu-btn">
                <input type="radio" name="slider" id="close-btn">
                <ul class="nav-links">
                    <label for="close-btn" class="btn close-btn"><i class="fa fa-times"></i></label>
                    <li><a href="../inicio/index.php">Inicio</a></li>
                    <li><a href=<?php echo $enlaceEntreno ?> data-hover= <?php echo $textoEnlaceEntreno ?>><?php echo $textoEnlaceEntreno ?></a></li>
<<<<<<< HEAD
                        <li><a href="../comunidad/index.php">Comunidad</a></li>
=======
                        <li><a href="index.php">Comunidad</a></li>
>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
                    <li><a href="../inicio/index.php #contacto">Contacto</a></li>
                    <li>
                        <a href="#" class="desktop-item">Usuario</a>
                        <input type="checkbox" id="showDrop">
                        <label for="showDrop" class="mobile-item">Usuario</label>
                        <ul class="drop-menu">
<<<<<<< HEAD
                            <li><a href="../php/cerrar_sesion.php">Cerrar session</a></li>
=======
                            <li><a href=<?php echo $enlace?>><?php echo $nombre?></a></li>
                            <li><a href="#">Editar perfil</a></li>
                            <li><a href=<?php echo $link ?>><?php echo $sesion ?></a></li>
>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
                        </ul>
                    </li>
                </ul>
                <label for="menu-btn" class="btn menu-btn"><i class="fa fa-bars"></i></label>
            </div>
        </nav>
        <main>
            <!-- Perfil de usuario -->
            <section class="seccion-perfil-usuario">
                <!-- Header del perfil de usuario (Portada, Avatar)-->
                <div class="perfil-usuario-header">
                    <div class="perfil-usuario-portada">
                        <div class="perfil-usuario-avatar">
                            <img id="avatar" src="../img/avatar-default.jpg" alt="img-avatar">
                        </div>
                        <button type="button" class="boton-portada" onclick="mostrarAvatarMenu()">
                            <i class="fa fa-user"></i> Cambiar Avatar
                        </button>
                        <div id="avatar-menu" class="menu" style="display: none;">
                            <button type="button" onclick="cambiarAvatar(1)">Avatar 1</button>
                            <button type="button" onclick="cambiarAvatar(2)">Avatar 2</button>
                            <button type="button" onclick="cambiarAvatar(3)">Avatar 3</button>
                        </div>
                        <button type="button" class="boton-portada" onclick="mostrarMenu()">
                            <i class="fa fa-image"></i> Cambiar fondo
                        </button>
                        <div id="menu" class="menu" style="display: none;">
                            <button type="button" onclick="cambiarFondo('#BC3CFF')">Morado</button>
                            <button type="button" onclick="cambiarFondo('#317FFF')">Azul</button>
                            <button type="button" onclick="cambiarFondo('#FF5733')">Naranja</button>
                            <button type="button" onclick="cambiarFondo('#33FF57')">Verde</button>
                        </div>

                    </div>
                </div>

                <!-- Body de perfil de usuario (Contenido)-->
                <div class="perfil-usuario-body">
                    <div class="perfil-usuario-nombre" class="usuario-contenido">
                        <h3 class="titulo"><?php echo $username ?></h3>
                    </div>
                    <div class="perfil-usuario-contenido" class="usuario-contenido">
                        <h3 class="titulo">Entrenos creados</h3>
                        <div class="col-md-8">
                <table class="table table-bordered">
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
<<<<<<< HEAD
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
=======
                        <?php
                        include "../php/session.php";
                        $query = "SELECT * FROM entrenamientos ";
                        $result = mysqli_query($conn, $query);
                        

                        while($row = mysqli_fetch_array($result)) {  ?>
>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
                            <tr>
                                <td><?php echo $row['NombreEntrenamiento']?></td>
                                <td><?php echo $row['NombreEjercicio']?></td>
                                <td><?php echo $row['Serie']?></td>
                                <td><?php echo $row['Repeticiones']?></td>
                                <td><?php echo $row['Peso']?></td>
                                <td>
<<<<<<< HEAD
                                    <a href="../php/delete_row.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>           
                                </td>
                            </tr>
                        <?php }
                        }
                    }?>
=======
                                    <a href="../php/delete_row.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php }?>
>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
                    </tbody>
                </table>
            </div>
                    </div>
                </div>

                <script src="../js/cambios-perfil-usuario.js"></script>



<<<<<<< HEAD
        
            </section>
                    <!-- Pie de página -->
    <footer class="small bg-dark text-white">
      <div class="contfooter">
        <ul class="list">
          <li class="list-inline-item">&copy; 2024 JRM Company, LLC.</li>
          <li class="list-inline-item">Todos los derechos reservados. @EasyTrainer</li>
          <li class="list-inline-item"><a target="blank" href="https://www.privacypolicies.com/live/fec8d74e-b1ce-48de-8125-d8df54c48f1d">Política de privacidad</a>.</li>
        </ul>
      </div>
    </footer>
=======
                <!-- Pie de página -->
                <footer>
                    <!-- Información de empresa, contacto, redes sociales, etc. -->
                    <div class="redes-sociales">
                    <p>Síguenos en:</p>
                    </div>
                    <p>Derechos de autor © 2024 Extreme Easy Trainer. Todos los derechos reservados.</p>
                </footer>
            </section>
>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
    </body>
</html>