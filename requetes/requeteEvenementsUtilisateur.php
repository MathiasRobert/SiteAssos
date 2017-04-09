<?php
$stmt = $pdo->prepare("SELECT EVENEMENT.even_id, even_titre, even_dateDeb, even_heureDeb, even_dateFin, even_heureFin, even_affiche, even_lieu FROM EVENEMENT, INSCRIPTION WHERE EVENEMENT.even_id=INSCRIPTION.even_id AND INSCRIPTION.util_id=?");
$stmt->execute(array($util_id));
$evenements = $stmt->fetchAll(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
