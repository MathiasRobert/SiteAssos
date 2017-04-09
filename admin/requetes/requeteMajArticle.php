<?php
session_start();

require_once('../../includes/connect.php');

if(isset($_SESSION['ASSO_ID']))
{
  $asso_id = $_SESSION['ASSO_ID'];
  if(isset($_POST['id']))
    $id_article = $_POST['id'];
  if(isset($_POST['titre']))
    $titre = $_POST['titre'];
  if(isset($_POST['texte']))
    $texte = $_POST['texte'];
  if(isset($_POST['categorie']))
    $categorie = $_POST['categorie'];
  if(isset($_FILES['photo']))
  {
    $uploaddir = "images/$asso_id/article/$titre/";
    if (!file_exists('../../'.$uploaddir)) {
      mkdir('../../'.$uploaddir, 0777, true);
    }
    $uploadfile = '../../'.$uploaddir . basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
    $uploadfileBDD = $uploaddir . basename($_FILES['photo']['name']);
  }

  if(isset($_POST['maj'])) {
    $stmt = $pdo->prepare('UPDATE ARTICLE SET arti_titre=?, arti_texte=?, cate_id=? ,arti_photo=case when ? = ? then arti_photo else ? end WHERE arti_id=?');
    $stmt->execute(array($titre, $texte, $categorie, $uploadfileBDD, $uploaddir, $uploadfileBDD, $id_article));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  elseif (isset($_POST['ajouter'])) {
    date_default_timezone_set('Europe/Paris');
    $date = date('Y-m-d H:i:s');

    $stmt = $pdo->prepare('INSERT INTO ARTICLE (asso_id, arti_titre, arti_texte, cate_id, arti_dateHeure, arti_photo) VALUES (?, ?, ?, ?, ?,case when ? = ? then "" else ? end)');
    $stmt->execute(array($asso_id, $titre, $texte, $categorie, $date, $uploadfileBDD, $uploaddir, $uploadfileBDD));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  elseif (isset($_POST['supprimer'])) {
    $stmt = $pdo->prepare('DELETE FROM ARTICLE WHERE arti_id=?');
    $stmt->execute(array($id_article));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}

header('Location: ../listeArticles.php');
?>
