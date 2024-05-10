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
    <link rel="stylesheet" href="CSS/styleCopy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>EasyTrainer</title>
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
        <li><a href="index.php">Inicio</a></li>
        <li><a href=<?php echo $enlaceEntreno ?> data-hover= <?php echo $textoEnlaceEntreno ?>><?php echo $textoEnlaceEntreno ?></a></li>
        <li><a href="../comunidad/index.php">Comunidad</a></li>
        <li><a href="#contacto">Contacto</a></li>
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
    <main>
      <!-- MAIN SECTION -->
      <section class="section-hero" id="section-hero">
        <div class="container hero-box">
          <div class="hero-image-content">
            <h1 class="heading">Se tu mejor version con EASY TRAINER. Adopta el bienestar, transforma tu vida</h1>
            <p class="description">Experimenta la mejor forma física con entrenamiento funcional, TRX, planes claros, sencillos y mucho más.</p>
            <div class="hero-box-buttons">
              <a href="../entrenamiento/index.php #probar-entrenos">
                <button>Descubre entrenos</button>
              </a>
              <a href="../entrenamiento/index.php #crear-entrenos">
                <button>Crea el tuyo</button>
              </a>
</div>
          </div>
        </div>
      </section>
      <section class="section-aboutus" id="aboutus">
        <div class="container aboutus">
          <div class="section-aboutus-info" data-aos="fade-down">
            <h2>Sobre EasyTrainer</h2>
            <p>
              En EasyTrainer, no somos sólo un sitio web de fitness; somos una comunidad dedicada a transformar vidas a través de la salud y el bienestar. Fundada con la pasión de ayudar a las personas
              alcanzar sus objetivos de fitness, nuestra misión es capacitar, inspirar y apoyarte en tu viaje hacia una vida más sana y feliz.
            </p>
            <h2>Nuestra Vision</h2>
            <p>
              Nuestra visión es ser tu socio de confianza para alcanzar un bienestar óptimo. Creemos que un cuerpo fuerte y sano es la base de una vida exitosa y plena.
              Tanto si eres nuevo en el mundo del fitness como si eres un atleta experimentado, estamos aquí para guiarte en tu camino hacia el éxito.
            </p>
          </div>
          <div class="section-aboutus-images">
            <figure class="about-box__image">
              <img src="https://th.bing.com/th/id/R.ae8099552a6cb9d1d0c0e74d8f793538?rik=sTZ7nRdh1Mmojw&pid=ImgRaw&r=0" alt="navigation icon" class="nav-hamburger" width=320" height="190" style="--i: 0" data-aos="fade-down-right" />
              <img src="https://th.bing.com/th/id/OIP.m_nfRfI0I_MUC2Fn6XzhPgHaE8?rs=1&pid=ImgDetMain" alt="navigation icon" class="nav-hamburger" width="320" height="190" style="--i: 1" data-aos="fade-down" />
              <img src="https://media.istockphoto.com/id/1277242852/es/foto/sosteniendo-el-peso-y-sentado.jpg?s=2048x2048&w=is&k=20&c=d6u4PALh2Tq6t2KO5piAMv1tzdqy9o9rAO46v1-EAzU=" alt="navigation icon" class="nav-hamburger" width="320" height="190" style="--i: 2" data-aos="fade-down-left" />
            </figure>
          </div>
        </div>
      </section>
  
      <section class="section-ourteam" id="nuestroequipo">
        <div class="container ourteam" data-aos="fade-down">
          <h2 class="title">Nuestro Equipo</h2>
          <div class="team-members">
            <div class="team-member">
              <img src=https://media.istockphoto.com/id/852401732/es/foto/entrenador-personal-feliz-trabajando-en-el-gimnasio.jpg?s=2048x2048&w=is&k=20&c=9JQT11hY75S_atGyIBMTGOhHlD4AtOrDUfbMf49UTb8= alt="Logo" class="member-logo" />
              <div class="team-memmber-info">
                <div class="member-name">Joe Sebas</div>
                <div class="member-desg">Weight Lifting Coach</div>
                <div class="member-desc">Especialista en esculpir fuerza y músculo con precisión</div>
              </div>
            </div>
            <div class="team-member">
              <img src="https://media.istockphoto.com/id/675179390/es/foto/entrenador-muscular-en-portapapeles.jpg?s=612x612&w=0&k=20&c=eFDuNzHQJfNzOpZGxCPi8pM8bC18EeIm6lgVlmjPuhw=" alt="Logo" class="nav-icon" />
              <div class="team-memmber-info">
                <div class="member-name">Ruben Corredera</div>
                <div class="member-desg">Powerbuilding</div>
                <div class="member-desc">Se centra en la mejora de tu fuerza con tus entrenos</div>
              </div>
            </div>
            <div class="team-member">
              <img src="https://media.istockphoto.com/id/856797530/es/foto/retrato-de-una-mujer-hermosa-en-el-gimnasio.jpg?s=612x612&w=0&k=20&c=PKkXypaXFdO72AGyU7gbXMYIXUrDKeI-9REDOV592Gs=" alt="Logo" class="nav-icon" />
              <div class="team-memmber-info">
                <div class="member-name">Marta Ruiz</div>
                <div class="member-desg">Profesora de Yoga</div>
                <div class="member-desc">Te ayudará a estirar y ganar flexibilidad para sentirte nuevo.</div>
              </div>
            </div>
            <div class="team-member">
              <img src="https://media.istockphoto.com/id/475495254/es/foto/afroamericana-con-entrenador-masculino-con-portapapeles.jpg?s=2048x2048&w=is&k=20&c=IBuj6hk7AbpABPt1cn9EGssUlw9dos8c33rvZ0oenZ0=" alt="Logo" class="nav-icon" />
              <div class="team-memmber-info">
                <div class="member-name">Malyk Dorgham </div>
                <div class="member-desg">Entrenador Personal</div>
                <div class="member-desc">Tu camino hacia tus objetivos se completará, con acompañamiento sesion a sesion</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-memberships" id="asesoramiento">
        <div class="container memberships">
          <h2 class="title">Asesoramiento</h2>
          <div class="classes">
            <div class="class" data-aos="flip-left">
              <h2 class="class-name">3 Meses</h2>
              <div class="class-price">100€/MES</div>
              <hr />
              <div class="class-name">
                <ul>
                  <li>5 Sesiones de entreno personales</li>
                  <li>Acceso a los gimnasios McFit</li>
                  <li>Día de orientación y acompañamiento</li>
                </ul>
              </div>
              <a href="#contacto">Empecemos</a>
            </div>
            <div class="class" data-aos="flip-up">
              <h2 class="class-name">6 meses</h2>
              <div class="class-price">75€/MES</div>
              <hr />
              <div class="class-name">
                <ul>
                  <li>10 Sesiones de entreno personales</li>
                  <li>Acceso a los gimnasios McFit</li>
                  <li>Día de orientación y acompañamiento</li>
                  <li>Uso de las salas de boxeo, Eventos Gratuitos</li>
                </ul>
              </div>
              <a href="#contacto">Empecemos</a>
            </div>
            <div class="class">
              <h2 class="class-name">1 año</h2>
              <div class="class-price">50€/MES</div>
              <hr />
              <div class="class-name">
                <ul>
                  <li>15 Sesiones de entreno personales</li>
                  <li>Acceso a los gimnasios McFit</li>
                  <li>Día de orientación y acompañamiento</li>
                  <li>Uso de las salas de boxeo, Eventos Gratuitos</li>
                </ul>
              </div>
              <a href="#contacto">Empecemos</a>
            </div>
          </div>
        </div>
      </section>
      <section class="section-reviews" id="reviews">
        <div class="container reviews">
          <h2 class="title">Reviews Clientes</h2>
          <div class="review">
            <div class="review-info">
              <div class="review-image" data-aos="image-rotateIn"><img src="https://images.unsplash.com/photo-1529665253569-6d01c0eaf7b6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="Logo" class="review-icon" width="130" height="130" /></div>
              <div class="review-details" data-aos="fade-down">
                <div>Luisamaria86 </div>
                <div>
                  No tengo palabras para describir EasyTrainer. Los entrenadores son excepcionales y la comunidad es muy acogedora. He hecho un progreso increíble en mi viaje de fitness
                  aquí
                </div>
              </div>
            </div>
            <div class="review-info">
              <div class="review-image" data-aos="image-rotateIn"><img src="https://th.bing.com/th/id/OIP.JBbIPhbjUz7n7qQXH3F6zAHaHa?rs=1&pid=ImgDetMain" alt="Logo" class="review-icon" width="130" height="130" /></div>
              <div class="review-details" data-aos="fade-down">
                <div>Mario_U</div>
                <div>Ruben, el coach de Powerbuilding, es un verdadero experto. Te lleva al límite, garantizando la seguridad. He aprendido mucho y he recuperado la confianza en mí mismo.</div>
              </div>
            </div>
            <div class="review-info">
              <div class="review-image" data-aos="image-rotateIn"><img src="https://wallpapers.com/images/hd/cool-profile-picture-purple-astronaut-mm73otj7x18b5r7m.jpg" alt="Logo" class="review-icon" width="130" height="130" /></div>
              <div class="review-details" data-aos="fade-down">
                <div>MiguelSerranz</div>
                <div>
                  EasyTrainer no es sólo un gimnasio; es un estilo de vida. Las instalaciones son de primera categoría, y los entrenadores son de primer nivel. Nunca me he sentido tan motivado y apoyado en mi
                  fitness
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-contact" id="contacto">
        <div class="container contact">
          <div class="contactus">
            <form>
              <h2 class="title">CONTACTANOS</h2>
              <div class="class-input"><input type="text" placeholder="Nombre" id="nameInput"></div>
              <div class="class-input"><input type="email" placeholder="Email" id="emailInput"></div>
              <div class="class-input"><input type="number" placeholder="Número" id="numberInput"></div>
              <div class="class-input"><textarea placeholder="Mensaje" id="messageInput"></textarea></div>
              <button onclick="mostrarAlerta()" type="submit">ENVIAR</button>
          </form>
      
          <script>
              function mostrarAlerta() {
                  alert("¡Los datos fueron guardados!");
                  // Restablecer los valores de los campos del formulario
                  document.getElementById("nameInput").value = "";
                  document.getElementById("emailInput").value = "";
                  document.getElementById("numberInput").value = "";
                  document.getElementById("messageInput").value = "";
              }
          </script>
          </div>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.946978276176!2d-3.997051684593509!3d40.28282997938062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228a3e6a9c5b7%3A0x2e8e9a1c9e1e0b6!2sUAX%20Fitness%20Center!5e0!3m2!1sen!2ses!4v1679800000000!5m2!1sen!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </section>
    </main>
    <footer class="section-footer" id="footer">
      <div class="footer-box container">
        <div class="contact-details">
          <h2>EasyTrainer</h2>
          <div class="contact-company-address">
            123 Av Universidad,<br />
            Villanueva de la cañada 28691<br /> Madrid, España.
          </div>
          <div class="contact-social-links">
            <img src="https://vfitclub.netlify.app/image/whatsapp.svg" alt="navigation icon" class="nav-hamburger" width=35" height="35" /> <img src="https://vfitclub.netlify.app/image/facebook.svg" alt="navigation icon" class="nav-hamburger" width=35" height="35" /> <img src="https://vfitclub.netlify.app/image/instagram.svg" alt="navigation icon" class="nav-hamburger" width=35" height="35" /> <img src="https://vfitclub.netlify.app/image/twitter.svg" alt="navigation icon" class="nav-hamburger" width=35" height="35" />
          </div>
        </div>
        <nav class="footer-nav" aria-label="navigation">
          <h3>Quick Links</h3>
          <ul>
            <li>
              <a href="#aboutus">Sobre Nosotros</a>
            </li>
            <li>
              <a href="#asesoramiento">Asesoramiento</a>
            </li>
            <li>
              <a href="#nuestroequipo">Nuestro equipo</a>
            </li>
            <li>
              <a href="#contacto">Contacto </a>
            </li>
            <li>
              <a href="#reviews">Reviews</a>
            </li>
          </ul>
        </nav>
        <div class="newsletter">
          <h3>News Letter</h3>
          <input type="email" placeholder="email@domain.com" /><button>&#10003;</button>
        </div>
      </div>
      <hr />
    </footer>
    <script src="js.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 120,
        delay: 50,
        duration: 400,
        once: true,
      });
    </script>
    <script src="../js/interact.js"></script>
</body>
</html>