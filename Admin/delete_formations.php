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
                <h3>Universite Hassan 1<sup>er</sup></h3>
                <h4>Ecole Nationale des Sciences Appliquées de Khouribga</h4>
            </div>
            <div class="col-lg-2">
                <img src="../images/logo-uh1.png">
            </div>
        </div>
    </div>
    <!--==============================header=================================-->
      <?php $administrateur2="active";
      include("../Layouts/menuadmin.php");?>
    <!-- top banner -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">SUPPRESSION FORMATION</h1>
            </div>

            <div class="col-lg-4">
              <img src="../images/formation.png">
            </div>

          </div>
        </div>
      </div>
      <div class="sub">
        <h2 class="title">Suppression formation</h2>
      </div>
  <div class="container">
    <div class="col-lg-12 delete-content">
      <!-- # 1 ere Affichage # --> 
        <?php
          if (isset($_POST['id_page'])) {
            include "../Model/functdb.php";
            $functdb = new functdb();
            $functdb->deleteformation($_POST['id_page']);
        ?> 
          <h1 class="title-general">La suppression de la formation s'est déroulée avec succès</h1>
          <a class="btn btn-valide" href="pageadmin.php">Revenir à la page d'Administrateur</a>
          <div class="getfrom-bottom"></div>
        <?php }?> 
      <!-- # fin Affichage # -->
    </div>
  </div>
  <?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>
</body>
</html>

