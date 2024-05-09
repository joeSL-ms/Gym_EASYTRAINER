<?php include '../php/verificacion.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Comunidad | EasyTrainer </title>
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
						<li><a href=<?php echo $enlacePerfil ?>><?php echo $textoEnlacePerfil ?></a></li>
						<li><a href="#">Editar perfil</a></li>
						<li><a href="../perfil/index.html">Cerrar sesión</a></li>
					</ul>
				</li>
			</ul>
			<label for="menu-btn" class="btn menu-btn"><i class="fa fa-bars"></i></label>
		</div>
	</nav>

    <header>
		<h1>Forum Page</h1>
		<form action="/search" method="get">
			<input type="text" name="q" placeholder="Search topics...">
			<button type="submit">Search</button>
			</form>
	</header>
	<main>
		<section id="topics">
			<h2>Topics</h2>
		<ul>
				<li><a href="../entrenamientos/entrenamientos.html">Plan de entreno</a></li>
				<li><a href="../entrenamientos/entrenamientos.html">Entrenos</a></li>
				<li><a href="#">Nutricion</a></li>
				<li><a href="#">Motivacion</a></li>
				<li><a href="#">Equipo</a></li>
			</ul>
		</section>
		<section id="posts">
			<h2>Recent Posts</h2>
			<ul>
				<li>
					<h3>User 1</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
					<a href="#">Read more</a>
				</li>
				<li>
					<h3>User 2</h3>
					<p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa.</p>
					<a href="#">Read more</a>
				</li>
				<li>
					<h3>User 3</h3>
					<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
					<a href="#">Read more</a>
				</li>
			</ul>
		</section>
	</main>
</body>
</html>