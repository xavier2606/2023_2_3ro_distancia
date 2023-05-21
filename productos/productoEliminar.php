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
        background-color: black;
    }

</style>

</head>
<body>
    <div class="container-fluid bg-danger text-white  ">
        <div class="container d-flex justify-content-between align-items-center">
            <h3>
            <a class="text-white  text-decoration-none" href="/">Grupo</a>
            </h3>
            <nav class="d-flex align-items-stretch ">
                <a class="navbar-brand boton p-3 active" href='index.php'>Productos</a>
                <a class="navbar-brand boton p-3 " href='../categorias/index.php' >Categorias</a>
            </nav>
        </div>
    </div>
    <div class="container py-2">
        <h3 class="py-1 border-bottom">
            ¿Dese eliminar el siguiente producto?
        </h3>
        
        <?php   
            echo '<br>';   
            echo '<h2>'. $_GET['parNombre'] .'</h2>' ;
            echo '<br>';
        ?>
        <form action="productoEliminarConfirmacion.php" method="post">
            <input type="hidden" name="txtDNI" value="<?php echo $_GET['parId']; ?>">
            <a href="index.php" class="btn btn-danger">No</a>
            <input type="submit" class="btn btn-primary px-5" value="Sí" >
            
        </form>
</div>
    
</body>
</html>