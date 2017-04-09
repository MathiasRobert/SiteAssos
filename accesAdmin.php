<?php
session_start();

include('includes/connect.php');

if(isset($_SESSION['EMAIL_USER']))
{
  $mail = $_SESSION['EMAIL_USER'];
  $stmt = $pdo->prepare("SELECT asso_id FROM ASSOCIATION WHERE asso_mail=?");
  $stmt->execute(array($mail));
  $asso_id = $stmt->fetch(PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if($stmt->rowCount() == 1)
  {
    $_SESSION['ASSO_ID'] = $asso_id->asso_id;
  }
}
$url = $_SERVER['HTTP_REFERER'];
header('Location: '.$url);
exit();
?>
