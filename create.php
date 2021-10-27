<?php
//$conn não é mais uma variável, agora é um objeto.
//$conn = new PDO("mysql:host=localhost;dbname=fiap_db", "fiap", "fiap");
require_once "inc/conn.inc.php";

$stmt = $conn->prepare("insert into tb_events(title, local_event, start_at, end_at, site) values (:title, :local_event, :start_at, :end_at, :site)");


$title = "Fiap Summit";
$local_event = "Unidade Lins";
$start_at = "2021-10-26 19:30";
$end_at = "2021-10-26 21:30";
$site = "www.fiap.com.br";

$stmt->bindParam(":title", $title);
$stmt->bindParam(":local_event", $local_event);
$stmt->bindParam(":start_at", $start_at);
$stmt->bindParam(":end_at", $end_at);
$stmt->bindParam(":site", $site);

if ($stmt->execute()) {
    echo "Dados cadastrados com sucesso!";
}
