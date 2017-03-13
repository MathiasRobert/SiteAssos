<?php
header('content-type: text/css');

// echo ini_get('display_errors');
// if (!ini_get('display_errors')) {
//   ini_set('display_errors', '1');
// }
// echo ini_get('display_errors');

if(isset($_GET['asso_id']))
  $asso_id = $_GET['asso_id'];

include('../includes/connect.php');
include('../includes/requeteStyleAsso.php');
?>

.card > .header {
  background-color: <?php echo $styleAsso->asso_couleur; ?>;
}

.navbar {
  background-color: <?php echo $styleAsso->asso_couleur; ?>;
}

.dropdown-menu li > a:hover, a:focus{
 background-color: <?php echo $styleAsso->asso_couleur; ?> !important;
}

.card-blog {
  margin-top: 30px;
}

.card {
  margin-bottom: 30px;
}

.card-blog .row .category {
    margin-bottom: 0;
}

.card-blog .card-title {
    margin-top: 5px;
}

.card-plain .card-image {
    margin: 0;
    border-radius: 3px;
}

.card .card-image img {
    width: 100%;
    height: auto;
    border-radius: 6px;
    pointer-events: none;
}

.card-plain .card-image img {
    border-radius: 3px;
}
