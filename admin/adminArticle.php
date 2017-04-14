<?php
include('includes/start.php');
if(isset($_GET['id']) && !empty($_GET['id'])){
  $id_article = $_GET['id'];
  include('requetes/requeteArticle.php');
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
                <div class="card-header" data-background-color="purple">
                  <h4 class="title"><?php if(isset($id_article)) echo 'Editer un'; else echo 'Ajouter un'; ?> article</h4>
                </div>
                <div class="card-content">
                  <form id="articleForm" action="requetes/requeteMajArticle.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="picture-container">
                          <div class="picture-event">
                            <img src="../<?php if(isset($infosArticle->arti_photo)) echo $infosArticle->arti_photo; else echo 'images/default-avatar.png'; ?>" class="picture-src" id="wizardPicturePreview" title="">
                            <input name="photo" type="file" id="wizard-picture">
                          </div>
                          <h6>Photo</h6>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group label-floating">
                          <label class="control-label">Titre</label>
                          <input name="titre" type="text" class="form-control" value="<?php if(isset($infosArticle->arti_titre)) echo $infosArticle->arti_titre; ?>" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-5 col-md-6 col-sm-3">
                        <div class="form-group">
                          <label class="control-label">Catégorie</label>
                            <select name="categorie" class="selectpicker" data-style="btn btn-primary btn-round" title="Choisir une catégorie" data-size="7" tabindex="-98" required>
                              <option class="bs-title-option" value="">Choisir une catégorie</option>
                              <?php
                              include('requetes/requeteCategoriesArticle.php');
                              for ($i = 0; $i < count($infosCategories); $i++) {
                                echo '<option value="'.($i+1).'"';
                                if(isset($infosArticle->cate_id) && $infosCategories[$i]->cate_id == $infosArticle->cate_id)
                                  echo 'selected';
                                echo '>'.$infosCategories[$i]->cate_nom.'</option>';
                              }
                              ?>
                            </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating">
                          <label class="control-label">Contenu</label>
                          <textarea name="texte" class="form-control" rows="20"><?php if(isset($infosArticle->arti_texte)) echo $infosArticle->arti_texte; ?></textarea>
                        </div>
                      </div>
                    </div>

                    <input type="submit" class="btn btn-primary pull-right" value=<?php if(isset($id_article)) echo '"Mettre à jour" name="maj"'; else echo '"Ajouter" name="ajouter"'; ?>>
                    <?php
                    if(isset($id_article))
                    {
                      echo '<input type="submit" class="btn btn-danger pull-right" value="Supprimer" name="supprimer">';
                      echo '<input type="hidden" value="'.$id_article.'" name="id" >';
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
