<?php
require_once('../../includes/connect.php');

if(isset($_POST['id_even']) && isset($_POST['id_util']))
{
  $even_id = $_POST['id_even'];
  $util_id = $_POST['id_util'];
  $stmt = $pdo->prepare('DELETE FROM INSCRIPTION WHERE even_id=? AND util_id=?');
  $stmt->execute(array($even_id, $util_id));
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
?>
