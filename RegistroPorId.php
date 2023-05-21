<?php
function obtenerRegistro($id)
{
    global $pdo;

    $query = "SELECT * FROM tabla WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
