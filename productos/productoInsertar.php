<?php
    $miConexion=mysqli_connect('127.0.0.1','root','','bdtienda');
    $comandoARealizar = "SELECT * FROM categorias ";
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
    .boton:hover, .active{
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
        <h4 class="py-1 border-bottom">
            NUEVO - Productos
        </h4>
        <form action="productoInsertarAccion.php" method="post">
            <div class="mb-3">
                <label class="form-label">Nombre de Producto</label>
                <input type="text" name="txtNombre" class="form-control"  placeholder="">
            </div> 
            <div class="mb-3">
                <label  class="form-label">Seleccione Categoria</label>
                <select  name="cboCategorias" class="form-control"  placeholder="">
                <?php
            while ($fila=mysqli_fetch_array($miRepositorio)) 
            {

            ?>
            <option value=<?php echo $fila['id']; ?>> <?php echo $fila['nombres']; ?></option>
            <?php
            }
            ?>
                </select>
            </div> 
            <div class="mb-3">
                <label  class="form-label">Precio de Producto</label>
                <input name="txtPrecio" type="number" step="0.10" value="0" class="form-control"  placeholder="">
            </div> 
            <div class="mb-3">
                <label class="form-label">Estado</label>
                <div class="">
                    <input type="radio" id="op1" name="optVenta"  value="SI" checked><label for="op1" class="mr-6 ml-2">  SI</label>
                    <input type="radio" id="op2" name="optVenta" value="NO"> <label for="op2" class="mr-4 ml-2"> NO</label>  
                </div>
            </div> 
            
            <input type="submit" class="btn btn-primary px-5" value="Guardar Producto">
        </form>
    </div>
    
</body>
</html>