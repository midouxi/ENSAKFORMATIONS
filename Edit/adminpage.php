<?php 
  include("../Model/connect.php");
  $title="ENSA Khouribga - Formation Continue professionnelle";
  include("../Layouts/headstatic.php");
  session_start();
  if (isset($_SESSION['email']) && isset($_SESSION['mdp'])&& $_SESSION['type']=="editeur") { 
?>
<script src="../js/go.js"></script>
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
      <?php 
      $adminpage="active";
      include("../Layouts/menuedit.php");
      ?>
      <!-- inscreption pannel -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">TABLEAU D'INSCRIPTION</h1>
            </div>

            <div class="col-lg-4">
              <img src="../images/inscription.png">
            </div>

          </div>
        </div>
      </div>

  <!-- tabs -->
  <?php 
    include("../Model/functdb.php");
    $functdb = new functdb();
    if($_SESSION['filiere']=="All") {
      $name="Toutes les filières (Super Admin)";
    } else {
      $name=$functdb->getformationlinewithid($_SESSION['filiere'],2).' '.$functdb->getformationlinewithid($_SESSION['filiere'],1);
    }
  ?>
    <div class="sub">
      <h2 class="title"><?php echo $name; ?></h2>
    </div>
    
    <div class="col-lg-12">	  
			<table class="table table-striped table-bordered">
 				<thead>
            <tr>
              <td>DATE D'INSCRIPTION</td>
              <td>FORMATION SOUHAITÉE</td>
              <td>INFORMATIONS GÉNÉRALES</td>
              <td>CIN</td>
              <td>CONTACT</td>
              <td>DIPLOME</td>
              <td>ETABLISSMENT</td>
              <td>LETTRE DE MOTIVATION</td>
              <td>VU</td>
              <td>CONTACTÉ</td>
              <td>INSCRIT</td>
              <td>TRAITEMENT</td>
            </tr>
        </thead>
        <tbody>
            <?php
              $functdb->getinscription($_SESSION['filiere']);
            ?>
        </tbody>
      </table>
		</div>
    <?php $functdb->getModalInscription($_SESSION['filiere'],0); ?>
	<!--/ tabs -->
  <?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>
</body>
</html>
