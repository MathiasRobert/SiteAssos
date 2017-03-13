<?php
if(isset($_SESSION['alerteConnexion']) && $_SESSION['alerteConnexion'] == 'true')
{
  echo '<div class="alert alert-success fade in">
          <div class="container">
            <div class="alert-icon">
              <i class="material-icons">check</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                <i class="material-icons">clear</i>
              </span>
            </button>
            Bienvenue '.$_SESSION['NOM_USER'].'
          </div>
        </div>';
        $_SESSION['alerteConnexion'] = 'false';
}

if(isset($_GET['alerteErreurID']) && $_GET['alerteErreurID'])
{
  echo '<div class="alert alert-danger">
          <div class="container">
            <div class="alert-icon">
              <i class="material-icons">error_outline</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                <i class="material-icons">clear</i>
              </span>
            </button>
            <b>Erreur ID !</b>
          </div>
        </div>';
}
else if(isset($_GET['alerteErreurDomaine']) && $_GET['alerteErreurDomaine'])
{
  echo '<div class="alert alert-danger">
          <div class="container">
            <div class="alert-icon">
              <i class="material-icons">error_outline</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                <i class="material-icons">clear</i>
              </span>
            </button>
            <b>Erreur domaine !</b> Connectez-vous avec votre adresse @ensc.fr !
          </div>
        </div>';
}
else if(isset($_GET['alerteErreur']) && $_GET['alerteErreur'])
{
  echo '<div class="alert alert-danger">
          <div class="container">
            <div class="alert-icon">
              <i class="material-icons">error_outline</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">
                <i class="material-icons">clear</i>
              </span>
            </button>
            <b>Erreur !</b>
          </div>
        </div>';
}
else if(isset($_GET['alerteDeconnexion']) && $_GET['alerteDeconnexion'])
{
  echo '<div class="alert alert-info">
          <div class="container-fluid">
            <div class="alert-icon">
              <i class="material-icons">info_outline</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="material-icons">clear</i></span>
            </button>
            <b>Déconnexion réussi.</b>
          </div>
        </div>';
}
?>
