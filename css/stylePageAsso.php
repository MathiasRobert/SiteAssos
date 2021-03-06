<?php
header('content-type: text/css');

if(isset($_GET['asso_id']))
  $asso_id = $_GET['asso_id'];

include('../includes/connect.php');
include('../requetes/requeteStyleAsso.php');
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

a:not(.btn), a:active:not(.btn), a:hover:not(.btn), a:focus:not(.btn) {
  background-color: transparent !important;
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

.page-header .container {
    padding-top: 30vh;
    color: #FFFFFF;
}
.page-header .title {
    color: #FFFFFF;
}
.page-header {
    height: 80vh;
    background-position: center center;
    background-size: cover;
    margin: 0;
    padding: 0;
    border: 0;
}

.article .section-text {
    padding-bottom: 0;
}

.section, .section-image {
    background-position: center center;
    background-size: cover;
}

.article .section-text p {
    font-size: 1.35em;
    line-height: 1.5em;
    color: #555555;
    margin-bottom: 30px;
}

.article .section-comments .title {
    margin-bottom: 30px;
}

.media-left, .media > .pull-left {
    padding: 10px;
}

.media .avatar-com {
    margin: 0 auto;
    width: 64px;
    height: 64px;
    overflow: hidden;
    border-radius: 50%;
    margin-right: 15px;
    box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
}

.media .avatar-com img {
    width: 100%;
}

.media .media-body {
    padding-right: 10px;
}

.article .media p {
    color: #555555;
}
.media p {
    color: #999999;
    font-size: 16px;
    line-height: 1.6em;
}
.media .media-footer .btn {
    margin-bottom: 20px;
}

.media .media-body .media .media-body {
    padding-right: 0px;
}

.table .td-actions .btn {
    margin: 0px;
    margin-bottom: 5px;
    width: 200px;
    padding-left: 20px;
    padding-right: 20px;
}

.nav-pills.nav-pills-color > li.active > a, .nav-pills.nav-pills-color > li.active > a:focus, .nav-pills.nav-pills-color > li.active > a:hover {
    background-color: <?php echo $styleAsso->asso_couleur; ?> !important;
    box-shadow: 0 16px 26px -10px rgba(10, 10, 10, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(10, 10, 10, 0.2);
}

.img-evenement {
    width: 100%;
    height: auto;
}

.main-evenement {
  padding: 40px;
}

.main-evenement h2.title {
  margin-bottom: 0px;
}

.main-evenement .prix {
    margin: 10px 0 25px;
}

.panel {
    background-color: transparent;
    border: 0 none;
    box-shadow: none;
}

.panel .panel-heading {
    background-color: transparent !important;
    border-bottom: 1px solid #ddd;
    padding: 25px 10px 5px 0px;
}

.panel .panel-heading a {
    color: #3C4858;
}

.panel .panel-heading a:hover, .panel .panel-heading a:focus {
    color: <?php echo $styleAsso->asso_couleur; ?>;
    text-decoration: none;
}

.panel .panel-heading .panel-title {
    font-size: 15px;
    font-weight: bolder;
}

.panel .panel-heading i {
    float: right;
}

.panel .panel-heading a[aria-expanded="true"] .panel-title > i, .panel .panel-heading a.expanded .panel-title > i {
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}

.animation-transition-fast, .navbar, .panel .panel-heading i, .presentation-page .section-cards .card, .index-page .section-cards .card, .product-page .flexi-nav > li a {
    -webkit-transition: all 150ms ease 0s;
    -moz-transition: all 150ms ease 0s;
    -o-transition: all 150ms ease 0s;
    -ms-transition: all 150ms ease 0s;
    transition: all 150ms ease 0s;
}

.panel.panel-default .panel-heading + .panel-collapse .panel-body {
    border: 0 none;
}

.panel .panel-body {
    border: 0 none;
    padding: 15px 0px 5px;
}

.panel-group .panel+.panel {
    margin-top: 5px;
}

.row.text-right{
  margin-right: 0px;
}

.btn-liens {
  z-index: 2;
}

.btn-liens > i {
  font-size: 25px !important;
}

.btn-liens > .material-icons {
  margin-left: -10px;
}
.btn-liens > .fa {
  margin-left: -7px;
}

.btn-liens > i {
  margin-top: -7px;
}

.btn-liens {
  width: 30px;
}

.btn-liens.btn-facebook {
  background-color: #3b5998;
}

.block-liens {
  position: absolute;
  left: 88%;
}

