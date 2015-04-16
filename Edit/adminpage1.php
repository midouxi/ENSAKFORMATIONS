<?php 
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
      $adminpage1="active";
      include("../Layouts/menuedit.php");
      ?>

  <div class="container_12 mar-left1 sky">
    <article class="grid_10">
    <?php  		
				include_once '../Controller/displayadmin.php';
			  $displayadmin = new displayadmin();
			  $displayadmin->inviteadmin($_SESSION);
		?> 
    </article>        
  </div>
  <?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>
</body>

                             
                            
   
