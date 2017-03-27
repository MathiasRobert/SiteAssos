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

svg {
  /*This goes here because SVG uses em as units*/
  font: normal 9pt sans-serif;
  margin-left: 20px;
}
svg g line {
  stroke: <?php echo $styleAsso->asso_couleur; ?>;
  stroke-width: 2px;
  opacity: 0.4;
}
svg g.active line,
svg g.active ~ g line {
  stroke: <?php echo $styleAsso->asso_couleur; ?>;
  opacity: 1;
}
svg g circle {
  fill: <?php echo $styleAsso->asso_couleur; ?>;
  opacity: 0.4;
}
svg g.active circle,
svg g.active ~ g circle {
  fill: <?php echo $styleAsso->asso_couleur; ?>;
  opacity: 1;
}

/* Make the active group bigger*/

svg g.active {
  font-size: 1.5em;
}
/* Use 'pointer' cursor*/

svg g circle,
svg g text {
  cursor: pointer;
}



.infos-asso h5.description {
    margin-bottom: 80px;
}

.avatar-nav {
  position: absolute;
  max-width: 110px;
  display: none;
}

.avatar {
  position: absolute;
  left: 46%;
  z-index: 1031;
  max-width: 110px;
  margin: -60px auto 0;
}

.avatar > img, .avatar-nav > img {
  content: url("../<?php echo $styleAsso->asso_logo; ?>")
}

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

.card-profile {
    margin-top: 30px;
    text-align: center;
}

.card-profile.card-plain .card-avatar {
    margin-top: 0;
}

.card-profile .card-avatar {
    max-width: 130px;
    max-height: 130px;
    margin: -50px auto 0;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.card-profile .card-avatar + .content {
    margin-top: 15px;
}

.infos-asso .card .content {
    padding-left: 15px;
    padding-right: 15px;
}

.card img {
    width: 100%;
    height: auto;
}

.img-article {
    background-size: cover;
    width: 300px;
    height: 200px;
}

h6, .h6 {
    font-size: 0.9em;
    text-transform: uppercase;
    font-weight: 500;
}

.card .footer {
    margin-top: 15px;
}

.infos-assos .card .btn {
    margin-top: 0;
}

.btn.btn-facebook.btn-simple {
    color: #3b5998;
    background-color: transparent;
    box-shadow: none;
}

.btn.btn-just-icon {
    font-size: 20px;
    padding: 12px 12px;
    line-height: 1em;
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

input[type=checkbox]:checked  + .checkbox-material .check {
  background: <?php echo $styleAsso->asso_couleur; ?> !important;
}

.table > thead > tr > th {
    border-bottom-width: 1px;
    font-size: 1.25em;
    font-weight: 300;
}

.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    padding: 12px 8px;
    vertical-align: middle;
}

.table-evenements > thead > tr > th {
    font-size: 0.9em;
    text-transform: uppercase;
}

.table > tbody > tr {
    position: relative;
}

.table-evenements > tbody > tr > td {
    font-size: 16px;
}

.table-evenements .td-name {
    min-width: 200px;
    font-weight: 400;
    font-size: 1.5em;
}

.table-evenements .td-name small {
    color: #999999;
    font-size: 0.75em;
    font-weight: 300;
}

.table-evenements .td-number {
    text-align: center;
    min-width: 70px;
    font-weight: 300;
    font-size: 1.3em;
}

.table-evenements .td-number small {
    color: #999999;
    font-size: 0.85em;
    font-weight: 300;
}

.table-evenements .img-container {
    width: 120px;
    max-height: 160px;
    overflow: hidden;
    display: block;
}

.table-evenements .img-container img {
    width: 100%;
}
