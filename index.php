<?php
session_start();


echo ini_get('display_errors');

if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}

echo ini_get('display_errors');

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
            <!-- Carousel Card -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                        <div class="page-header page-header-carousel" style="background-image: url('material-kit/img/bg2.jpeg');">
                            <div class="carousel-caption">
                                <h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
                            </div></div>
                        </div>
                        <div class="item">
                        <div class="page-header page-header-carousel" style="background-image: url('material-kit/img/bg3.jpeg');">
                            <div class="carousel-caption">
                                <h4><i class="material-icons">location_on</i> Somewhere Beyond, United States</h4>
                            </div></div>
                        </div>
                        <div class="item">
                        <div class="page-header page-header-carousel" style="background-image: url('material-kit/img/bg4.jpeg');">
                            <div class="carousel-caption">
                                <h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
                            </div></div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <i class="material-icons">keyboard_arrow_left</i>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <i class="material-icons">keyboard_arrow_right</i>
                    </a>
                </div>
            </div>
            <!-- End Carousel Card -->
        <!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
        <div class="main">
            <!-- Page Content -->
            <div class="container">

                <div class="row">
                <div class="col-lg-12">
                        <h1 class="page-header">
                            Bienvenue sur le site des assos de l'ENSC !
                        </h1>
                    </div>
                    <div class="col-sm-8">

                    <?php
                    include('includes/requeteIndex.php');

                    foreach ($associations as $a) {
                        echo '<div class="col-sm-6 col-md-4">
                                <div class="thumbnail thumbnail-assos" style="border-color: '.$a->asso_couleur.'">
                                    <img src="'.$a->asso_logo.'" alt="logo'.$a->asso_diminutif.'" class="img-rounded img-responsive img-thumbnail-assos">
                                    <div class="caption">
                                        <h3>'.$a->asso_diminutif.' - '.$a->asso_nom.'</h3>
                                            <p>'.$a->asso_description_court.'</p>
                                            <p class="text-right"><a href="pageAsso.php?asso_id='.$a->asso_id.'" class="btn" role="button" style="background-color: '.$a->asso_couleur.'">En savoir plus</a></p>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>


                    <!-- <div class="col-sm-6 col-md-4">
                        <div class="thumbnail thumbnail-assos" style="border-color: #95181a">
                            <img src="images/bde.jpg" alt="logoBDE" class="img-rounded img-responsive img-thumbnail-assos">
                            <div class="caption">
                                <h3>BDE - Bureau des élèves</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at </p>
                                <p class="text-right"><a href="pageAsso.php?asso=bde" class="btn bde" role="button">En savoir plus</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail thumbnail-assos" style="border-color: #051e1e">
                            <img src="images/bds.png" alt="logoBDS" class="img-rounded img-responsive img-thumbnail-assos">
                            <div class="caption">
                                <h3>BDS - Bureau des sports</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at </p>
                                <p class="text-right"><a href="#" class="btn bds" role="button">En savoir plus</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail thumbnail-assos" style="border-color: #64b44b">
                            <img src="images/bda.png" alt="logoBDA" class="img-rounded img-responsive img-thumbnail-assos">
                            <div class="caption">
                                <h3>BDE - Bureau des arts</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at </p>
                                <p class="text-right"><a href="#" class="btn bda" role="button">En savoir plus</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail thumbnail-assos" style="border-color: #009EE0">
                            <img src="images/je.png" alt="logoJE" class="img-rounded img-responsive img-thumbnail-assos">
                            <div class="caption">
                                <h3>JE - Junior entreprise</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at </p>
                                <p class="text-right"><a href="#" class="btn je" role="button">En savoir plus</a></p>
                            </div>
                        </div>
                    </div>
                    </div> -->
                    <div class="col-sm-3 offset-sm-1">
                        <iframe id="fb-integre" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Flpm2017%2F&tabs=timeline%2C%20events&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=1516751638566181" width="340" height="500" style="overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                </div>
                <!-- /.row -->

                <?php
                include('includes/footer.php');
                ?>

            </div>
            <!-- /.container -->
        </div>
    </div>



</body>

<script src="js/connexion.js" type="text/javascript"></script>

<!--   Core JS Files   -->
<script src="material-kit/js/jquery.min.js" type="text/javascript"></script>
<script src="material-kit/js/bootstrap.min.js" type="text/javascript"></script>
<script src="material-kit/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="material-kit/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="material-kit/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="material-kit/js/material-kit.js" type="text/javascript"></script>

</html>
