<?php include '../php/verificacion.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="CSS/style.css">
<<<<<<< HEAD
    <title>Comunidad |Easy Trainer</title>
	<?php include("comunidad.php")?>
	<?php include("../php/db.php")?>
    <?php include("../php/usuario.php")?>
=======
    <title>Document</title>
	<?php include("comunidad.php")?>
	<?php include("../php/db.php")?>
    <style>
        /* Basic styling for the forum table */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
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
				<li><a href="index.php">Comunidad</a></li>
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
    <header>
		<h1>Página Foro</h1>
	</header>
	<main>
		<section id="topics">
			<h2>Topics</h2>
		    <ul>
				<li><a href="#dudasP">Dudas Principiantes</a></li>
				<li><a href="#casosC">Entrenos</a></li>
                <li><a href="#entrenosA">Entrenos avanzados</a></li>
				<li><a href="#nutricion">Nutricion</a></li>
			</ul>
		</section>
		<section id="posts">
        <h2>Haz un comentario</h2>
			<div class="col-md-4">                
                <div class="card card-body">
                    <form action="save_task.php" method="POST">
                        <div class="form-group">
                            <label for="tema">Tema:</label>
                            <select id="tema" name="comunidad" onchange="enlace_comunidad()">
                                <option value="2">Dudas principiantes</option>
                                <option value="3">Casos curiosos</option>
                                <option value="4">Entrenos avanzados</option>
                                <option value="5">Nutricion</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="contenido" rows="2" class="form-control" placeholder="Descripcion Tema"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save_task" value="Post">
                    </form>
                </div>
            </div>
            <div class="box1" id="dudasP">
                <h2>Dudas principiantes</h2>
                <div class="box2">
                <div class="col-md-8">
                <table>
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Comentario</th>
                            <th>Likes</th>
                            <th>Creado</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM publicaciones_ref WHERE id_comunidad= 2";
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['contenido']?></td>
                                <td><?php echo $row['likes']?></td>
								<td><?php echo $row['creado']?></td>
                                
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
                </div>
            </div>
            <div class="box1" id="casosC">
                <h2>Casos curiosos</h2>
                <div class="box2">
                <div class="col-md-8">
                <table>
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Comentario</th>
                            <th>Likes</th>
                            <th>Creado</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM publicaciones_ref WHERE id_comunidad= 3";
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result)) {  ?>
                            <tr>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['contenido']?></td>
                                <td><?php echo $row['likes']?></td>
								<td><?php echo $row['creado']?></td>
                                
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
                </div>
            </div>
            <div class="box1" id="entrenosA">
                <h2>Entrenos avanzados</h2>
                <div class="box2">
                <div class="col-md-8">
                <table>
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Comentario</th>
                            <th>Likes</th>
                            <th>Creado</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM publicaciones_ref WHERE id_comunidad= 4";
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result)) {  ?>
                            <tr>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['contenido']?></td>
                                <td><?php echo $row['likes']?></td>
								<td><?php echo $row['creado']?></td>
                                
                            </tr>
                        <?php }?>
                    </tbody>
                   </table>
            </div>
                </div>
            </div>
            <div class="box1" id="nutricion">
                <h2>Nutricion</h2>
                <div class="box2">
                <div class="col-md-8">
                <table>
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Comentario</th>
                            <th>Likes</th>
                            <th>Creado</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM publicaciones_ref WHERE id_comunidad= 5";
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result)) {  ?>
                            <tr>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['contenido']?></td>
                                <td><?php echo $row['likes']?></td>
								<td><?php echo $row['creado']?></td>
                                
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
                </div>
            </div>		
		</section>
	</main>
<<<<<<< HEAD
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
>>>>>>> fccee8da0a86a8682aae27fe2473b56a2a7a5cf1
    <script src="../js/conectores.js"></script>
    <script src="../js/interact.js"></script>
</body>
</html>