<?php
function eliminarRegistro($id)
{
    global $pdo;

    $query = "DELETE FROM tabla WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id);
    
    return $stmt->execute();
}
?>
