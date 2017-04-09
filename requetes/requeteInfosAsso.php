<?php
$stmt = $pdo->prepare("SELECT * FROM EQUIPE WHERE asso_id=?");
$stmt->execute(array($asso_id));
$membresAsso = $stmt->fetchAll(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
