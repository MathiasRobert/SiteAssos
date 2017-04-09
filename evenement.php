<?php
session_start();

if(isset($_GET['id']))
    $even_id = $_GET['id'];
else
    header('Loaction: pageNonTrouvee.php');
include('includes/connect.php');
include('requetes/requeteEvenement.php');
include('includes/fonctions.php');
$asso_id = $evenement->asso_id;
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
    <div class="main main-raised main-evenement">
        <!-- Page Content -->
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="img-container">
                        <img class="img-evenement img-rounded img-raised" src="<?php if(isset($evenement->even_affiche)) echo $evenement->even_affiche; ?>" alt="affiche">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                        <h2 class="title"> <?php if(isset($evenement->even_titre)) echo $evenement->even_titre; ?> </h2>
                        <h3 class="prix">Prix d'entrée :
                        <?php
                        if(isset($evenement->even_prix) && $evenement->even_prix == 0)
                            echo 'Gratuit';
                        elseif(isset($evenement->even_prix))
                            echo $evenement->even_prix.'€';
                        ?>
                        </h3>
                        <div id="acordeon">
                            <div class="panel-group" id="accordion">
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
                                    <h4 class="panel-title">
                                    Description
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true" style="height: 0px;">
                              <div class="panel-body">
                                <p><?php if(isset($evenement->even_description)) echo $evenement->even_description; ?></p>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-controls="collapseOne" class="collapsed" aria-expanded="false">
                                    <h4 class="panel-title">
                                    Tarifs
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body">
                                <p><?php if(isset($evenement->even_tarifs)) echo $evenement->even_tarifs; ?></p>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-controls="collapseOne" class="collapsed" aria-expanded="false">
                                    <h4 class="panel-title">
                                    Informations pratiques
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
                              <div class="panel-body">
                                <p>
                                    <?php
                                    if(isset($evenement->even_dateDeb))
                                        list($anneeD, $moisD, $jourD) = explode("-", $evenement->even_dateDeb);
                                    if(isset($evenement->even_dateFin))
                                        list($anneeF, $moisF, $jourF) = explode("-", $evenement->even_dateFin);
                                    if(isset($evenement->even_heureDeb))
                                        list($heuresD, $minutesD) = explode(":", $evenement->even_heureDeb);
                                    if(isset($evenement->even_heureFin))
                                        list($heuresF, $minutesF) = explode(":", $evenement->even_heureFin);
                                    ?>
                                    <strong>Lieu</strong> : <?php if(isset($evenement->even_lieu)) echo $evenement->even_lieu; ?><br>
                                    <strong>Début</strong> : <?php
                                            if(isset($evenement->even_dateDeb))
                                                echo $jourD.' '.stringMois($moisD).' '.$anneeD.' - ';
                                            if(isset($evenement->even_heureDeb))
                                                echo $heuresD.'h'.$minutesD;
                                            ?><br>
                                    <strong>Fin</strong> : <?php
                                            if(isset($evenement->even_dateFin))
                                                echo $jourF.' '.stringMois($moisF).' '.$anneeF.' - ';
                                            if(isset($evenement->even_heureFin))
                                                echo $heuresF.'h'.$minutesF;
                                            ?><br>
                                </p>
                              </div>
                            </div>
                          </div>

                        </div>
                        </div><!--  end acordeon -->

                        <div class="row text-right">
                            <?php
                            if(isset($_SESSION['ID_USER']))
                            {
                                $even_id = $evenement->even_id;
                                include('requetes/requeteVerifInscrit.php');
                                if($estInscrit)
                                    echo '<button class="btn btn-success btn-round btn-inscription">Participer &nbsp;<i class="material-icons">done</i></button>';
                                else
                                    echo '<button class="btn btn-danger btn-round btn-inscription">Ne plus participer &nbsp;<i class="material-icons">clear</i></button>';
                            }
                            ?>
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
