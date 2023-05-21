<?php
    // Conectar a base de datos
    // 1) Crear la cadena de conexión (Puenta a la base de datos)
    $miConexion=mysqli_connect('127.0.0.1','root','','bdtienda');
    // 2) Definir el qué vas a hacer en la base de datos
    // Usualmente son 4 acciones que se puede realizar en la base de datos:
    // - Leer (SELECT)
    // - Registrar/Insertar/Guardar (INSERT INTO)
    // - Actualizar (UPDATE)
    // - Eliminar (DELETE)
    $nombre='';
    if (isset($_GET['parNombre'])){
        $nombre=$_GET['parNombre'];;
    }
    

    $comandoARealizar = "SELECT productos.*, categorias.nombres as categoria FROM productos inner join categorias on categorias.id=productos.idcategorias where productos.nombres like  '%". $nombre ."%'";
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
            CRUD - Productos
        </h3>
        <div class="row py-3">
            <div class="col">

            </div>
      
                <form class="col d-flex align-items-center gap-2" action="index.php" method="GET">
                    <label class="w-50">Nombre de Producto</label>
                    <input type="text" name='parNombre' class="form-control w-100" />
                    <input type="submit" class=" btn btn-success" value="Buscar"/>
                </form>
                
 
            
        </div>
        <table class="table border">
            <thead>
                <th>
                    ID
                </th>
                <th class="w-100">
                    Nombre
                </th>
                <th class="w-100">
                    Categoria
                </th>
                <th class="w-100">
                    Precio
                </th>
                <th class="w-100">
                    Venta
                </th>
                <th>
                    Acciones
                </th>
            </thead>
            <?php
            while ($fila=mysqli_fetch_array($miRepositorio)) 
            {
            ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['nombres'];  ?></td>
                <td><?php echo $fila['categoria'];  ?></td>
                <td><?php echo $fila['precio'];  ?></td>
                <td><?php echo $fila['estado'];  ?></td>
                <td class="d-flex gap-2"> 
                    <a href="productoEliminar.php?parId=<?php echo $fila['id']; ?>&parNombre=<?php echo $fila['nombres']; ?>" class="btn btn-danger">Eliminar</a> 
                    <a href="productoActualizar.php?parId=<?php echo $fila['id']; ?>&parNombre=<?php echo $fila['nombres']; ?>&parIdcategorias=<?php echo $fila['idcategorias']; ?>&parPrecio=<?php echo $fila['precio']; ?>&parEstado=<?php echo $fila['estado']; ?>"  class="btn btn-warning">Editar</a>
                </td>
            </tr>
            <?php
            }
            ?>
            
        </table>
        <a href="productoInsertar.php" class="btn btn-primary">Registrar nuevo</a>
    </div>
</body>
</html>