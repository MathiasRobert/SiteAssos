<?php
session_start();

require_once('../../includes/connect.php');

if(isset($_SESSION['ASSO_ID']))
{
  $asso_id = $_SESSION['ASSO_ID'];
  if(isset($_POST['diminutif']))
    $diminutif = $_POST['diminutif'];
  if(isset($_POST['couleur']))
    $couleur = $_POST['couleur'];
  if(isset($_POST['descCourte']))
    $descCourte = $_POST['descCourte'];
  if(isset($_POST['descLongue']))
    $descLongue = $_POST['descLongue'];
  if(isset($_FILES['logo']))
  {
    $uploaddir = "images/$asso_id/logo/";
    if (!file_exists('../../'.$uploaddir)) {
      mkdir('../../'.$uploaddir, 0777, true);
    }
    $uploadfile = '../../'.$uploaddir . basename($_FILES['logo']['name']);
    move_uploaded_file($_FILES['logo']['tmp_name'], $uploadfile);
    $uploadfileBDD = $uploaddir . basename($_FILES['logo']['name']);
  }


  $stmt = $pdo->prepare('UPDATE ASSOCIATION SET asso_diminutif=?, asso_couleur=?, asso_description_court=?, asso_description_long=?, asso_logo=case when ? = ? then asso_logo else ? end WHERE asso_id=?');
  $stmt->execute(array($diminutif, $couleur, $descCourte, $descLongue, $uploadfileBDD, $uploaddir, $uploadfileBDD, $asso_id));
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  header('Location: ../admin.php');
}
?>
