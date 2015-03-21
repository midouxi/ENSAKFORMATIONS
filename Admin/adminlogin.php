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
  include_once "../Classes/siteadmin.class.php";
  include_once "../Controller/siteadminmanager.php";
  include_once "displaysiteadmin.php";
        
  $displaysiteadmin = new displaysiteadmin();
        
  if(empty($_POST['email']) AND empty($_POST['mdp_siteadmin'])) {
      $displaysiteadmin->signForm();
  }else{
      $siteadminmanager = new siteadminmanager();
      $siteadmin = $siteadminmanager->get($_POST['email']);
  if($siteadmin) {
    if(!$siteadmin->verifyPassword($_POST['mdp_siteadmin'])) {
      echo 'accès refusé <hr>';
      $displaysiteadmin->signForm();
    }else{
      $_SESSION['email'] = $siteadmin->email;
      $_SESSION['mdp_siteadmin'] = $siteadmin->mdp_siteadmin;
  ?> 
  <script> 
	 window.location.href="pageadmin.php"; 
	</script>

  <?php 
  }
    }else{
      echo '<font color="red">accès refusé </font><hr>';
      $displaysiteadmin->signForm();
    }
  }   
  ?>	
	</div>
</body>
</html>
