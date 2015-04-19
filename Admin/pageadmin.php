<?php
  $title="ENSA Khouribga - Formation professionnelle";
  include("../Layouts/headstatic.php");
  include("../Model/connect.php");
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
    <!--==============================menu=================================-->
    <?php $pageadmin="active";
    include("../Layouts/menuadmin.php");?>
    <!-- top banner -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">FORMATIONS</h1>
            </div>

            <div class="col-lg-4">
              <img src="../images/formation.png">
            </div>

          </div>
        </div>
      </div>
      <div class="sub">
        <h2 class="title">Liste des Formations</h2>
      </div>

  <div class="table-content">
    <div class="col-lg-10"></div>
    <div class="col-lg-2">
      <form action="administrateur.php" class="sky-form" method="post">
        <input type="submit" class="btn btn-ajouter" value="Ajouter" name="val"/>
      </form>
    </div>
    <div class="col-lg-12">
      <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <td>ID</td>
          <td>Niveau</td>
          <td>Titre</td>
          <td>Nombre de Semestre</td>
          <td>Domaine</td>
          <td>Durée</td>
          <td>Email - Telephone - Fax</td>
          <td>Condition d'admission</td>
          <td>Organisation de la formation</td>
          <td>Calendrier à retenir</td>
          <td>Les frais</td>
          <td>Options</td>
        </tr>
      </thead>
      <tbody>
        <?php
         $all_ins=mysql_query("select * from formations");
         while($ligne_ins=mysql_fetch_array($all_ins)){
        ?>
        <tr>
          <td><?php print($ligne_ins[0]); ?></td>
          <td><?php print(utf8_encode($ligne_ins[2])); ?></td>
          <td><?php print($ligne_ins[4]); ?></td>
          <td><?php print($ligne_ins[5]); ?></td>
          <td><?php print($ligne_ins[6]); ?></td>
          <td><?php print($ligne_ins[8]); ?></td>
          <td><?php echo "<strong>Email : </strong><br>".$ligne_ins[9]."<br><strong>Tél : </strong><br>".$ligne_ins[10]."<br><strong>Fax : </strong><br>".$ligne_ins[11]; ?></td>
          <td><?php print($ligne_ins[13]); ?></td>
          <td><?php print($ligne_ins[14]); ?></td>
          <td><?php echo '<strong>Date depot:</strong> '.$ligne_ins[15].'<br><strong>Date entretien:</strong> '.$ligne_ins[16]; ?></td>
          <td><?php echo '<strong>Frais formation:</strong> '.$ligne_ins[17].'<br><strong>Frais entretien:</strong> '.$ligne_ins[18]; ?></td>
          <td><?php echo'<form action="update_formations.php" class="sky-form" method="post">
                          <input type="submit" class="btn btn-table" value="Modifier" name="val"/>
                          <input type="hidden" name="id_page" value="'.$ligne_ins[0].'" />
                         </form>
                         <form action="delete_formations.php" class="sky-form" method="post">
                          <input type="submit" class="btn btn-table" value="Supprimer" name="val" onclick="return confirm(\'Etes-vous sûr que vous voulez supprimer cette formation ?\')"/>
                          <input type="hidden" name="id_page" value="'.$ligne_ins[0].'" />
                         </form>';?></td>
        </tr>
        <?php } ?>               
      </tbody>
    </table>
    </div>
  </div>        
  <?php } else { ?> <script>window.location.href="../Admin/index.php"; </script><?php } ?>                        
</body>
</html>
