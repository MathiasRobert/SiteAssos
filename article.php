<?php
session_start();

if(isset($_GET['id']))
    $arti_id = $_GET['id'];
else
    header('Location: pageNonTrouvee.php');
include('includes/connect.php');
include('requetes/requeteArticle.php');
include('includes/fonctions.php');
$asso_id = $article->asso_id;
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
        <img src="images/bde.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
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
                                <h3 class="title text-center">3 Comments</h3>
                                <div class="media">
                                    <a class="pull-left" href="#pablo">
                                        <div class="avatar-com">
                                            <img class="media-object" src="images/bde.jpg" alt="...">
                                        </div>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Tina Andrew <small>· 7 minutes ago</small></h4>
                                        <h6 class="text-muted"></h6>

                                        <p>Chance too good. God level bars. I'm so proud of @LifeOfDesiigner #1 song in the country. Panda! Don't be scared of the truth because we need to restart the human foundation in truth I stand with the most humility. We are so blessed!</p>
                                    </div>
                                </div>

                                <div class="media">
                                  <a class="pull-left" href="#pablo">
                                      <div class="avatar-com">
                                         <img class="media-object" alt="Tim Picture" src="images/bda.png">
                                      </div>
                                  </a>
                                  <div class="media-body">
                                     <h4 class="media-heading">John Camber <small>· Yesterday</small></h4>

                                     <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                     <p> Don't forget, You're Awesome!</p>

                                  </div>
                                </div>

                            </div>
                            <h3 class="title text-center">Post your comment</h3>
                            <div class="media media-post">
                                <a class="pull-left author" href="#pablo">
                                    <div class="avatar">
                                        <img class="media-object" alt="64x64" src="images/bde.jpg">
                                    </div>
                                </a>
                                <div class="media-body">
                                    <div class="form-group is-empty"><textarea class="form-control" placeholder="Write some nice stuff or nothing..." rows="6"></textarea><span class="material-input"></span></div>
                                    <div class="media-footer">
                                        <a href="#pablo" class="btn btn-round btn-wd pull-right">Post Comment</a>
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

<script src="js/appPageAsso.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>


</html>
