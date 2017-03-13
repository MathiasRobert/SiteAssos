<?php
$stmt = $pdo->prepare("SELECT arti_id, asso_id, arti_titre, SUBSTRING(arti_texte, 1, 250) as texteCourt, arti_dateHeure, arti_photo FROM ARTICLE WHERE asso_id=$asso_id");
$stmt->execute();
$articles = $stmt->fetchAll(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
