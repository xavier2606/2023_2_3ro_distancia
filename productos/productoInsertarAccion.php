<?php
    // Importando clase
    
    require_once '../Clases/Producto.php';

    //Recuperando los datos del formulario pacienteInsertar.php
    $varNombre= $_POST['txtNombre'];
    $varPrecio= $_POST['txtPrecio'];
    $varCategorias= $_POST['cboCategorias'];
    $varVenta= $_POST['optVenta'];
    // echo $elNombre;   
    
    
    $miConexion=mysqli_connect('127.0.0.1','root','','bdtienda');
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
                <a class="navbar-brand boton p-3 active" href='index.php'>Productos</a>
                <a class="navbar-brand boton p-3 " href='../categorias/index.php' >Categorias</a>
            </nav>
        </div>
    </div>
    <div class="container py-2">
        <?php
            try 
            {
                
                //Con los datos capturados creo un objeto de la clase clsCliente
                $nuevoProducto = new Producto($varNombre,$varPrecio,$varVenta);
                $comandoARealizar = "INSERT INTO productos(nombres,precio,estado,idcategorias) VALUES('$varNombre','$varPrecio','$varVenta','$varCategorias')";
                $miRepositorio = mysqli_query($miConexion,$comandoARealizar);
                //Llamando al método para registrar
            //Recuperando los datos del formulario pacienteInsertar.php
            echo '<h3 class="p-3 mb-2 bg-primary-subtle"> Producto registrado satisfactoriamente. </h3>';
        ?>
        <a class="btn btn-primary px-5" href="index.php">Volver al inicio</a>
    </div>
    <?php
    } 
    catch(Exception $miError) 
    {
        ?>
        <article class="alert alert-danger shadow  ">
            <h4 class="  px-2  ">Lista de Errores</h4>
            <ul class="p-4">
                <li ><?php  echo $miError->getMessage()    ?> </li>
            </ul>
        </article> 
        
        <?php
        echo "<a href=\"javascript:history.go(-1)\">Regregar</a>";
    }

?>
</body>
</html>