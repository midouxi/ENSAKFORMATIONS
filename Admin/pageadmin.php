<?php
  $title="ENSA Khouribga - Formation professionnelle";
  include("../Layouts/headstatic.php");
  include("../Model/connect.php");
  session_start();
  if (isset($_SESSION['email']) && isset($_SESSION['mdp'])&& $_SESSION['type']=="admin") { 
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../fr/index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <?php $pageadmin="current";
      include("../Layouts/menuadmin.php");?>
      <div class="clear"></div>	  
    </header>
  </div>

  <div class="sky">         
		<table class="table table-striped table-bordered">
		  <thead>
        <tr class="success">
    	    <td><strong>ID</strong></td>
          <td><strong>Niveau</strong></td>
          <td><strong>Titre</strong></td>
          <td><strong>Nbr Semestre</strong></td>
          <td><strong>Domaine</strong></td>
          <td><strong>Durée</strong></td>
          <td><strong>Email</strong></td>
          <td><strong>Telephone // Fax</strong></td>
          <td><strong>Condition d'admission</strong></td>
          <td><strong>Organisation de la formation</strong></td>
          <td><strong>Calendrier_à_retenir</strong></td>
          <td><strong>Les frais</strong></td>
          <td><form action="administrateur.php" class="sky-form" method="post">
              <input type="submit" class="button" value="Ajouter" name="val"/>
              </form>
          </td>
        </tr>
      </thead>
      <tbody>
        <?php
			 	 $all_ins=mysql_query("select * from formations");
			 	 while($ligne_ins=mysql_fetch_array($all_ins)){
				?>
        <tr>
          <td><?php print($ligne_ins[0]); ?></td>
          <td><?php print($ligne_ins[2]); ?></td>
          <td><?php print($ligne_ins[4]); ?></td>
          <td><?php print($ligne_ins[5]); ?></td>
          <td><?php print($ligne_ins[6]); ?></td>
          <td><?php print($ligne_ins[8]); ?></td>
          <td><?php print($ligne_ins[9]); ?></td>
          <td><?php echo $ligne_ins[10].' // '.$ligne_ins[11]; ?></td>
          <td><?php print($ligne_ins[13]); ?></td>
          <td><?php print($ligne_ins[14]); ?></td>
          <td><?php echo '<strong>Date depot:</strong> '.$ligne_ins[15].'<br><strong>Date entretien:</strong> '.$ligne_ins[16]; ?></td>
          <td><?php echo '<strong>Frais formation:</strong> '.$ligne_ins[17].'<br><strong>Frais entretien:</strong> '.$ligne_ins[18]; ?></td>
          <td><?php echo'<form action="update_formations.php" class="sky-form" method="post">
              				    <input type="submit" class="button" value="Modifier" name="val"/>
                          <input type="hidden" name="id_page" value="'.$ligne_ins[0].'" />
                         </form>
                         <form action="delete_formations.php" class="sky-form" method="post">
                          <input type="submit" class="button" value="Supprimer" name="val"/>
                          <input type="hidden" name="id_page" value="'.$ligne_ins[0].'" />
                         </form>';?></td>
        </tr>
			  <?php } ?>               
      </tbody>
    </table>
  </div>    
  <?php } else { ?> <script>window.location.href="../Admin/adminlogin.php"; </script><?php } ?>                        
</body>
</html>
