<?php
session_start();

include('includes/connect.php');
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

    <!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
    <div class="main">
        <!-- Page Content -->
        <div class="container">

            <h1>ERREUR !</h1>
            <h2>Page non trouvée</h2>

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
