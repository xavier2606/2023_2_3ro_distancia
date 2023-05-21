<?php
function listarRegistros()
{
    global $pdo;

    $query = "SELECT * FROM tabla";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
