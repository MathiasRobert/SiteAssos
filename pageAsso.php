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
                                        <a href="#contact" data-toggle="tab">
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
                                                            <div class="img img-raised" style="background-image:url('.$a->arti_photo.')"></div>
                                                            <div class="ripple-container"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h6 class="category text-info">'.$a->cate_nom.'</h6>
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
                        <div class="tab-pane" id="contact">

                            <div class="content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-contact card-raised">
                                            <form role="form" id="contact-form" method="post">
                                                <div class="header header-raised text-center">
                                                    <h4 class="card-title">Par Email</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Nom Prénom</label>
                                                            <input type="text" name="name" class="form-control">
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Email</label>
                                                            <input type="email" name="email" class="form-control">
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Votre message</label>
                                                    <textarea name="message" class="form-control" id="message" rows="8"></textarea>
                                                    <span class="material-input"></span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn pull-right">Envoyer</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- <div class="info info-horizontal">
                                            <div class="icon">
                                                <i class="material-icons">pin_drop</i>
                                            </div>
                                            <div class="description">
                                                <h5 class="info-title">Find us at the office</h5>
                                                <p> Bld Mihail Kogalniceanu, nr. 8,<br>
                                                    7652 Bucharest,<br>
                                                    Romania
                                                </p>
                                            </div>
                                        </div> -->
                                        <iframe width="100%" height="50%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=ensc&key=AIzaSyDfrPJouGTqI-bxkH5S7dqrhzHHXfdJOx4" allowfullscreen></iframe>
                                    </div>
                                </div>


                            </div>
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
