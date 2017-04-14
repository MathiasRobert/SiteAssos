<?php
  $stmt = $pdo->prepare("SELECT * FROM CATEGORIE_ARTICLE");
  $stmt->execute();
  $infosCategories = $stmt->fetchAll(PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
