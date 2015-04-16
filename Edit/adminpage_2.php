<?php 
  include("../Model/connect.php");
  $title="ENSA Khouribga - Formation Continue professionnelle";
  include("../Layouts/headstatic.php");
  session_start();
  if (isset($_SESSION['email']) && isset($_SESSION['mdp'])&& $_SESSION['type']=="editeur") { 
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
      <?php 
      $adminpage_2="active";
      include("../Layouts/menuedit.php");
      ?>
      <!-- inscreption pannel -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">TABLEAU FINAL D'INSCRIPTION</h1>
            </div>

            <div class="col-lg-4">
              <img src="../images/inscription.png">
            </div>

          </div>
        </div>
      </div>
      <div class="sub">
        <h2 class="title">TOUT</h2>
      </div>
  
  <!-- tabs -->
    <div class="col-lg-12">   
		  <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <td>Information Général</td>
            <td>CNE</td>
            <td>CIN</td>
            <td>PROVINCE</td>
            <td>SEXE</td>
            <td>NATIONALITER</td>
            <td>SITUATION FAMILIALE</td>
            <td>HANDICAP</td>
            <td>Information BAC</td>
            <td>CONTACT</td>
            <td>PROFESSIONS</td>
          </tr>
        </thead>
        <tbody>
          <?php
              include "../Model/functdb.php";
              $functdb = new functdb();
              $functdb->getinscriptionfinal();
            ?>                
        </tbody>
       </table>          
    </div>
  <!--/ tabs -->                       
  <div class="container">
    <div class="col-lg-12">
      <button class="btn btn-valide">Exporter Les Données</button>
      <div class="getfrom-bottom"></div>
    </div> 
  </div>
 <?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>
</body>
</html>
