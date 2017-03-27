<?php
$stmt = $pdo->prepare("SELECT even_id, asso_id, even_titre, even_date, even_heureDeb, even_heureFin, even_affiche, even_lieu FROM EVENEMENT WHERE asso_id=$asso_id");
$stmt->execute();
$evenements = $stmt->fetchAll(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
