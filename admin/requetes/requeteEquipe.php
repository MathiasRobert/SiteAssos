<?php
  $stmt = $pdo->prepare("SELECT * FROM EQUIPE WHERE equi_id=?");
  $stmt->execute(array($id_membre));
  $infosMembre = $stmt->fetch(PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
