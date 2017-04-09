<?php
$util_id = $_SESSION['ID_USER'];
$stmt = $pdo->prepare("SELECT * FROM INSCRIPTION WHERE util_id=? AND even_id=?");
$stmt->execute(array($util_id, $even_id));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$estInscrit = true;
if($stmt->rowCount() == 0)
  $estInscrit = false;

?>
