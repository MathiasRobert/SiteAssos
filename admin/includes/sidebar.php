<div class="sidebar" data-color="purple">
  <div class="logo simple-text">
    <a href="admin.php" class="simple-text">
      <?php if(isset($infosAsso->asso_diminutif)) echo $infosAsso->asso_diminutif; ?>
    </a>
  </div>

  <div class="sidebar-wrapper">
    <ul class="nav">
      <li<?php $page = explode('/', $_SERVER['PHP_SELF']); if(end($page) == "admin.php") echo ' class="active"'; ?>>
        <a href="admin.php">
          <i class="material-icons">dashboard</i>
          <p>Asso</p>
        </a>
      </li>
      <li<?php $page = explode('/', $_SERVER['PHP_SELF']); if(end($page) == "listeArticles.php" || end($page) == "adminArticle.php") echo ' class="active"'; ?>>
        <a href="listeArticles.php">
          <i class="material-icons">subject</i>
          <p>Articles</p>
        </a>
      </li>
      <li<?php $page = explode('/', $_SERVER['PHP_SELF']); if(end($page) == "listeEvenements.php" || end($page) == "adminEvenement.php") echo ' class="active"'; ?>>
        <a href="listeEvenements.php">
          <i class="material-icons">event_note</i>
          <p>Evenements</p>
        </a>
      </li>
      <li<?php $page = explode('/', $_SERVER['PHP_SELF']); if(end($page) == "listeEquipe.php" || end($page) == "adminEquipe.php") echo ' class="active"'; ?>>
        <a href="listeEquipe.php">
          <i class="material-icons">supervisor_account</i>
          <p>Equipe</p>
        </a>
      </li>
    </ul>
  </div>
</div>
