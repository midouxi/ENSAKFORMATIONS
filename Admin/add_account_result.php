<?php
$title="ENSA Khouribga - Supprimer";
include("../Layouts/headstatic.php");
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
              <h1 class="title">AJOUTER UN COMPTE</h1>
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
        $functdb = new functdb();
        $functdb->addaccount($_POST['email'],$_POST['mdp'],$_POST['type'],$_POST['filiere']);
    ?> 
      <h1 class="title-general">L'ajout du compte s'est déroulée avec succès</h1>
      <a class="btn btn-valide" href="role.php">Revenir à la gestion des rôles</a>
    </div>
  </div>
</body>
</html>