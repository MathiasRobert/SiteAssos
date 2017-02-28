<?php
session_start();

if(isset($_POST['name']))
  $_SESSION['NOM_USER'] = $_POST['name'];
if(isset($_POST['image']))
  $_SESSION['URL_IMAGE_USER'] = $_POST['image'];
if(isset($_POST['email']))
  $_SESSION['EMAIL_USER'] = $_POST['email'];

header("Location: index.php");
?>
