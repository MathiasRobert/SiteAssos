<?php
session_start();

require_once('includes/connect.php');


if(isset($_POST['name']))
  $_SESSION['NOM_USER'] = $_POST['name'];
if(isset($_POST['image']))
  $_SESSION['URL_IMAGE_USER'] = $_POST['image'];
if(isset($_POST['email']))
  $_SESSION['EMAIL_USER'] = $_POST['email'];
if(isset($_POST['id']))
  $id_google = $_POST['id'];
$_SESSION['alerteConnexion'] = 'true';


$stmt = $pdo->prepare("SELECT * FROM UTILISATEUR WHERE util_id_google=?");
$stmt->execute(array($id_google));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($stmt->rowCount() == 0)
{
  $nom = explode(' ', $_SESSION['NOM_USER'])[1];
  $prenom = explode(' ', $_SESSION['NOM_USER'])[0];
  $mail = $_SESSION['EMAIL_USER'];
  $stmt = $pdo->prepare('INSERT INTO UTILISATEUR (util_id_google, util_nom, util_prenom, util_mail) VALUES (?, ?, ?, ?)');
  $stmt->execute(array($id_google, $nom, $prenom, $mail));
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

$stmt = $pdo->prepare('SELECT * FROM UTILISATEUR WHERE util_id_google=?');
$stmt->execute(array($id_google));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$utilisateur = $stmt->fetch(PDO::FETCH_OBJ);

$_SESSION['ID_USER'] = $utilisateur->util_id;

?>
