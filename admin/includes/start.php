<?php

session_start();

include('../includes/connect.php');
include('../includes/fonctions.php');
verifAccesAdmin();
$asso_id = $_SESSION['ASSO_ID'];
include('requetes/requeteInfosAsso.php');
?>
