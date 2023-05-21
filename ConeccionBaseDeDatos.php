<?php
$host = 'nombre_del_host';
$db = 'nombre_de_la_base_de_datos';
$user = 'usuario';
$password = 'contraseña';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}
?>
