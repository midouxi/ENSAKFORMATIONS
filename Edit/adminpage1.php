<?php 
  $title="ENSA Khouribga - Formation Continue professionnelle";
  include("../Layouts/headstatic.php");
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">

      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>

      <?php 
      $adminpage1="current";
      include("../Layouts/menuedit.php");
      ?>

      <div class="clear"></div>	  
    </header> 
  </div>

  <div class="container_12 mar-left1 sky">
    <article class="grid_10">
    <?php  		
				include_once '../Controller/displayadmin.php';
			  $displayadmin = new displayadmin();
			  $displayadmin->inviteadmin($_SESSION);
		?> 
    </article>        
    <?php include("../Layouts/slider.php");?>
  </div>
</body>

                             
                            
   
