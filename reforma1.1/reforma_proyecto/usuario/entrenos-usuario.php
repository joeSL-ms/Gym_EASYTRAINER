<?php include '../php/verificacion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
    <?php include("../php/db.php");?>
</head>
<body>
    <nav>
        <div><h1>Easy Trainer</h1></div>
        <div class="top_nav">
            <ul>
                <li><a href="../inicio/index.php"  data-hover="INICIO">INICIO</a></li>
                <li><a href=<?php echo $enlacePerfil ?> data-hover= <?php echo $textoEnlacePerfil ?>><?php echo $textoEnlacePerfil ?></a></li>
                <li><a href=<?php echo $enlaceEntreno ?> data-hover= <?php echo $textoEnlaceEntreno ?>><?php echo $textoEnlaceEntreno ?></a></li>
                <li><a href="../inicio/index.php#contacto"  data-hover="CONTACTO">CONTACTO</a></li>
                <li><a href="../comunidad/index.php"  data-hover="COMUNIDAD">COMUNIDAD</a></li>
            </ul>
        </div>
    </nav>
    <main>
    <div class="box1">
        <div><!--Mensaje confirmacion de borrado/gaurdado/modificacion-->
        <?php if(isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?- $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?php  echo $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset(); } ?>
        </div>
        <h1>Crear entreno</h1>
        <form method="POST" action="../php/save_table.php">
    <!-- Tabla a rellenar para introducir un ejercicio -->
    <input type="hidden" id="ID_usu" name="ID_usu" value="John Doe">

    <label for="name">Nombre de tu entreno:</label>
    <input type="text" id="name" name="nombre_entreno">
    
    <label for="grupoMuscular">Elige un grupo muscular:</label>
    <select id="grupoMuscular" name="grupoMuscular" onchange="updateExercises()">
        <option value="pecho">Pecho</option>
        <option value="triceps">Triceps</option>
        <option value="biceps">Biceps</option>
        <option value="espalda">Espalda</option>
        <option value="hombros">Hombros</option>
        <option value="abdomen">Abdominales</option>
        <option value="gluteos">Glúteo</option>
        <option value="quadriceps">Quádriceps</option>
        <option value="isquio">Isquio</option>
    </select>
    <br>
    <label for="ejercicio">Elige un ejercicio:</label>
    <select id="ejercicio" name="ejercicio">
        <!-- Los ejercicios se llenarán con JavaScript -->
    </select>
    <br>
    <label for="series">Número de series:</label>
    <input type="number" id="series" name="series">
    <br>
    <label for="repeticiones">Número de repeticiones:</label>
    <input type="number" id="repeticiones" name="repeticiones">
    <br>
    <label for="peso">Peso (en kg):</label>
    <input type="number" id="peso" name="kg">
    <br>
    <!-- Botón para guardar la tabla -->
    <input type="submit" name="save_table" value="Guardar entreno">
    <!-- Botón adicional para guardar solo el nombre -->
    <input type="submit" name="save_name" value="Guardar nombre" formnovalidate>
</form>
    </div>
    <!--Script para mostrar las opciones distintas de ejercicios-->
    <script>
        function updateExercises(row) {
            
            var grupoMuscular = document.getElementById("grupoMuscular").value;
            var select = document.getElementById("ejercicio");
           
            var ejercicios = {
                pecho: ["Press de Banca", "Press Inclinado", "Aperturas con Mancuernas"],
                quadriceps: ["Sentadillas", "Prensa de Piernas", "Extensiones de Piernas"],
                espalda: ["Dominadas", "Remo con Barra", "Peso Muerto"],
                hombros: ["Press Militar", "Elevaciones Laterales", "Face Pulls", "Press Arnold"],
                triceps: ["Fondos en Paralelas", "Press Francés", "Extensiones de Tríceps"],
                abdomen: ["Planchas", "Crunches", "Russian Twists", "Mountain Climbers"],
                biceps: ["Curl de Bíceps con Barra", "Curl de Martillo", "Curl de Concentración", "21s"],
                gluteos: ["Hip Thrust", "Patada de Glúteo", "Sentadillas Sumo", "Puentes"],
                isquio: ["Peso Muerto Rumano", "Curl de Piernas en Máquina", "Good Mornings"]
            };
        
            select.innerHTML = "";
            for (var i = 0; i < ejercicios[grupoMuscular].length; i++) {
                var opt = document.createElement('option');
                opt.value = ejercicios[grupoMuscular][i];
                opt.innerHTML = ejercicios[grupoMuscular][i];
                select.appendChild(opt);
            }
        }
    </script>
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
                        $query = "SELECT * FROM entrenamiento ";
                        $result = mysqli_query($conn, $query);
                        

                        while($row = mysqli_fetch_array($result)) {  ?>
                            <tr>
                                <td><?php echo $row['NOMBRE']?></td>
                                <td><?php echo $row['EJERCICIO']?></td>
                                <td><?php echo $row['SERIES']?></td>
                                <td><?php echo $row['REPETICIONES']?></td>
                                <td><?php echo $row['KG']?></td>
                                <td>
                                   
                                    <a href="../php/delete_row.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
    
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <main>
    <div class="box2">
        <iframe src="https://calendar.google.com/calendar/embed?src=627dea36ea7e3946917c5a28618b5c80a403ad20c471e78ed025f7feb9e4aede%40group.calendar.google.com&ctz=Europe%2FMadrid" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
    <script src="../js/interact.js"></script>
</body>
</html>