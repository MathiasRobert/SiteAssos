<?php
  $stmt = $pdo->prepare("SELECT * FROM EVENEMENT WHERE even_id=?");
  $stmt->execute(array($id_evenement));
  $infosEvenement = $stmt->fetch(PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
