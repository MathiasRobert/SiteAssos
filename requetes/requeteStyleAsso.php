<?php
$stmt = $pdo->prepare("SELECT asso_diminutif, asso_couleur, asso_logo FROM ASSOCIATION WHERE asso_id=?");
$stmt->execute(array($asso_id));
$styleAsso = $stmt->fetch(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
