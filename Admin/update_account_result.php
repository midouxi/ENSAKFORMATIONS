<?php
$title="ENSA Khouribga - Supprimer";
include "../Model/connect.php";
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
      <?php $role="active";
      include("../Layouts/menuadmin.php");?>
      <!-- banner top -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">MODIFICATION COMPTE</h1>
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
      if (isset($_POST['id_c']) && isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['type']) && isset($_POST['filiere'])) {
        include "../Model/functdb.php";
        $functdb = new functdb();
        $functdb->updateaccount($_POST['id_c'],$_POST['email'],$_POST['mdp'],$_POST['type'],$_POST['filiere']);
    ?> 
      <h1 class="title-general">La mise á jour du compte s'est déroulée avec succès</h1>
      <a class="btn btn-valide" href="role.php">Revenir à la gestion des rôles</a>
      <div class="getfrom-bottom"></div>
    <?php } ?>
    </div>
  </div>
  <?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>
</body>
</html>