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

.btn,
.btn:hover,
.btn:active,
.btn:visited,
.btn:focus {
  background-color: <?php echo $styleAsso->asso_couleur; ?>;
}

.form-group.is-focused label, .form-group.is-focused label.control-label {
  color: <?php echo $styleAsso->asso_couleur; ?>;
}
.form-control, .form-group .form-control {
 background-image: linear-gradient(<?php echo $styleAsso->asso_couleur; ?>, <?php echo $styleAsso->asso_couleur; ?>), linear-gradient(#D2D2D2, #D2D2D2) !important;
}
.form-group:is-focused .form-control {
    background-image: linear-gradient(<?php echo $styleAsso->asso_couleur; ?>, <?php echo $styleAsso->asso_couleur; ?>), linear-gradient(#D2D2D2, #D2D2D2) !important;
}

.card > .header, .card > form > .header{
  background-color: <?php echo $styleAsso->asso_couleur; ?>;
}

.card-contact {
      padding: 0px 30px 0px 30px;
}

.card > form > .header > h4 {
  color : white;
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

.card .card-image {
    height: 60%;
    position: relative;
    overflow: hidden;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: -30px;
    border-radius: 6px;
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.img {
    background-size: cover;
    width: 300px;
    height: 200px;
}

.card-plain .card-image {
    margin: 0;
    height: auto;
    border-radius: 3px;
}

.card-plain .card-image img {
    border-radius: 3px;
}

a, a:hover, a:focus {
  color: <?php echo $styleAsso->asso_couleur; ?>;
}
