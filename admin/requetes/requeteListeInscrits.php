<?php
  $stmt = $pdo->prepare("SELECT * FROM INSCRIPTION, UTILISATEUR WHERE even_id=? AND INSCRIPTION.util_id=UTILISATEUR.util_id");
  $stmt->execute(array($id_evenement));
  $inscrits = $stmt->fetchAll(PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
