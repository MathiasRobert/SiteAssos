<?php
session_start();

if(isset($_SESSION['ID_USER']))
    $util_id = $_SESSION['ID_USER'];
else
    header("Location: index.php");
include('includes/connect.php');
include('requetes/requeteUtilisateur.php');
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

        <!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
        <div class="main main-raised">
            <!-- Page Content -->
            <div class="container">

                <div class="card card-nav-tabs">
                    <div class="header header-primary">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="<?php if(!isset($_GET['onglet']) || ($_GET['onglet'] == 'informations')) echo 'active' ?>">
                                        <a href="#informations" data-toggle="tab">
                                            <i class="material-icons">subject</i>
                                            Mes informations
                                        </a>
                                    </li>
                                    <li class="<?php if(isset($_GET['onglet']) && ($_GET['onglet'] == 'evenements')) echo 'active' ?>">
                                        <a href="#evenements" data-toggle="tab">
                                            <i class="material-icons">event_note</i>
                                            Mes événements
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="tab-content">
                            <div class="tab-pane <?php if(!isset($_GET['onglet']) || ($_GET['onglet'] == 'informations')) echo 'active' ?>" id="informations">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <form action="includes/majInfosUtilisateur.php" method="POST">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="picture-container">
                                                            <div class="picture">
                                                                <img src="<?php echo $_SESSION['URL_IMAGE_USER'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Prénom</label>
                                                            <input type="text" class="form-control" value="<?php if(isset($utilisateur->util_prenom)) echo $utilisateur->util_prenom; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Nom</label>
                                                            <input type="text" class="form-control" value="<?php if(isset($utilisateur->util_nom)) echo $utilisateur->util_nom; ?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Email</label>
                                                            <input type="email" class="form-control" value="<?php if(isset($utilisateur->util_mail)) echo $utilisateur->util_mail; ?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <button type="submit" class="btn btn-primary pull-right">Mettre à jour</button> -->
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane <?php if(isset($_GET['onglet']) && ($_GET['onglet'] == 'evenements')) echo 'active' ?>" id="evenements">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <ul class="nav nav-pills nav-pills-primary">
                                                <li class="active" onclick="tousLesEve()"><a href="#" data-toggle="tab" aria-expanded="true">Tous</a></li>
                                                <li class="" onclick="eveAVenir('<?php date_default_timezone_set('Europe/Paris'); echo date('Y-m-d h:i:s');?>')"><a href="#" data-toggle="tab" aria-expanded="false">A venir</a></li>
                                                <li class="" onclick="evePasse('<?php date_default_timezone_set('Europe/Paris'); echo date('Y-m-d h:i:s');?>')"><a href="#" data-toggle="tab" aria-expanded="false">Passé</a></li>
                                            </ul>
                                            <div class="table-responsive">
                                                <table class="table table-evenements">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center"></th>
                                                            <th>Événement</th>
                                                            <th class="text-center">Date</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    include('requetes/requeteEvenementsUtilisateur.php');


                                                    foreach ($evenements as $e) {

                                                        $even_id = $e->even_id;

                                                        list($annee, $mois, $jour) = explode("-", $e->even_dateDeb);
                                                        list($heuresD, $minutesD) = explode(":", $e->even_heureDeb);
                                                        list($heuresF, $minutesF) = explode(":", $e->even_heureFin);
                                                        echo '<tr id="'.$e->even_id.'" data-date="'.$e->even_dateDeb.' '.$e->even_heureDeb.'">
                                                            <td>
                                                                <div class="img-container">
                                                                    <img src="'.$e->even_affiche.'" alt="affiche">
                                                                </div>
                                                            </td>
                                                            <td class="td-name">
                                                                <a href="evenement.php?id='.$e->even_id.'">'.$e->even_titre.'</a>
                                                                <br><small>'.$e->even_lieu.'</small>
                                                            </td>
                                                            <td class="td-number">
                                                                '.$jour.' '.stringMois($mois).' '.$annee.'
                                                                <br><small>'.$heuresD.'h'.$minutesD.' à '.$heuresF.'h'.$minutesF.'</small>
                                                            </td>
                                                            <td class="td-actions text-right">
                                                                <div class="btn-group-lg btn-group-vertical">

                                                                <a href="evenement.php?id='.$e->even_id.'" role="button" class="btn btn-primary btn-block">
                                                                    En savoir plus <i class="material-icons">info</i>
                                                                </a>';

                                                                if($_SESSION['ID_USER'])
                                                                {
                                                                    include('requetes/requeteVerifInscrit.php');

                                                                    echo '<a id="'.$e->even_id.'" role="button" class="btn-inscription btn ';
                                                                    if($estInscrit)
                                                                        echo 'btn-danger';
                                                                    else
                                                                        echo 'btn-success';
                                                                    echo ' btn-block">';
                                                                    if($estInscrit)
                                                                        echo 'Ne plus participer  &nbsp;';
                                                                    else
                                                                        echo 'Participer  &nbsp;';
                                                                    echo '<i class="material-icons">';
                                                                    if($estInscrit)
                                                                        echo 'clear';
                                                                    else
                                                                        echo 'done';
                                                                    echo '</i>
                                                                    <div class="ripple-container"></div>
                                                                </a>';
                                                                }
                                                                echo '</div>
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

<script src="js/app.js" type="text/javascript"></script>


</html>
