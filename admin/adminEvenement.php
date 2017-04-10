<?php
include('includes/start.php');
if(isset($_GET['id']) && !empty($_GET['id'])){
  $id_evenement = $_GET['id'];
  include('requetes/requeteEvenement.php');
}

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
                <div class="card-header card-header-tabs" data-background-color="purple">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Événement :</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="active">
                            <a href="#editer" data-toggle="tab" aria-expanded="true">
                                <i class="material-icons"><?php if(isset($id_evenement)) echo 'edit</i> Éditer'; else echo 'add</i> Ajouter'; ?>
                                <div class="ripple-container"></div>
                            </a>
                        </li>
                        <?php
                        if(isset($id_evenement))
                          echo '
                            <li class="">
                                <a href="#listeInscrits" data-toggle="tab" aria-expanded="false">
                                    <i class="material-icons">people</i> Liste inscrits
                                    <div class="ripple-container"></div>
                                </a>
                            </li>';
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-content">
                  <div class="tab-content">
                    <div class="tab-pane active" id="editer">
                      <form id="evenementForm" action="requetes/requeteMajEvenement.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="picture-container">
                              <div class="picture-event">
                                <img src="../<?php if(isset($infosEvenement->even_affiche)) echo $infosEvenement->even_affiche; else echo 'images/default-avatar.png'; ?>" class="picture-src" id="wizardPicturePreview" title="">
                                <input name="affiche" type="file" id="wizard-picture">
                              </div>
                              <h6>Affiche</h6>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-8">
                            <div class="form-group label-floating">
                              <label class="control-label">Titre</label>
                              <input name="titre" type="text" class="form-control" value="<?php if(isset($infosEvenement->even_titre)) echo $infosEvenement->even_titre; ?>" required>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group label-floating">
                              <label class="control-label">Lieu</label>
                              <input name="lieu" type="text" class="form-control" value="<?php if(isset($infosEvenement->even_lieu)) echo $infosEvenement->even_lieu; ?>" required>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-8">
                            <div class="form-group label-floating">
                              <label class="control-label">Catégorie</label>
                              <input name="categorie" type="text" class="form-control" value="<?php if(isset($infosEvenement->even_categorie)) echo $infosEvenement->even_categorie; ?>">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group label-floating">
                              <label class="control-label">Prix (€)</label>
                              <input name="prix" type="number" class="form-control" value="<?php if(isset($infosEvenement->even_prix)) echo $infosEvenement->even_prix; ?>" required>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="control-label">Date de début</label>
                              <input name="dateDeb" type="text" class="datepicker form-control" value="<?php if(isset($infosEvenement->even_dateDeb)) echo $infosEvenement->even_dateDeb; ?>" required>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="control-label">Heure de début</label>
                              <input name="heureDeb" type="text" class="timepicker form-control" value="<?php if(isset($infosEvenement->even_heureDeb)) echo $infosEvenement->even_heureDeb; ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="control-label">Date de fin</label>
                              <input name="dateFin" type="text" class="datepicker form-control" value="<?php if(isset($infosEvenement->even_dateFin)) echo $infosEvenement->even_dateFin; ?>">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label class="control-label">Heure de fin</label>
                              <input name="heureFin" type="text" class="timepicker form-control" value="<?php if(isset($infosEvenement->even_heureFin)) echo $infosEvenement->even_heureFin; ?>">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <div class="form-group label-floating">
                                <label class="control-label">Tarifs (consos, etc...)</label>
                                <textarea name="tarifs" class="form-control" rows="3"><?php if(isset($infosEvenement->even_tarifs)) echo $infosEvenement->even_tarifs; ?></textarea>
                              </div>
                              <div class="form-group label-floating">
                                <label class="control-label">Description</label>
                                <textarea name="description" class="form-control" rows="5"><?php if(isset($infosEvenement->even_description)) echo $infosEvenement->even_description; ?></textarea>
                              </div>
                            </div>
                          </div>
                        </div>

                        <input type="submit" class="btn btn-primary pull-right" value=<?php if(isset($id_evenement)) echo '"Mettre à jour" name="maj"'; else echo '"Ajouter" name="ajouter"'; ?>>
                        <?php
                        if(isset($id_evenement))
                        {
                          echo '<input type="submit" class="btn btn-danger pull-right" value="Supprimer" name="supprimer">';
                          echo '<input type="hidden" value="'.$id_evenement.'" name="id" >';
                        }
                        ?>
                        <div class="clearfix"></div>
                      </form>
                    </div>
                    <div class="tab-pane" id="listeInscrits">
                      <div class="table-responsive">
                    <table class="table table-evenements">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Mail</th>
                          <th>A payé</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if($id_evenement) {

                          include('requetes/requeteListeInscrits.php');
                          foreach ($inscrits as $i) {
                            echo '<tr>
                            <td class="td-name">'.$i->util_prenom.' '.$i->util_nom.'</td>
                            <td>'.$i->util_mail.'</td>
                            <td>
                              <div class="checkbox">
                                <label>
                                  <input id="'.$i->util_id.'-'.$id_evenement.'" type="checkbox" class="aPaye"';
                                  if($i->insc_aPaye == 1)
                                    echo 'checked';
                                  echo '>
                                </label>
                              </div>
                              </td>
                            <td class="td-actions text-right">
                              <button id="'.$i->util_id.'-'.$id_evenement.'" type="button" rel="tooltip" class="btn btn-desinscription btn-petit btn-danger btn-round" data-original-title="" title="">
                                <i class="material-icons">close</i>
                                <div class="ripple-container"></div>
                              </button>
                            </td>
                          </tr>';
                          }
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
        </div>
      </div>

      <?php include('includes/footer.php'); ?>

    </div>
  </div>

</body>

<!--   Core JS Files   -->
<script src="../lib/jquery/jquery.min.js" type="text/javascript"></script>
<script src="../lib/jquery/jquery.validate.min.js" type="text/javascript"></script>
<script src="../lib/jquery/additional-methods.min.js" type="text/javascript"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../lib/material-dashboard/js/material.min.js" type="text/javascript"></script>

<script src="../lib/full-calendar/js/moment.min.js" type="text/javascript"></script>
<script src="js/select.js" type="text/javascript"></script>
<script src="js/date-picker.js" type="text/javascript"></script>
<script src="js/admin.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="../lib/material-dashboard/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../lib/material-dashboard/js/bootstrap-notify.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="../lib/material-dashboard/js/material-dashboard.js"></script>

</html>
