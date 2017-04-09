<?php
session_start();

require_once('../../includes/connect.php');

if(isset($_SESSION['ASSO_ID']))
{
  $asso_id = $_SESSION['ASSO_ID'];
  if(isset($_POST['id']))
    $id_membre = $_POST['id'];
  if(isset($_POST['prenom']))
    $prenom = $_POST['prenom'];
  if(isset($_POST['nom']))
    $nom = $_POST['nom'];
  if(isset($_POST['surnom']))
    $surnom = $_POST['surnom'];
  if(isset($_POST['poste']))
    $poste = $_POST['poste'];
  if(isset($_POST['mail']))
    $mail = $_POST['mail'];
  if(isset($_FILES['photo']))
  {
    $uploaddir = "images/$asso_id/equipe/";
    if (!file_exists('../../'.$uploaddir)) {
      mkdir('../../'.$uploaddir, 0777, true);
    }
    $uploadfile = '../../'.$uploaddir . basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
    $uploadfileBDD = $uploaddir . basename($_FILES['photo']['name']);
  }

  if(isset($_POST['maj'])) {
    $stmt = $pdo->prepare('UPDATE EQUIPE SET equi_prenom=?, equi_nom=?, equi_surnom=?, equi_poste=?, equi_mail=? ,equi_photo=case when ? = ? then equi_photo else ? end WHERE equi_id=?');
    $stmt->execute(array($prenom, $nom, $surnom, $poste, $mail, $uploadfileBDD, $uploaddir, $uploadfileBDD, $id_membre));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  elseif (isset($_POST['ajouter'])) {
    $stmt = $pdo->prepare('INSERT INTO EQUIPE (asso_id, equi_prenom, equi_nom, equi_surnom, equi_poste, equi_mail, equi_photo) VALUES (?, ?, ?, ?, ?, ? ,case when ? = ? then "" else ? end)');
    $stmt->execute(array($asso_id, $prenom, $nom, $surnom, $poste, $mail, $uploadfileBDD, $uploaddir, $uploadfileBDD));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  elseif (isset($_POST['supprimer'])) {
    $stmt = $pdo->prepare('DELETE FROM EQUIPE WHERE equi_id=?');
    $stmt->execute(array($id_membre));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}

header('Location: ../listeEquipe.php');
?>
