<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "crud");

// Obtener la lista de usuarios
$query = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td></td>
            <?
        }