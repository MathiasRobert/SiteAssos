<?php

$stmt = $pdo->prepare("SELECT even_id, even_titre, even_dateDeb, even_heureDeb, even_heureFin, asso_id FROM EVENEMENT WHERE even_id = ?");
$stmt->execute(array($even_id));
$evenement = $stmt->fetch(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
