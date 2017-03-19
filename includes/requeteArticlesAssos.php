<?php
$stmt = $pdo->prepare("SELECT arti_id, asso_id, arti_titre, SUBSTRING(arti_texte, 1, 250) as texteCourt, arti_dateHeure, arti_photo, cate_nom FROM ARTICLE, CATEGORIE WHERE asso_id=$asso_id AND ARTICLE.cate_id=CATEGORIE.cate_id");
$stmt->execute();
$articles = $stmt->fetchAll(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
