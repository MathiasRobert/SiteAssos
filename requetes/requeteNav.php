<?php
$stmt = $pdo->prepare("SELECT asso_id, asso_diminutif, asso_couleur FROM ASSOCIATION");
$stmt->execute();
$associationsNav = $stmt->fetchAll(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
