<?php
session_start();

echo ini_get('display_errors');

if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}

echo ini_get('display_errors');

if(isset($_GET['asso_id']))
    $asso_id = $_GET['asso_id'];
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

        <div class="header header-filter" style="background-image: url('material-kit/img/examples/city.jpg');"></div>

        <!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
        <div class="main main-raised">
            <!-- Page Content -->
            <div class="container">

                <div class="card card-nav-tabs">
                    <div class="header">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="active">
                                        <a href="#articles" data-toggle="tab">
                                            <i class="material-icons">subject</i>
                                            Articles
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#evenements" data-toggle="tab">
                                            <i class="material-icons">event_note</i>
                                            Evènements
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#infos" data-toggle="tab">
                                            <i class="material-icons">supervisor_account</i>
                                            Informations
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#settings" data-toggle="tab">
                                            <i class="material-icons">email</i>
                                            Contact
                                        </a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="tab-content">
                            <div class="tab-pane active" id="articles">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <br>
                                            <?php
                                            include('includes/requeteArticlesAssos.php');

                                            foreach ($articles as $a) {

                                                //$texteCourt = substr($a->arti_texte, 0, 250);
                                                echo '<div class="card card-plain card-blog">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="card-image">
                                                            <img class="img img-raised" src="'.$a->arti_photo.'">
                                                            <div class="ripple-container"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h6 class="category text-info">Enterprise</h6>
                                                        <h3 class="card-title">
                                                            <a href="#pablo">'.$a->arti_titre.'</a>
                                                        </h3>
                                                        <p class="card-description">'.$a->texteCourt.'… <a href="#pablo"> Lire Plus </a></p>
                                                        <p class="author">
                                                            by <a href="#pablo"><b>Mike Butcher</b></a>, '.$a->arti_dateHeure.'
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                        ?>
                                        <div class="card card-plain card-blog">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card-image">
                                                        <img class="img img-raised" src="images/card-blog4.jpg">
                                                        <div class="ripple-container"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="category text-info">Enterprise</h6>
                                                    <h3 class="card-title">
                                                        <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                                                    </h3>
                                                    <p class="card-description">
                                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Yet its own business model disruption is only part of the story — and… <a href="#pablo"> Read More </a>
                                                    </p>
                                                    <p class="author">
                                                        by <a href="#pablo"><b>Mike Butcher</b></a>, 2 days ago

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="evenements">
                            <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                        </div>
                        <div class="tab-pane" id="infos">
                            <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                        </div>
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
