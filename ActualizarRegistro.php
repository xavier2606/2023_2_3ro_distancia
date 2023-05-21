<?php
function actualizarRegistro($id, $datos)
{
    global $pdo;

    $query = "UPDATE tabla SET campo1 = :campo1, campo2 = :campo2, campo3 = :campo3 WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':campo1', $datos['campo1']);
    $stmt->bindParam(':campo2', $datos['campo2']);
    $stmt->bindParam(':campo3', $datos['campo3']);
    $stmt->bindParam(':id', $id);
    
    return $stmt->execute();
}
?>
