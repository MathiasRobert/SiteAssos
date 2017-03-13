<?php
  // Paramètres de connexion
$driver = 'mysql';
$host = 'localhost';
$nomDb = 'assos_ensc';
$user = 'assos_ensc_user';
$password = 'secret';
// Chaîne de connexion
$pdodsn = "$driver:host=$host;dbname=$nomDb";
try {
  $pdo = new PDO($pdodsn, $user, $password);
} catch (PDOException $e) {
  echo 'Échec lors de la connexion : ' . $e->getMessage();
} ?>
