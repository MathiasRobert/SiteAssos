<?php
$stmt = $pdo->prepare("SELECT *, cate_nom FROM ARTICLE, CATEGORIE_ARTICLE WHERE arti_id = ? AND ARTICLE.cate_id=CATEGORIE_ARTICLE.cate_id");
$stmt->execute(array($arti_id));
$article = $stmt->fetch(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
