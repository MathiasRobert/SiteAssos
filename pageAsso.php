<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Assos ENSC</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="material-kit/css/bootstrap.min.css" rel="stylesheet" />
    <link href="material-kit/css/material-kit.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/pageAsso.css" rel="stylesheet"/>

    <script src="https://apis.google.com/js/platform.js"></script>
    <script src="https://apis.google.com/js/api:client.js"></script>
    <script src="js/init.js" type="text/javascript" charset="utf-8"></script>

</head>

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
                    <div class="header header-primary">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab">
                                            <i class="material-icons">subject</i>
                                            Articles
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#messages" data-toggle="tab">
                                            <i class="material-icons">event_note</i>
                                            Evènements
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings" data-toggle="tab">
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
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="profile">
                                <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                            </div>
                            <div class="tab-pane" id="messages">
                                <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                            </div>
                            <div class="tab-pane" id="settings">
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
