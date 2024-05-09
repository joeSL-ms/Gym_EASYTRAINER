<?php include '../php/verificacion.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="CSS/style.css">
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
</head>
<body>
    <nav>
        <div><h1>Easy Trainer</h1></div>
        <div class="top_nav">
            <ul>
                <li><a href="../inicio/index.php"  data-hover="INICIO">INICIO</a></li>
                <li><a href=<?php echo $enlacePerfil ?> data-hover= <?php echo $textoEnlacePerfil ?>><?php echo $textoEnlacePerfil ?></a></li>
                <li><a href="../entrenamiento/index.php" data-hover="ENTRENOS">ENTRENOS</a></li>
                <li><a href="#contacto"  data-hover="CONTACTO">CONTACTO</a></li>
                <li><a href="index.php"  data-hover="COMUNIDAD">COMUNIDAD</a></li>
            </ul>
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
    <script src="../js/conectores.js"></script>
    <script src="../js/interact.js"></script>
</body>
</html>