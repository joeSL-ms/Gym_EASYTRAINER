<?php
include "verificacion.php";
include "usuario.php";

if (isset($_POST['update'])) {
        $id = $_GET["id"];
        $nombre_entreno = $_POST['name'];
        $id_ejercicio = $_POST['ejercicio'];
        $series = $_POST['series'];
        $repeticiones = $_POST['repeticiones'];
        $kg = $_POST['peso'];
    
        $query = "UPDATE entrenamiento SET NOMBRE='$nombre_entreno', ID_EJERCICIO=$id_ejercicio, SERIE=$series, REPETICIONES=$repeticiones, KG=$kg WHERE ID = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed");
        }
        $_SESSION['message'] = 'Task Updated Successfully';
        $_SESSION['message_type'] = 'warning';
    
        header("Location: ../views/usuario/entrenos-usuario.php");
        $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/CSS/nav.css">
    <link rel="stylesheet" href="../assets/CSS/entrenamiento.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Entrenamientos | EasyTrainer </title>
    <link rel="icon" type="image/x-icon" href="../assets/img/icon.ico">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<div>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="#"><img src="../assets/img/logo.png" alt="Logo"></a></div>
            <input type="radio" name="slider" id="menu-btn">
            <input type="radio" name="slider" id="close-btn">
            <ul class="nav-links">
                <label for="close-btn" class="btn close-btn"><i class="fa fa-times"></i></label>
                <li><a href="../views/inicio/">Inicio</a></li>
                <li><a href=<?php echo "../views/usuario/entrenos-usuario.php" ?> data-hover=<?php echo $textoEnlaceEntreno ?>><?php echo $textoEnlaceEntreno ?></a></li>
                <li><a href="../views/comunidad/">Comunidad</a></li>
                <li><a href="../views/inicio/#contacto">Contacto</a></li>
                <li>
                    <a href="#" class="desktop-item">Usuario</a>
                    <input type="checkbox" id="showDrop">
                    <label for="showDrop" class="mobile-item">Usuario</label>
                    <ul class="drop-menu">
                        <li><a href=<?php echo '../views/usuario/perfil-usuario.php' ?>><?php echo $textoEnlacePerfil ?></a></li>
                        <li><a href=<?php echo $link ?>><?php echo $sesion ?></a></li>
                    </ul>
                </li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fa fa-bars"></i></label>
        </div>
    </nav>


    <div class="box-formulario-entreno" id="crear-entrenos">

        <h1>Editando el entreno</h1>
        <div class="formulario-entreno">

            <form method="POST" action="../includes/edit_entreno.php?id=<?php echo htmlspecialchars($_GET['id']); ?>">
                <input type="hidden" id="id" name="id" value="<?php echo isset($_GET['id']) ? htmlspecialchars($_GET['id']) : ''; ?>" required>
                <label for="name">Nombre de tu entreno:</label>
                <input type="text" id="name" name="name" required>
                <input type="hidden" id="saveName" name="saveName" value="John Doe">

                <label for="grupoMuscular">Elige un grupo muscular:</label>
                <select id="grupoMuscular" name="grupoMuscular" onchange="enlace()">
                    <option value="0">Todos</option>
                    <?php include 'tablas/gpm.php' ?>
                </select>
                <label for="ejercicio">Elige un ejercicio:</label>
                <select id="ejercicio" name="ejercicio" required>
                    <?php include 'tablas/ejercicio.php' ?>
                </select>
                <label for="series">Número de series:</label>
                <input type="number" id="series" name="series" required>
                <label for="repeticiones">Número de repeticiones:</label>
                <input type="number" id="repeticiones" name="repeticiones" required>
                <label for="peso">Peso (en kg):</label>
                <input type="number" id="peso" name="peso" required>
                <button class="btn btn-success" name="update">
                    Update
                </button>
            </form>
        </div>
    </div>

    <script src="../assets/js/conectores.js"></script>
    <script src="../assets/js/interact.js"></script>
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