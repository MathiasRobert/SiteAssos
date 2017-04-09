<?php
$stmt = $pdo->prepare("SELECT * FROM UTILISATEUR WHERE util_id=?");
$stmt->execute(array($util_id));
$utilisateur = $stmt->fetch(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
