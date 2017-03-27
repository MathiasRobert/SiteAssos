<?php
require_once('connect.php');

$stmt = $pdo->prepare("SELECT even_id as url, even_titre as title, even_dateDeb as start,  even_dateFin as end, even_heureDeb, even_heureFin, asso_couleur as color FROM EVENEMENT, ASSOCIATION WHERE ASSOCIATION.asso_id=EVENEMENT.asso_id");
$stmt->execute();
$evenements = $stmt->fetchAll(PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//var_dump($_SERVER);
$url1 = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$strUrl = substr_replace($url1, '', strlen($url1) - 34, 34);
foreach ($evenements as $e) {
  $e->url = $strUrl.'pageEvent.php?id='.$e->url;
  $e->start = $e->start.'T'.$e->even_heureDeb;
  $e->end = $e->end.'T'.$e->even_heureFin;
  unset($e->even_heureDeb);
  unset($e->even_heureFin);
}
echo json_encode($evenements);
//echo json_encode(array_values("title" => $evenements[0]->even_titre, "start" => $evenements[0]->even_date));

?>
