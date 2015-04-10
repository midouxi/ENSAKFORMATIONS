<?php 
  include("../Model/connect.php");
  $title="ENSA Khouribga - Formation Continue professionnelle";
  include("../Layouts/headstatic.php");
  session_start();
  if (isset($_SESSION['email']) && isset($_SESSION['mdp'])&& $_SESSION['type']=="admin") { 
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <?php 
      $role="current";
      include("../Layouts/menuadmin.php");
      ?>
      <div class="clear"></div>	  
    </header> 
  </div>

  <article class="grid_13 last-col ">
  	<h2 class="sky" style="text-align:center">Gestions des comptes</h2>
  </article>
  <!-- tabs -->
    <div class="sky-tabs sky-tabs-pos-top-left sky-tabs-anim-rotate sky-tabs-response-to-icons">
		  <input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
		  <label for="sky-tab1"><span><span><i class="fa fa-bars"></i>Comptes</span></span></label>	
			<ul>
		    <li class="sky-tab-content-1">	  
				  <table class="table table-striped table-bordered">
 				   <thead>
            <tr class="inane">
            	<td>LOGIN</td>
              <td>MDP</td>
              <td>TYPE</td>
              <td>FILIERE</td>
              <td>Valider</td>
            </tr>
          </thead>
          <tbody>
            <?php
				 	    include "../Model/functdb.php";
              $functdb = new functdb();
              $functdb->getaccounts();
            ?>
          </tbody>
         </table>
         <article class="grid_7">
            <form action="ajout_account.php" method="post" class="sky-form">
              <input type="submit"  class="button large" id="send-message" value="Ajouter" >
            </form>
         </article>
       </li>
			</ul>
		</div>
	<!--/ tabs -->        
  </div>
  <?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>
</body>
</html>
