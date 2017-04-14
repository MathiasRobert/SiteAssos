<?php
$stmt = $pdo->prepare("SELECT arti_id, asso_id, arti_titre, SUBSTRING(arti_texte, 1, 250) as texteCourt, arti_dateHeure, arti_photo, cate_nom FROM ARTICLE, CATEGORIE_ARTICLE WHERE asso_id=? AND ARTICLE.cate_id=CATEGORIE_ARTICLE.cate_id");
$stmt->execute(array($asso_id));
$articles = $stmt->fetchAll(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
