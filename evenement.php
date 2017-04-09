<?php
session_start();

if(isset($_GET['id']))
    $even_id = $_GET['id'];
else
    header('Loaction: pageNonTrouvee.php');
include('includes/connect.php');
include('requetes/requeteEvenement.php');
include('includes/fonctions.php');
$asso_id = $evenement->asso_id;
?>

<!DOCTYPE html>
<html lang="fr">

<?php
include('includes/head.php');
?>

<body>

<?php
include('includes/nav.php');
?>

<div class="wrapper">

    <div class="header header-filter" style="background-image: url('lib/material-kit/img/examples/city.jpg');"></div>

    <div class="avatar">
        <img src="images/bde.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
    </div>

    <!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
    <div class="main main-raised">
        <!-- Page Content -->
        <div class="container">

<?php
     $titre=$evenement->even_titre;
     $lieu=$evenement->even_lieu;
     $theme=$evenement->even_theme;
     $dateDeb=$evenement->even_dateDeb;
     $heureDeb=$evenement->even_heureDeb;
     $dateFin=$evenement->even_dateFin;
     $heureFin=$evenement->even_heureFin;
     $prix=$evenement->even_prix;
     $tarifs=$evenement->even_tarifs;
     $nbMax=$evenement->even_nbParticipantsMax;
     $affiche=$evenement->even_affiche;
?>











            <?php
            include('includes/footer.php');
            ?>

        </div>
        <!-- /.container -->
    </div>
</div>



</body>


<!--   Core JS Files   -->
<script src="lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="lib/material-kit/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="lib/material-kit/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="lib/material-kit/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="lib/material-kit/js/material-kit.js" type="text/javascript"></script>

<script src="js/appPageAsso.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>


</html>
