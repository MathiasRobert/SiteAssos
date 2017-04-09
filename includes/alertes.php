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

if(isset($_SESSION['alerteErreurID']) && $_SESSION['alerteErreurID'] == "true")
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
        $_SESSION['alerteErreurID'] = 'false';
}
else if(isset($_SESSION['alerteErreurDomaine']) && $_SESSION['alerteErreurDomaine'] == "true")
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
        $_SESSION['alerteErreurDomaine'] = 'false';
}
else if(isset($_SESSION['alerteErreur']) && $_SESSION['alerteErreur'] == "true")
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
        $_SESSION['alerteErreur'] = 'false';
}
else if(isset($_SESSION['alerteDeconnexion']) && $_SESSION['alerteDeconnexion'] == "true")
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
        $_SESSION['alerteDeconnexion'] = 'false';
}
if(isset($_SESSION['alerteAcces']) && $_SESSION['alerteAcces'] == "true")
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
            <b>Accés refusé !</b>
          </div>
        </div>';
  $_SESSION['alerteAcces'] = 'false';
}
?>
