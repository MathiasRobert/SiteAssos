<?php
session_start();

if(isset($_GET['asso_id']))
    $asso_id = $_GET['asso_id'];
include('includes/connect.php');
include('includes/fonctions.php');
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
  <div class='wrapper'>
    <div class="main">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div id='calendar'></div>
          </div>
        </div>

        <?php
        include('includes/footer.php');
        ?>
      </div>
    </div>
  </div>
</body>
<!--   Core JS Files   -->
<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="lib/material-kit/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="lib/material-kit/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="lib/material-kit/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="lib/material-kit/js/material-kit.js" type="text/javascript"></script>

<script src="js/app.js" type="text/javascript"></script>
</html>
