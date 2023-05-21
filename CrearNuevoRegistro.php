<?php
function crearRegistro($datos)
{
    global $pdo;

    $query = "INSERT INTO tabla (campo1, campo2, campo3) VALUES (:campo1, :campo2, :campo3)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':campo1', $datos['campo1']);
    $stmt->bindParam(':campo2', $datos['campo2']);
    $stmt->bindParam(':campo3', $datos['campo3']);
    
    return $stmt->execute();
}
?>
