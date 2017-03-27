<?php

$stmt = $pdo->prepare("SELECT even_id, even_titre, even_lieu, even_theme, even_dateFin, even_prix, even_tarifs, even_nbParticipantsMax,even_affiche, even_dateDeb, even_heureDeb, even_heureFin, asso_id FROM EVENEMENT WHERE even_id = $even_id");
$stmt->execute();
$evenement = $stmt->fetch(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>