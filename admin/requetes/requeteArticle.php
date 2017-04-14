<?php
  $stmt = $pdo->prepare("SELECT *, cate_nom FROM ARTICLE, CATEGORIE_ARTICLE WHERE arti_id=? AND ARTICLE.cate_id=CATEGORIE_ARTICLE.cate_id");
  $stmt->execute(array($id_article));
  $infosArticle = $stmt->fetch(PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
