<nav class="navbar navbar-transparent navbar-absolute">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
      <?php
      $page = explode('/', $_SERVER['PHP_SELF']);
      switch (end($page)) {
        case 'admin.php':
          echo 'Informations générales';
          break;
        case 'listeArticles.php':
          echo 'Liste des articles';
          break;
        case 'listeEvenements.php':
          echo 'Liste des événements';
          break;
        case 'listeEquipe.php':
          echo 'Composition du bureau';
          break;
        case 'adminArticle.php':
          echo 'Gestion des articles';
          break;
        case 'adminEvenement.php':
          echo 'Gestion des événements';
          break;
        case 'adminEquipe.php':
          echo 'Gestion des membres du bureau';
          break;
        default:
          # code...
          break;
      }
      ?>
      </a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="../index.php">
            <i class="material-icons">dashboard</i>
            <p class="hidden-lg hidden-md">Assos ENSC</p>
          </a>
        </li>
        <li>
          <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
            <i class="material-icons">person</i>
            <p class="hidden-lg hidden-md">Mon compte</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
