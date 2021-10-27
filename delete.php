<?php


require_once "inc/conn.inc.php";

$stmt = $conn->prepare("delete from tb_events where id=:id");

$id = 1;

$stmt->bindParam(':id', $id);
//LGPD - Lei Geral de Proteção de Dados
// Como alguém terceiro pode usar os seus dados. Os dados são seus.

if ($stmt->execute()) {
    echo "<script>alert('Dados excluídos com sucesso!');</script>";
}
