<?php include '../php/verificacion.php'; 
include '../php/usuario.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Entrenamientos | EasyTrainer </title>
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
<<<<<<< HEAD
          <a target="blank" href="https://i.postimg.cc/bv7xCyyq/Captura-de-pantalla-2024-05-10-084528.png" class="btn-probar">Probar</a>
        </div>
        <div class="carousel-elemento imagen-2">
          <p>Entrenamiento default 2</p>
          <a target="blank" href="https://i.postimg.cc/BbZByG8T/Captura-de-pantalla-2024-05-10-084745.png" class="btn-probar">Probar</a>
        </div>
        <div class="carousel-elemento imagen-3">
          <p>Entrenamiento default 3</p>
          <a target="blank" href="https://i.postimg.cc/J06tFxNj/Captura-de-pantalla-2024-05-10-084849.png" class="btn-probar">Probar</a>
=======
          <a href="https://i.postimg.cc/bv7xCyyq/Captura-de-pantalla-2024-05-10-084528.png" class="btn-probar">Probar</a>
        </div>
        <div class="carousel-elemento imagen-2">
          <p>Entrenamiento default 2</p>
          <a href="https://i.postimg.cc/BbZByG8T/Captura-de-pantalla-2024-05-10-084745.png" class="btn-probar">Probar</a>
        </div>
        <div class="carousel-elemento imagen-3">
          <p>Entrenamiento default 3</p>
          <a href="https://i.postimg.cc/J06tFxNj/Captura-de-pantalla-2024-05-10-084849.png" class="btn-probar">Probar</a>
>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
        </div>
      </div>
      <div class="carousel-botones">
        <button type="button" class="carousel-boton">&#10094;</button>
        <button type="button" class="carousel-boton">&#10095;</button>
      </div>
    </div>
    <div class="box-formulario-entreno">
      <h1> ¿Quieres crear tu propio entreno? </h2>
      <h2> Entonces registrate aquí </h3>
      <a href="../perfil/index.html" class="boton-acceder">Acceder</a>
    </div>
  
        <script src="../js/conectores.js"></script>

    
    
    <script src="../js/interact.js"></script>
    <script src="../js/carousel-prueba.js"></script>
<<<<<<< HEAD
       <!-- Pie de página -->
       <footer class="small bg-dark text-white">
      <div class="contfooter">
        <ul class="list">
          <li class="list-inline-item">&copy; 2024 JRM Company, LLC.</li>
          <li class="list-inline-item">Todos los derechos reservados. @EasyTrainer</li>
          <li class="list-inline-item"><a target="blank" href="https://www.privacypolicies.com/live/fec8d74e-b1ce-48de-8125-d8df54c48f1d">Política de privacidad</a>.</li>
=======
    <footer class="small bg-dark text-white">
      <div class="container py-4">
        <ul class="list-inline mb-0 text-center">
          <li class="list-inline-item">&copy; 2017 Web Company, Inc.</li>
          <li class="list-inline-item">All rights reserved.</li>
          <li class="list-inline-item"><a href="#">Terms of use and privacy policy</a>.</li>
>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
        </ul>
      </div>
    </footer>
</body>
</html>