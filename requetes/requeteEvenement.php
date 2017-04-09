<?php
$stmt = $pdo->prepare("SELECT * FROM EVENEMENT WHERE even_id = ?");
$stmt->execute(array($even_id));
$evenement = $stmt->fetch(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
