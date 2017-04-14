<?php
session_start();

if(isset($_GET['id']))
    $arti_id = $_GET['id'];
else
    header('Location: pageNonTrouvee.php');
include('includes/connect.php');
include('requetes/requeteArticle.php');
include('includes/fonctions.php');
if($article)
    $asso_id = $article->asso_id;
else
    header('Location: pageNonTrouvee.php');
?>

<!DOCTYPE html>
<html lang="fr">

<?php
include('includes/head.php');
?>

<body class="article">

    <?php
    include('includes/nav.php');
    ?>

    <div class="wrapper">

    <div class="page-header header-filter" data-parallax="active" style='background-image: url("<?php if(isset($article->arti_photo)) echo $article->arti_photo; ?>"); transform: translate3d(0px, 0px, 0px);'>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h1 class="title"><?php if(isset($article->arti_titre)) echo $article->arti_titre; ?></h1>
                    <h4><i><?php if(isset($article->cate_nom)) echo $article->cate_nom; ?></i></h4>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="avatar">
        <img alt="Circle Image" class="img-circle img-responsive img-raised">
    </div>

    <!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
    <div class="main main-raised">
        <!-- Page Content -->
        <div class="container">

            <div class="section section-text">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p>
                        <?php if(isset($article->arti_texte)) {
                            $texte = wordwrap($article->arti_texte, 90, "&shy;<br>", true);
                            echo $texte;
                            }?>
                        </p>
                        <p class="pull-right">
                        Écrit le
                        <?php if(isset($article->arti_dateHeure)) echo $article->arti_dateHeure; ?>
                        </p>
                    </div>

                </div>
            </div>

                <div class="section section-comments">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="media-area">
                                <?php include('requetes/requeteCommentaires.php') ?>
                                <h3 class="title text-center"><?= $stmt->rowCount() ?> Commentaires</h3>
                                <?php foreach ($commentaires as $c) { ?>
                                <div class="media">
                                    <a class="pull-left" href="#pablo">
                                        <div class="avatar-com">
                                            <img class="media-object" src="<?= $c->util_url_image ?>" alt="...">
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?= $c->util_prenom.''.$c->util_nom ?><small>· <?= $c->comm_dateHeure ?></small></h4>
                                        <h6 class="text-muted"></h6>

                                        <p><?= $c->comm_texte ?></p>
                                    </div>
                                </div>
                                <?php } ?>

                            </div>
                            <h3 class="title text-center">Poster votre commentaire</h3>
                            <div class="media media-post">
                                <a class="pull-left author">
                                    <div class="avatar">
                                        <img class="media-object" alt="64x64" src="<?= $_SESSION['URL_IMAGE_USER'] ?>">
                                    </div>
                                </a>
                                <div class="media-body">
                                    <div class="form-group is-empty"><textarea class="form-control" placeholder="Votre commentaire" rows="6"></textarea><span class="material-input"></span></div>
                                    <div class="media-footer">
                                        <a href="#pablo" class="btn btn-round btn-wd pull-right">Poster</a>
                                    </div>
                                </div>
                            </div> <!-- end media-post -->
                        </div>
                    </div>
                </div>

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

<script src="lib/moment/moment.min.js" type="text/javascript"></script>


<script src="js/appPageAsso.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>


</html>
