<!-- Navigation -->
<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Assos ENSC</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="avatar-nav">
                    <img src="images/bde.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
                </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <?php include('requetes/requeteNav.php'); ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Les Assos <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <?php
                    foreach ($associationsNav as $a) {
                        echo '<li>
                            <a href="pageAsso.php?asso_id='.$a->asso_id.'">'.$a->asso_diminutif.'</a>
                        </li>';
                    }
                    ?>
                    </ul>
                </li>
                <li>
                    <a href="calendrier.php"><i class="material-icons">event</i> Calendrier</a>
                </li>
                    <?php
                    if(!isset($_SESSION['NOM_USER']))
                        echo '<li><a id="customBtn">Connexion</a></li>';
                    else
                    {
                        echo '<li class="dropdown">
                                <a href="#" class="profile-photo dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><div class="profile-photo-small"><img id="avatar" class="img-circle img-responsive" src="'.$_SESSION['URL_IMAGE_USER'].'" alt="avatar"></div> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                        <li>
                            <a href="utilisateur.php?onglet=informations">Mon compte</a>
                        </li>
                        <li>
                            <a href="utilisateur.php?onglet=evenements">Mes événements</a>
                        </li>
                        <li>
                            <a href="" onClick="signOut(0)">Se déconnecter</a>
                        </li></ul></li>';
                    }
                    if(isset($_SESSION['ASSO_ID'])) {
                        echo '<li><a href="admin/admin.php">Admin</a></li> ';
                    }
                    ?>
            </ul>

            <?php
            include('alertes.php');
            ?>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Modal Core -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="card card-signup">
            <form class="form" method="" action="">
                <div class="header header-primary text-center">
                    <h4>Connexion</h4>
                </div>
                <div class="content">
                    <button class="btn btn-social btn-fill btn-google">
                        <i class="fa fa-google-square"></i> Connexion avec @ensc.fr
                        <div class="ripple-container"></div>
                    </button>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">Email</label>
                            <input type="email" class="form-control">
                            <span class="material-icons form-control-feedback">clear</span>
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock_outline</i>
                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">Mot de passe</label>
                            <input type="password" class="form-control"/>
                        </div>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="optionsCheckboxes" checked>
                            Rester connecté
                        </label>
                    </div>
                </div>
                <div class="footer text-center">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Connexion</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div> -->
