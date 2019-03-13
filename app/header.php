<header role="banner">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand absolute" href="index.php">Ecole Saint Joseph</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php">Informations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cantine.php">Cantine</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="CE.php">CE</a>
          </li>
        </ul>
        <ul class="navbar-nav absolute-right">
          <?php
          if(isset($_COOKIE['nom'])) { ?>
              <li><a href="user-profile.php">
          <?php
          session_start();
          echo   $_SESSION['nom'] .' ';
          echo   $_SESSION['prenom'];
          ?></a> /
            <a href="traitement/deconnexion.php">Déconnexion</a></li>


                       <?php } elseif(isset($_COOKIE['admin'])) { ?>
                        <li> <a href="admin/index.php" >Panel Admin</a> </li>
                         <li><a href="traitement/deconnexion.php" >Déconnexion</a></li>
                         <?php } else { ?>
            <li><a href="login.php">Se connecter</a> / <a href="register.php">S'inscrire</a>
        </li>
          <?php } ?>
        </ul>

      </div>
    </div>
  </nav>
</header>
<!-- END header -->
