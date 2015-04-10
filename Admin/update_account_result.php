<?php
$title="ENSA Khouribga - Supprimer";
include "../Model/connect.php";
include("../Layouts/headstatic.php");
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <?php $role="current";
      include("../Layouts/menuadmin.php");?>
      <div class="clear"></div>   
    </header> 
  </div>

  <div class="body">
  <!-------------------# 1 ere Affichage # ------------------> 
    <?php
      if (isset($_POST['id_c']) && isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['type']) && isset($_POST['filiere'])) {
        include "../Model/functdb.php";
        $functdb = new functdb();
        $functdb->updateaccount($_POST['id_c'],$_POST['email'],$_POST['mdp'],$_POST['type'],$_POST['filiere']);
    ?> 
    <div class='body sky'>
      <h3>La mise á jour du compte s'est déroulée avec succès</h3>
      <a href="role.php">Revenir à la gestion des rôles .</a>
    </div>
    <?php } ?>
      <!-------------------# fin Affichge # ------------------>
  </div>
</body>
</html>