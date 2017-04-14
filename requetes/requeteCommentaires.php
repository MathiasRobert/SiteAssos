<?php
$stmt = $pdo->prepare("SELECT * FROM COMMENTAIRE, UTILISATEUR WHERE arti_id=? AND COMMENTAIRE.util_id=UTILISATEUR.util.id");
$stmt->execute(array($arti_id));
$commentaires = $stmt->fetchAll(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
