<?php
$title="ENSA Khouribga - Supprimer";
include("../Layouts/headstatic.php");
session_start();
  if (isset($_SESSION['email']) && isset($_SESSION['mdp'])&& $_SESSION['type']=="admin") {
?>
<body>
  <!-- TOP BANNER -->
    <div class="col-lg-12">
        <div class="top-banner">
            <div class="col-lg-2">
                <img src="../images/logo-ensak.jpg">
            </div>
            <div class="col-lg-8">
                <h3>Université Hassan 1<sup>er</sup></h3>
                <h4>Ecole Nationale des Sciences Appliquées de Khouribga</h4>
            </div>
            <div class="col-lg-2">
                <img src="../images/logo-uh1.png">
            </div>
        </div>
    </div>
    <!--==============================header=================================-->
      <?php $prof="active";
      include("../Layouts/menuadmin.php");?>

      <!-- banner top -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">AJOUTER UN PROFESSEUR</h1>
            </div>

            <div class="col-lg-4">
              <img src="../images/admin.png">
            </div>

          </div>
        </div>
      </div>
  <div class="container content-center">
    <div class="col-lg-12">
    <?php
        include "../Model/functdb.php";
        include "../Controller/chargerfichier.php";
        var_dump($_FILES);
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['resume']) && !empty($_POST['descriptif']) && !empty($_FILES['photo'])) { 
          $functdb = new functdb();
          $charger=new charger();
          $nom_photo=$charger->addfile($_POST['nom'],$_FILES['photo'],"photo");
          $functdb->addprof($_POST['nom'],$_POST['prenom'],$_POST['resume'],$_POST['descriptif'],$nom_photo);
        }
    ?> 
      <h1 class="title-general">L'ajout du professeur s'est déroulée avec succès</h1>
      <a class="btn btn-valide" href="prof.php">Revenir à la gestion des profs</a>
    </div>
  </div>
  <?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>
</body>
</html>