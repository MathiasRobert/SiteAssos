<?php
$stmt = $pdo->prepare("SELECT * FROM EVENEMENT, CATEGORIE_EVENEMENT, CONCERNE WHERE EVENEMENT.even_id = ? AND CONCERNE.even_id=? AND CONCERNE.asso_id=? AND CATEGORIE_EVENEMENT.cate_id = EVENEMENT.cate_id");
$stmt->execute(array($even_id, $even_id, $asso_id));
$evenement = $stmt->fetch(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
