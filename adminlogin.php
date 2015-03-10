<!DOCTYPE html> 
<html>
	<head>
		<title>Administrateur - Ensak Formations</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/font-awesome-2.css">
		<link rel="stylesheet" href="css/sky-mega-menu.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<link rel="stylesheet" href="css/demo-login.css">
		<link rel="stylesheet" href="css/sky-forms-red.css">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		
		<!--[if lt IE 10]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
      <a class="logo" href="index.php"><img src="images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <div class="clear"></div>	  
    </header>
    
  </div>
		<div class="body body-s">
		
			<?php 
        
                            include_once "siteadmin.class.php";
                            include_once "siteadminmanager.php";
                            include_once "displaysiteadmin.php";
        
        
                            $displaysiteadmin = new displaysiteadmin();
        
                            if(empty($_POST['email']) AND empty($_POST['mdp_siteadmin']))
                            {
                                    $displaysiteadmin->signForm();
                            }
                            else
                            {
                               $siteadminmanager = new siteadminmanager();
                               $siteadmin = $siteadminmanager->get($_POST['email']);
                              if($siteadmin){
        
                                if(!$siteadmin->verifyPassword($_POST['mdp_siteadmin'])) 
                                {
                                     echo 'accès refusé <hr>';
                                    $displaysiteadmin->signForm();
                                }
                                else
                                {
                                  $_SESSION['email'] = $siteadmin->email;
                                  $_SESSION['mdp_siteadmin'] = $siteadmin->mdp_siteadmin;
                                   ?>
                                    <script> 
									window.location.href="pageadmin.php"; 
									</script>
                                    <?php 
                                }
        
                              }
                              else
                              {
                                echo '<font color="red">accès refusé </font><hr>';
                                $displaysiteadmin->signForm();
                              }
                            }
			?>
			
		</div>
	</body>
</html>
