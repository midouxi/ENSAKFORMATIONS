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
                
				<li>
					<a href="adminpage1.php"><i class="fa fa-home"></i>Acceuil</a>
				</li>
				<!--/ home -->
				
				<!-- inscription -->
				<li aria-haspopup="true">
					<a href="adminpage.php"><i class="fa fa-table"></i>Inscription</a>
				</li>
				<!--/ inscription -->
				
				<!-- inscription final -->
				<li aria-haspopup="true" class="current">
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
  
        <article class="grid_13 last-col">
        	<h2 class="sky" style="text-align:center">TABLEAU FINAL</h2></article>
            <?php  				
								
								//if(!$connect=mysql_connect("localhost","root","")) mysql_error();
								//if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
								if(!$connect=mysql_connect("localhost","ensakfor_root","admin")) mysql_error();
								if(!$db=mysql_select_db("ensakfor_fc",$connect)) mysql_error();
					?>            
                    <!-- tabs -->
			<div class="sky-tabs sky-tabs-pos-top-left sky-tabs-anim-flip sky-tabs-response-to-icons">
				<input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
				<label for="sky-tab1"><span><span><i class="fa fa-bars"></i>TOUT</span></span></label>
				
				<ul>
					<li class="sky-tab-content-1">	  
              				<table class="table table-striped table-bordered">
                 				<thead>
                              <tr class="inane">
                                <td>NOM</td>
                                <td>PRENOM</td>
                                <td>CNE</td>
                                <td>CIN</td>
                                <td>DATE DE NAISSANCE</td>
                                <td>LIEU DE NAISSANCE</td>
                                <td>PROVINCE</td>
                                <td>SEXE</td>
                                <td>NATIONALITER</td>
                                <td>SITUATION FAMILIALE</td>
                                <td>HANDICAP</td>
                                <td>ANNEE D'OBTENTION DU BAC</td>
                                <td>N° SERIE DU BAC</td>
                                <td>MENTION</td>
                                <td>ETABLISSMENT</td>
                                <td>ADRESSE</td>
                                <td>EMAIL</td>
                                <td>N° Telephone</td>
                                <td>N° Telephone PARENTS</td>
                                <td>PROFESSION BENEFICIER</td>
                                <td>PROFESSION DU PERE</td>
                                <td>PROFESSION DE LA MERE</td>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
							 	$all_ins=mysql_query("select * from inscription_final");
         					 	while($ligne_ins=mysql_fetch_array($all_ins)){
								?>
                              <tr>
                                  <td><?php print($ligne_ins[0]); ?></td>
                                  <td><?php print($ligne_ins[1]); ?></td>
                                  <td><?php print($ligne_ins[2]); ?></td>
                                  <td><?php print($ligne_ins[3]); ?></td>
                                  <td><?php print($ligne_ins[4]); ?></td>
                                  <td><?php print($ligne_ins[5]); ?></td>
                                  <td><?php print($ligne_ins[6]); ?></td>
                                  <td><?php print($ligne_ins[7]); ?></td>
                                  <td><?php print($ligne_ins[8]); ?></td>
                                  <td><?php print($ligne_ins[9]); ?></td>
                                  <td><?php print($ligne_ins[10]); ?></td>
                                  <td><?php print($ligne_ins[11]); ?></td>
                                  <td><?php print($ligne_ins[12]); ?></td>
                                  <td><?php print($ligne_ins[13]); ?></td>
                                  <td><?php print($ligne_ins[14]); ?></td>
                                  <td><?php print($ligne_ins[15]); ?></td>
                                  <td><?php print($ligne_ins[16]); ?></td>
                                  <td><?php print($ligne_ins[17]); ?></td>
                                  <td><?php print($ligne_ins[18]); ?></td>
                                  <td><?php print($ligne_ins[19]); ?></td>
                                  <td><?php print($ligne_ins[20]); ?></td>
                                  <td><?php print($ligne_ins[21]); ?></td>
                                
                              </tr>
							  <?php } ?>
                                 
                              </tbody>
                            </table>
                            
              		</li>
				</ul>
			</div>
            			<!--/ tabs -->
            				<form action="exporter.php" method="post" class="sky-form">
                            <footer>
                            <button class="button">Exporter Les Données</button>
                            </footer>
                            </form>

                             
           
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
