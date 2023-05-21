<?php
    //Recuperando los datos del formulario pacienteInsertar.php
    $elNombre = $_POST['txtNombre'];
    $elId = $_POST['txtId'];
    // echo $elNombre;   
    $miConexion=mysqli_connect('127.0.0.1','root','','bdtienda');
    $comandoARealizar = "update  categorias set nombres='$elNombre' where id='$elId'";
    $miRepositorio = mysqli_query($miConexion,$comandoARealizar);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Leer datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    .boton{
        display: block;
    }
    .boton:hover , .active{
        background-color: #1e293b;
    }
</style>
</head>
<body>
<div class="container-fluid bg-danger text-white  ">
        <div class="container d-flex justify-content-between align-items-center">
            <h3>
                <a class="text-white  text-decoration-none" href="/"><a class="text-white  text-decoration-none" href="/">Grupo</a></a>
            </h3>
            <nav class="d-flex align-items-stretch ">
                <a class="navbar-brand boton p-3" href='../productos/index.php'>Productos</a>
                <a class="navbar-brand boton p-3 active" href='index.php' >Categorias</a>
            </nav>
        </div>
    </div>
    <div class="container py-2">
        <?php
            //Recuperando los datos del formulario pacienteInsertar.php
            echo '<h3 class="p-3 mb-2 bg-primary-subtle"> Categoria actualizado satisfactoriamente. </h3>';
        ?>
        <a class="btn btn-primary px-5" href="index.php">Volver al inicio</a>
    </div>
    
</body>
</html>