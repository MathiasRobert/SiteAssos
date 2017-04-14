<?php
include('includes/start.php');
if(isset($_GET['id']) && !empty($_GET['id'])){
  $id_membre = $_GET['id'];
  include('requetes/requeteEquipe.php');
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
            <div class="col-md-8">
              <div class="card">
                <div class="card-header" data-background-color="purple">
                  <h4 class="title"><?php if(isset($id_membre)) echo 'Editer un'; else echo 'Ajouter un'; ?> membre</h4>
                </div>
                <div class="card-content">
                  <form id="equipeForm" action="requetes/requeteMajEquipe.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="picture-container">
                          <div class="picture">
                            <img src="../<?php if(isset($infosMembre->equi_photo)) echo $infosMembre->equi_photo; else echo 'images/default-avatar.png'; ?>" class="picture-src" id="wizardPicturePreview" title="">
                            <input name="photo" type="file" id="wizard-picture">
                          </div>
                          <h6>Photo</h6>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group label-floating">
                          <label class="control-label">Prénom</label>
                          <input name="prenom" type="text" class="form-control" value="<?php if(isset($infosMembre->equi_prenom)) echo $infosMembre->equi_prenom; ?>" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group label-floating">
                          <label class="control-label">Nom</label>
                          <input name="nom" type="text" class="form-control" value="<?php if(isset($infosMembre->equi_nom)) echo $infosMembre->equi_nom; ?>" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group label-floating">
                          <label class="control-label">Surnom</label>
                          <input name="surnom" type="text" class="form-control" value="<?php if(isset($infosMembre->equi_surnom)) echo $infosMembre->equi_surnom; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group label-floating">
                          <label class="control-label">Email</label>
                          <input name="mail" type="email" class="form-control" value="<?php if(isset($infosMembre->equi_mail)) echo $infosMembre->equi_mail; ?>" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Lien facebook</label>
                          <input name="facebook" type="url" class="form-control" value="<?php if(isset($infosMembre->equi_lien_facebook)) echo $infosMembre->equi_lien_facebook; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group label-floating">
                          <label class="control-label">Poste</label>
                          <input name="poste" type="text" class="form-control" value="<?php if(isset($infosMembre->equi_poste)) echo $infosMembre->equi_poste; ?>" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Description (150 caractères max)</label>
                          <textarea name="description" class="form-control" rows="2"><?php if(isset($infosMembre->equi_description)) echo $infosMembre->equi_description; ?></textarea>
                        </div>
                      </div>
                    </div>

                    <input type="submit" class="btn btn-primary pull-right" value=<?php if(isset($id_membre)) echo '"Mettre à jour" name="maj"'; else echo '"Ajouter" name="ajouter"'; ?>>
                    <?php
                    if(isset($id_membre))
                    {
                      echo '<input type="submit" class="btn btn-danger pull-right" value="Supprimer" name="supprimer">';
                      echo '<input type="hidden" value="'.$id_membre.'" name="id" >';
                    }
                    ?>
                    <div class="clearfix"></div>
                  </form>
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
