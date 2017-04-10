<?php
require_once('../../includes/connect.php');

if(isset($_POST['id_even']) && isset($_POST['id_util']) && isset($_POST['aPaye']))
{
  $even_id = $_POST['id_even'];
  $util_id = $_POST['id_util'];
  $aPaye = $_POST['aPaye'];

  $stmt = $pdo->prepare('UPDATE INSCRIPTION SET insc_aPaye=? WHERE even_id=? AND util_id=?');
  $stmt->execute(array($aPaye, $even_id, $util_id));
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
?>
