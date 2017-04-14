<?php
session_start();
include('../includes/connect.php');

$stmt = $pdo->prepare("INSERT INTO COMMENTAIRE (arti_id, util_id, comm_texte, comm_dateHeure) VALUES (?, ?, ?, ?)");
$stmt->execute(array($arti_id, $util_id));
$commentaires = $stmt->fetchAll(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
