<?php 
  include("../Model/connect.php");
  $title="ENSA Khouribga - Formation Continue professionnelle";
  include("../Layouts/headstatic.php");
  session_start();
  if (isset($_SESSION['email']) && isset($_SESSION['mdp'])&& $_SESSION['type']=="editeur") { 
?>
<script src="../js/go.js"></script>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <?php 
      $adminpage="current";
      include("../Layouts/menuedit.php");
      ?>
      <div class="clear"></div>	  
    </header> 
  </div>

  <article class="grid_13 last-col ">
  	<h2 class="sky" style="text-align:center">TABLEAU D'INSCRIPTION</h2>
  </article>
  <!-- tabs -->
  <?php 
    if($_SESSION['filiere'] == "lar") { $name="Licence Administration réseaux";}
    if($_SESSION['filiere'] == "mi") { $name="Master Informatique";}
    if($_SESSION['filiere'] == "lil") { $name="Licence Génie logiciel";}
    if($_SESSION['filiere'] == "lsi") { $name="Licence Systeme d'information";}
  ?>

    
    <div class="sky-tabs sky-tabs-pos-top-left sky-tabs-anim-rotate sky-tabs-response-to-icons">
		  <input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
		  <label for="sky-tab1"><span><span><i class="fa fa-bars"></i><?php echo $name; ?></span></span></label>	
			<ul>
		    <li class="sky-tab-content-1">	  
				  <table class="table table-striped table-bordered">
 				   <thead>
            <tr class="inane">
            	<td>FORMATIONS</td>
              <td>NOM</td>
              <td>PRENOM</td>
              <td>DATE DE NAISSANCE</td>
              <td>CIN</td>
              <td>N° Telephone</td>
              <td>EMAIL</td>
              <td>DIPLOME</td>
              <td>ETABLISSMENT</td>
              <td>LETTRE DE MOTIVATION</td>
              <td>Traitement</td>
              <td>Valider</td>
            </tr>
          </thead>
          <tbody>
            <?php
				 	    include "../Model/functdb.php";
              $functdb = new functdb();
              $functdb->getinscription($_SESSION['filiere']);
            ?>
          </tbody>
         </table>
       </li>
			</ul>
		</div>
	<!--/ tabs -->        
  </div>
  <?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>
</body>
</html>
