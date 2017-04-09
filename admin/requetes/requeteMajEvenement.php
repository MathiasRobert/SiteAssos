<?php
session_start();

require_once('../../includes/connect.php');

if(isset($_SESSION['ASSO_ID']))
{
  $asso_id = $_SESSION['ASSO_ID'];
  if(isset($_POST['id']))
    $id_evenement = $_POST['id'];
  if(isset($_POST['titre']))
    $titre = $_POST['titre'];
  if(isset($_POST['lieu']))
    $lieu = $_POST['lieu'];
  if(isset($_POST['categorie']))
    $categorie = $_POST['categorie'];
  if(isset($_POST['tarifs']))
    $tarifs = $_POST['tarifs'];
  if(isset($_POST['description']))
    $description = $_POST['description'];
  if(isset($_POST['prix']))
    $prix = $_POST['prix'];
  if(isset($_POST['dateDeb']))
    $dateDeb = $_POST['dateDeb'];
  if(isset($_POST['heureDeb']))
    $heureDeb = $_POST['heureDeb'];
  if(isset($_POST['dateFin']))
    $dateFin = $_POST['dateFin'];
  if(isset($_POST['heureFin']))
    $heureFin = $_POST['heureFin'];
  if(isset($_FILES['affiche']))
  {
    $uploaddir = "images/$asso_id/evenement/$titre/";
    if (!file_exists('../../'.$uploaddir)) {
      mkdir('../../'.$uploaddir, 0777, true);
    }
    $uploadfile = '../../'.$uploaddir . basename($_FILES['affiche']['name']);
    move_uploaded_file($_FILES['affiche']['tmp_name'], $uploadfile);
    $uploadfileBDD = $uploaddir . basename($_FILES['affiche']['name']);
  }

  if(isset($_POST['maj'])) {
    $stmt = $pdo->prepare('UPDATE EVENEMENT SET even_titre=?, even_lieu=?, even_categorie=?, even_tarifs=?, even_description=?, even_prix=?, even_dateDeb=?, even_heureDeb=?, even_dateFin=?, even_heureFin=?, even_affiche=case when ? = ? then even_affiche else ? end WHERE even_id=?');
    $stmt->execute(array($titre, $lieu, $categorie, $tarifs, $description, $prix, $dateDeb, $heureDeb, $dateFin, $heureFin, $uploadfileBDD, $uploaddir, $uploadfileBDD, $id_evenement));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  elseif (isset($_POST['ajouter'])) {
    $stmt = $pdo->prepare('INSERT INTO EVENEMENT (asso_id, even_titre, even_lieu, even_categorie, even_tarifs, even_description, even_prix, even_dateDeb, even_heureDeb, even_dateFin, even_heureFin, even_affiche) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, case when ? = ? then "" else ? end)');
    $stmt->execute(array($asso_id, $titre, $lieu, $categorie, $tarifs, $description, $prix, $dateDeb, $heureDeb, $dateFin, $heureFin, $uploadfileBDD, $uploaddir, $uploadfileBDD));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  elseif (isset($_POST['supprimer'])) {
    $stmt = $pdo->prepare('DELETE FROM EVENEMENT WHERE even_id=?');
    $stmt->execute(array($id_evenement));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}

header('Location: ../listeEvenements.php');
?>
