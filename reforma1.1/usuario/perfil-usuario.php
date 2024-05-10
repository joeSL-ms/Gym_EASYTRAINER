<?php include '../php/usuario.php'; ?>
<?php include '../php/verificacion.php'; ?>
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
                        <li><a href="index.php">Comunidad</a></li>
                    <li><a href="../inicio/index.php #contacto">Contacto</a></li>
                    <li>
                        <a href="#" class="desktop-item">Usuario</a>
                        <input type="checkbox" id="showDrop">
                        <label for="showDrop" class="mobile-item">Usuario</label>
                        <ul class="drop-menu">
                            <li><a href=<?php echo $enlace?>><?php echo $nombre?></a></li>
                            <li><a href="#">Editar perfil</a></li>
                            <li><a href="../perfil/index.html">Cerrar sesión</a></li>
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
                            <img src="http://localhost/multimedia/relleno/img-c9.png" alt="img-avatar">
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
                        <p class="texto">Descripción breve del usuario.</p>
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
                        <?php
                        include "../php/session.php";
                        $query = "SELECT * FROM entrenamientos ";
                        $result = mysqli_query($conn, $query);
                        

                        while($row = mysqli_fetch_array($result)) {  ?>
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
                        <?php }?>
                    </tbody>
                </table>
            </div>
                    </div>
                </div>

                <script>
                    function mostrarMenu() {
                        var menu = document.getElementById('menu');
                        if (menu.style.display === 'none') {
                            menu.style.display = 'block';
                        } else {
                            menu.style.display = 'none';
                        }
                    }
                    function cambiarFondo(color) {
                        document.querySelector('.perfil-usuario-portada').style.backgroundImage = 'linear-gradient(45deg, ' + color + ', transparent)';
                        document.getElementById('menu').style.display = 'none'; // Oculta el menú después de seleccionar un color
                    }

                </script>



                <!-- Pie de página -->
                <footer>
                    <!-- Información de empresa, contacto, redes sociales, etc. -->
                    <div class="redes-sociales">
                    <p>Síguenos en:</p>
                    </div>
                    <p>Derechos de autor © 2024 Extreme Easy Trainer. Todos los derechos reservados.</p>
                </footer>
            </section>
    </body>
</html>