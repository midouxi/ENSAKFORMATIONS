<?php session_start(); 
                				if(!isset($_SESSION['email'])) header('Location: index.php');
			?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ENSA Khouribga - Formation professionnelle</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="css/flexslider-2.css" rel="stylesheet" />
<!-- css sky -->
        <link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/font-awesome-2.css">
		<link rel="stylesheet" href="css/sky-mega-menu.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<link rel="stylesheet" href="css/sky-tabs.css">
        <!-- fin css sky -->

<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
   	<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
      <a class="logo" href="index.php"><img src="images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <article class="grid_3">
      <!-- mega menu -->
			<ul class="sky-mega-menu sky-mega-menu-anim-flip sky-mega-menu-response-to-icons" style="width:575px;">
				<!-- home -->
                
				<li aria-haspopup="true" class="current">
					<a href="adminpage1.php"><i class="fa fa-home"></i>Acceuil</a>
				</li>
				<!--/ home -->
				
				<!-- inscription -->
				<li aria-haspopup="true">
					<a href="adminpage.php"><i class="fa fa-table"></i>Inscription</a>
				</li>
				<!--/ inscription -->
				
				<!-- inscription final -->
				<li aria-haspopup="true">
					<a href="adminpage_2.php"><i class="fa fa-table"></i>Inscription final</a>
				</li>
				<!--/ inscription final -->
				
				<!-- logout admin -->
				<li aria-haspopup="true" class="right">
					<a href="logoutadmin.php"><i class="fa fa-sign-out"></i>Déconnexion</a>
				</li>
				<!--/ logout admin -->
				
			</ul>
			<!--/ mega menu -->
            </article>
     
      <div class="clear"></div>	  
    </header>
    
  </div>
  <div class="container_12 mar-left1 sky">
        <article class="grid_10">
                   <?php  		
			
								include_once 'displayadmin.php';

                				$displayadmin = new displayadmin();
                				$displayadmin->inviteadmin($_SESSION);
					?> 
                  </article>
                  <article class="grid_5">
                    <h2>Formations</h2>
                    <!-- start slider -->
                        <div id="main-slider" class="flexslider">
                            <ul class="slides">
                              <li>
                                <a href="mi.php"><img src="images/master-logo.jpg" alt="" /></a>
                                
                              </li>
                              <li>
                                <a href="lil.php"><img src="images/lil-logo.jpg" alt="" /></a>
                                
                              </li>
                              <li>
                                <a href="lsi.php"><img src="images/lsi-logo.jpg" alt="" /></a>
                                
                              </li>
                              <li>
                                <a href="lar.php"><img src="images/lar-logo.jpg" alt="" /></a>
                                
                              </li>
                            </ul>
                        </div>
                    <!-- end slider -->
                  </article>        
           </div>
</div>
                             
                            
   
<!---------------- javascript --------------------->
<!---- js du slider ---->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.flexslider-2.js"></script>
<script src="js/custom.js"></script>
<!---- fin js du slider ---->
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="js/superfish.js"></script> 
<script type="text/javascript" src="js/jquery.responsivemenu.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script src="js/jquery.carouFredSel-6.1.0-packed.js" type="text/javascript"></script> 
<script src="js/contact.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/script.js"></script>
<!------- js tabs ------->
<script type="text/javascript" src="js/jquery-ui-1.8.24.custom.min.js"></script> 
<!------ fin js tabs ----->
<!--------------- fin javascript ------------------>
</body>
</html>
