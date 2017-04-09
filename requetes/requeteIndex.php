<?php
$stmt = $pdo->prepare("SELECT asso_id, asso_nom, asso_diminutif, asso_description_court, asso_couleur, asso_logo FROM ASSOCIATION");
$stmt->execute();
$associations = $stmt->fetchAll(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
