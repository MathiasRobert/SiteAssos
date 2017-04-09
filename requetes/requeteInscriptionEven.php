<?php
session_start();

require_once('../includes/connect.php');

if(isset($_POST['id']) && isset($_SESSION['ID_USER']))
{
  $even_id = $_POST['id'];
  $util_id = $_SESSION['ID_USER'];
  if (isset($_POST['action']) && ($_POST['action'] == 'inscription')) {
    $stmt = $pdo->prepare('INSERT INTO INSCRIPTION (even_id, util_id) VALUES (?, ?)');
    $stmt->execute(array($even_id, $util_id));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  elseif (isset($_POST['action']) && ($_POST['action'] == 'desinscription')) {
    $stmt = $pdo->prepare('DELETE FROM INSCRIPTION WHERE even_id=? AND util_id=?');
    $stmt->execute(array($even_id, $util_id));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}

?>
