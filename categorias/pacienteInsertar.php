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
    .boton:hover, .activo{
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
            <a class="navbar-brand boton p-3" href='../productos/index.php'>Productos</a>
                <a class="navbar-brand boton p-3 active" href='index.php' >Categorias</a>
            </nav>
        </div>
    </div>
    <div class="container py-2">
        <h4 class="py-1 border-bottom">
            NUEVO - Categorias
        </h4>
        <form action="pacienteInsertarAccion.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre de Categoria</label>
                <input type="text" name="txtNombre" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div> 
            <input type="submit" class="btn btn-primary px-5" value="Guardar Categoria">
        </form>
    </div>
    
</body>
</html>