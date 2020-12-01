<?php 
session_start();
?>

<header>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: rgba(29, 26, 26, 0.493);" id="header">
<a class="navbar-brand" href="http://localhost/PP2/module-connexion/index.php">
    <img src="http://localhost/PP2/module-connexion/media/lapin_logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    Save a Little Bunny
  </a>
  <button class="navbar-toggler navbar-toggler-dark" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
    <div class="navbar-nav ">
      <a class="nav-link" href="#">Nos objectifs</a>
      <a class="nav-link" href="#">Nos profils</a>
      <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Ils parlent de nous</a>
    </div>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">

      <?php 

      if (isset($_SESSION['id'])) {

        if ($_SESSION['id']>1) {
         
        echo' <a class="nav-link" href="http://localhost/PP2/module-connexion/pages/profil.php"><span class="fas fa-user"></span> Profil </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="?link=1" name="deconnect"><span class="fas fa-sign-in-alt"></span> Deconnexion </a>';
            }
        
        else {
          echo' <a class="nav-link" href="http://localhost/PP2/module-connexion/pages/profil.php"><span class="fas fa-user"></span> Profil </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="http://localhost/PP2/module-connexion/pages/admin.php" name="deconnect"><span class="fa fa-wrench"></span> Administration </a>
                <li class="nav-item">
                <a class="nav-link" href="?link=1" name="deconnect"><span class="fa fa-sign-out"></span> Deconnexion </a>';
        }
      }

      else {

        echo '<a class="nav-link" href="http://localhost/PP2/module-connexion/pages/inscription.php"><span class="fas fa-user"></span> Inscription </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="http://localhost/PP2/module-connexion/pages/connexion.php"><span class="fas fa-sign-in-alt"></span> Connexion </a>';

      }
      ?>

      </li>
    </ul>
  </div>
</nav> 
</header>



<?php 

if (isset($_GET['link'])) {
   if ($_GET['link'] == '1') {
     if ($repere == NULL) {
     session_destroy();
     header('Location:../index.php');
     exit();
     }
     else {
      session_destroy();
      header('Location:index.php');
      exit();
     }
   }
}

?>
