<?php
$stmt = $pdo->prepare("SELECT EVENEMENT.even_id, even_titre, even_dateDeb, even_heureDeb, even_dateFin, even_heureFin, even_affiche, even_lieu FROM EVENEMENT, CONCERNE WHERE EVENEMENT.even_id=CONCERNE.even_id AND CONCERNE.asso_id=?");
$stmt->execute(array($asso_id));
$evenements = $stmt->fetchAll(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
