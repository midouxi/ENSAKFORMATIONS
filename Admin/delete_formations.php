<?php
$title="ENSA Khouribga - Supprimer";
include("../Layouts/headstatic.php");
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <?php $administrateur2="current";
      include("../Layouts/menuadmin.php");?>
      <div class="clear"></div>   
    </header> 
  </div>

  <div class="body">
  <!-------------------# 1 ere Affichage # ------------------> 
    <?php
      if (isset($_POST['id_page'])) {
        $functdb = new functdb();
        $functdb->deleteformation($_POST['id_page']);
    ?> 
    <div class='body sky'>
      <h3>La suppression de la formation s'est déroulée avec succès</h3>
      <a href="pageadmin.php">Revenire à la page d'Administrateur</a>
    </div>
    <?php }?> 
      <!-------------------# fin Affichge # ------------------>
  </div>
<?php include("../Layouts/footerstatic.php");?>
</body>
</html>