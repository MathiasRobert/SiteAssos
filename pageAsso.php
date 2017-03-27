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

    <div class="wrapper">

        <div class="header header-filter" style="background-image: url('lib/material-kit/img/examples/city.jpg');"></div>

        <div class="avatar">
            <img src="images/bde.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
        </div>

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
                                    <li class="pull-right">
                                        <a href="#infos" data-toggle="tab">
                                            <i class="material-icons">supervisor_account</i>
                                            Informations
                                        </a>

                                    </li>
                                    <li class="pull-right">
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
                                            <?php
                                            include('includes/requeteArticlesAsso.php');

                                            foreach ($articles as $a) {

                                                echo '<div class="card card-plain card-blog">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="card-image">
                                                            <div class="img-article img-raised" style="background-image:url('.$a->arti_photo.')"></div>
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
                            <div class="col-md-10 col-md-offset-1">
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
                                        include('includes/requeteEvenementsAsso.php');

                                        foreach ($evenements as $e) {

                                            list($annee, $mois, $jour) = explode("-", $e->even_date);
                                            list($heuresD, $minutesD) = explode(":", $e->even_heureDeb);
                                            list($heuresF, $minutesF) = explode(":", $e->even_heureFin);
                                            echo '<tr>
                                                <td>
                                                    <div class="img-container">
                                                        <img src="'.$e->even_affiche.'" alt="affiche">
                                                    </div>
                                                </td>
                                                <td class="td-name">
                                                    <a href="#jacket">'.$e->even_titre.'</a>
                                                    <br><small>'.$e->even_lieu.'</small>
                                                </td>
                                                <td class="td-number">
                                                    '.$jour.' '.stringMois($mois).' '.$annee.'
                                                    <br><small>'.$heuresD.'h'.$minutesD.' à '.$heuresF.'h'.$minutesF.'</small>
                                                </td>
                                                <td class="td-actions">
                                                    <a href="evenement.php?id='.$e->even_id.'" role="button" class="btn">
                                                        En savoir plus
                                                    </a>
                                                </td>
                                            </tr>';
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <!-- <svg width="40" height="500">
                              <g>
                                <line x1="50%" y1="60%" x2="50%" y2="70%"></line>
                                <circle cx="50%" cy="70%" r="0.75em"></circle>
                            </g>
                            <g>
                                <line x1="50%" y1="50%" x2="50%" y2="60%"></line>
                                <circle cx="50%" cy="60%" r="0.75em"></circle>
                            </g>
                            <g>
                                <line x1="50%" y1="40%" x2="50%" y2="50%"></line>
                                <circle cx="50%" cy="50%" r="0.75em"></circle>
                            </g>
                            <g>
                                <line x1="50%" y1="30%" x2="50%" y2="40%"></line>
                                <circle cx="50%" cy="40%" r="0.75em"></circle>
                            </g>
                            <g class="active">
                                <line x1="50%" y1="20%" x2="50%" y2="30%"></line>
                                <circle cx="50%" cy="30%" r="0.75em"></circle>
                            </g>
                            <g>
                                <line x1="50%" y1="10%" x2="50%" y2="20%"></line>
                                <circle cx="50%" cy="20%" r="0.75em"></circle>
                            </g>
                            <g>
                                <circle cx="50%" cy="10%" r="0.75em"></circle>
                            </g>
                        </svg> -->
                        </div>
                        <div class="tab-pane" id="infos">
                        <div class="infos-asso">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center">
                                        <h2 class="title">L'équipe</h2>
                                        <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                                    </div>
                                </div>

                                <div class="row">
                        <?php
                        include('includes/requeteInfosAsso.php');

                        foreach ($membresAsso as $m) {
                        echo '
                                    <div class="col-md-3">
                                        <div class="card card-profile card-plain">
                                            <div class="card-avatar">
                                            <a href="#">
                                                    <img class="img" src="'.$m->equi_photo.'">
                                                </a>
                                            </div>

                                            <div class="content">
                                                <h4 class="card-title">'.$m->equi_prenom.' '.$m->equi_nom.'</h4>
                                                <h6 class="category text-muted">'.$m->equi_poste.'</h6>

                                                <p class="card-description">
                                                    And I love you like Kanye loves Kanye. We need to restart the human foundation.
                                                </p>
                                                <div class="footer">
                                                    <a href="#" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                                    <a class="btn btn-just-icon btn-simple btn-google" data-toggle="popover" data-placement="top" data-content="'.$m->equi_mail.'"><i class="fa fa-envelope"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                        }
                        ?>
                        </div>
                            </div>
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
                                                        <div class="form-group label-floating <?php if(!isset($_SESSION['NOM_USER'])) echo "is-empty";?>">
                                                            <label class="control-label">Nom Prénom</label>
                                                            <input type="text" name="name" class="form-control" value="<?php if(isset($_SESSION['NOM_USER'])) echo $_SESSION['NOM_USER'];?>">
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating <?php if(!isset($_SESSION['EMAIL_USER'])) echo "is-empty";?>">
                                                            <label class="control-label">Email</label>
                                                            <input type="email" name="email" class="form-control" value="<?php if(isset($_SESSION['EMAIL_USER'])) echo $_SESSION['EMAIL_USER'];?>">
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
                                        <iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=ensc&key=AIzaSyDfrPJouGTqI-bxkH5S7dqrhzHHXfdJOx4" allowfullscreen></iframe>
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
