<?php
$title="ENSA Khouribga - ENSAK Formations";
include("../Layouts/headstatic.php");
?>
<body class="login-body">
  
    <div class="login-content">
    	  <?php 
          include "../Controller/adminmanager.php";
          $adminmanager = new adminmanager();
          $adminmanager->Adminconnect($_POST['email'],$_POST['mdp_siteadmin']);    
        ?>
    </div>

</body>
</html>
