<?php
include('includes/start.php');
?>
<!doctype html>
<html lang="fr">
<head>
  <?php include('includes/head.php'); ?>
</head>

<body>

  <div class="wrapper">

    <?php include('includes/sidebar.php'); ?>

    <div class="main-panel">

      <?php include('includes/nav.php'); ?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header" data-background-color="purple">
                  <h4 class="title">Tous les événements
                    <a href="adminEvenement.php" class="pull-right btn btn-primary" >
                      <i class="material-icons">add_circle</i>
                      Ajouter un événement
                    </a>
                  </h4>
                </div>
                <div class="card-content table-responsive">
                  <div class="table-responsive">
                    <table class="table table-evenements">
                      <thead>
                        <tr>
                          <th class="text-center"></th>
                          <th>Évenement</th>
                          <th class="text-center">Date</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include('../requetes/requeteEvenementsAsso.php');

                        foreach ($evenements as $e) {

                          list($annee, $mois, $jour) = explode("-", $e->even_dateDeb);
                          list($heuresD, $minutesD) = explode(":", $e->even_heureDeb);
                          list($heuresF, $minutesF) = explode(":", $e->even_heureFin);
                          echo '<tr>
                          <td>
                            <div class="img-container">
                              <img src="../'.$e->even_affiche.'" alt="affiche">
                            </div>
                          </td>
                          <td class="td-name">
                            <a href="adminEvenement.php?id='.$e->even_id.'">'.$e->even_titre.'</a>
                            <br><small>'.$e->even_lieu.'</small>
                          </td>
                          <td class="td-number">
                            '.$jour.' '.stringMois($mois).' '.$annee.'
                            <br><small>'.$heuresD.'h'.$minutesD.' à '.$heuresF.'h'.$minutesF.'</small>
                          </td>
                          <td class="td-actions">
                            <a href="adminEvenement.php?id='.$e->even_id.'" role="button" class="btn btn-primary">
                              Détails
                            </a>
                          </td>
                        </tr>';
                      }
                      ?>
                    </tbody>
                  </table>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include('includes/footer.php'); ?>

    </div>
  </div>

</body>

<!--   Core JS Files   -->
<script src="../lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../lib/material-dashboard/js/material.min.js" type="text/javascript"></script>

<script src="../js/admin.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="../lib/material-dashboard/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../lib/material-dashboard/js/bootstrap-notify.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="../lib/material-dashboard/js/material-dashboard.js"></script>


</html>
