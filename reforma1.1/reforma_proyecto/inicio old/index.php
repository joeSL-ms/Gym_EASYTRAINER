<?php include '../php/verificacion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div><h1>Easy Trainer</h1></div>
        <div class="top_nav" id="myTopnav">
            <ul>
                <li><a href="index.php"  data-hover="INICIO">INICIO</a></li>
                <li><a href=<?php echo $enlacePerfil ?> data-hover= <?php echo $textoEnlacePerfil ?>><?php echo $textoEnlacePerfil ?></a></li>
                <li><a href="../entrenamiento/index.php" data-hover="ENTRENOS">ENTRENOS</a></li>
                <li><a href="../contacto/index.php"  data-hover="CONTACTO">CONTACTO</a></li>
                <li><a href="../comunidad/index.php"  data-hover="COMUNIDAD">COMUNIDAD</a></li>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </ul>
        </div>
    </nav>
    <main>
        <section>
        
            <section class="imagenes">
                <div class="items">
                    <ul><h3>Disfruta de nuestro contenido:</h3>
                        <li>Explora nuestros entrenamientos y escoge el que mas se ajuste a ti.</li>
                        <li>Diviertete creando rutinas y explorando nuestros videos.</li>
                        <li>Si eres nuevo unete a nuestros planes de entrenamiento.</li>
                    </ul>
                </div>
                <div class="items">
                    <ul><h3>Unete a nuestra comunidad:</h3>
                        <li>Comparte tu contenido con los demas o unete a ellos.</li>
                        <li>Clasifica los mejores contenidos que puedas encontrar y posicionalos en nuedtro podium visual.</li>
                        <li>Sube tu progreso y conecta con gente que buque tus mismos objetivos, !diviertete¡.</li> 
                    </ul>
                </div>
                <div class="items">
                    <h4>Creemos una comunidad libre</h4>
                    <description>Somos un grupo buscando difundir todo aquel contenido de forma gratuita y libre de pago, con una correcta indtruccion y ejecucion, estamos abiertos a todo tipo decomentarios e ideas, esta no es una comunidad, es nuestra comudidad asi que trabajemos juntos para mejorar!.</description>
                </div>            
            </section>

        </section>
    </main>
    <article>
        <h3>Ponte Mamado</h3>
        <section>
            <div>

            </div>
        </section>
        
    </article>
    <script src="../js/interact.js"></script>
</body>
</html>