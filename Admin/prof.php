<?php 
  include("../Model/connect.php");
  $title="ENSA Khouribga - Formation Continue professionnelle";
  include("../Layouts/headstatic.php");
  session_start();
  if (isset($_SESSION['email']) && isset($_SESSION['mdp'])&& $_SESSION['type']=="admin") { 
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
    <!--==============================menu=================================-->
      <?php 
      $prof="active";
      include("../Layouts/menuadmin.php");
      ?>
      <!-- banner top -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">GESTIONS DES PROFESSEURS</h1>
            </div>

            <div class="col-lg-4">
              <img src="../images/admin.png">
            </div>

          </div>
        </div>
      </div>
      <div class="sub">
        <h2 class="title">Liste des professeurs</h2>
      </div>
  
  <!-- tabs -->
    <div class="container">
      <div class="col-lg-12">	  
				  <table class="table table-striped table-bordered">
 				   <thead>
            <tr class="inane">
            	<td>NOM</td>
              <td>PRENOM</td>
              <td>RESUME</td>
              <td>DESCRIPTIF</td>
              <td>FORMATIONS</td>
              <td>TRAITEMENT</td>
            </tr>
          </thead>
          <tbody>
            <?php
				 	    include "../Model/functdb.php";
              $functdb = new functdb();
              $functdb->getprofs();
            ?>
          </tbody>
         </table>
        <form action="ajout_prof.php" method="post" class="sky-form">
          <div class="col-lg-4 col-lg-offset-8">
            <input type="submit"  class="btn btn-valide" id="send-message" value="Ajouter un nouveau professeur">
          </div>
        </form>
      </div>
		</div>
    <div class="getfrom-bottom"></div>
	<!--/ tabs -->        
  <?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>
</body>
</html>
