<?php
  $stmt = $pdo->prepare("SELECT * FROM ASSOCIATION WHERE asso_id=?");
  $stmt->execute(array($asso_id));
  $infosAsso = $stmt->fetch(PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
