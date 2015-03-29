<?php
$title="ENSA Khouribga - ENSAK Formations";
include("../Layouts/headstatic.php");
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <div class="clear"></div>	  
    </header>
  </div>

	<div class="body body-s">
	 <?php 
    include "../Controller/siteadminmanager.php";
    $siteadminmanager = new siteadminmanager();
    $siteadminmanager->Adminconnect($_POST['email'],$_POST['mdp_siteadmin'],$_SESSION['email'],$_SESSION['mdp_siteadmin']);    
    ?>
	</div>
</body>
</html>
