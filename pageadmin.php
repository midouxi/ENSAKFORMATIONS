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
			<ul class="sky-mega-menu sky-mega-menu-anim-flip sky-mega-menu-response-to-icons" style="width:685px;">
				<!-- home -->
                
				<li aria-haspopup="true" class="current">
					<a href="pageadmin.php"><i class="fa fa-home"></i>Admin</a>
				</li>
				<!--/ home -->
				<li aria-haspopup="true">
          <a href="administrateur.php"><i class="fa fa-plus"></i>Ajouter</a>
        </li>
        <li aria-haspopup="true">
          <a href="administrateur1.php"><i class="fa fa-refresh"></i>Mettre à jour</a>
        </li>
        <li aria-haspopup="true">
          <a href="administrateur2.php"><i class="fa fa-minus"></i>Suppression</a>
        </li>
				
				<!-- logout admin -->
				<li aria-haspopup="true" class="right">
					<a href="logoutsiteadmin.php"><i class="fa fa-sign-out"></i>Déconnexion</a>
				</li>
				<!--/ logout admin -->
				
			</ul>
			<!--/ mega menu -->
            </article>
     
      <div class="clear"></div>	  
    </header>
    
  </div>
  <div class="sky">
   
            <?php  			
			
								if(!$connect=mysql_connect("localhost","root","")) mysql_error();
								if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
								//if(!$connect=mysql_connect("localhost","ensakfor_root","admin")) mysql_error();
								//if(!$db=mysql_select_db("ensakfor_fc",$connect)) mysql_error();
					  ?>            
                   
              				<table class="table table-striped table-bordered">
                 				<thead>
                              <tr class="success">
                              	<td><strong>ID</strong></td>
                                <td><strong>Niveau</strong></td>
                                <td><strong>Titre</strong></td>
                                <td><strong>Nbr Semestre</strong></td>
                                <td><strong>Domaine</strong></td>
                                <td><strong>Durée</strong></td>
                                <td><strong>Email</strong></td>
                                <td><strong>Telephone // Fax</strong></td>
                                <td><strong>Condition d'admission</strong></td>
                                <td><strong>Organisation de la formation</strong></td>
                                <td><strong>Calendrier_à_retenir</strong></td>
                                <td><strong>Les frais</strong></td>
                                <td><form action="administrateur.php" class="sky-form" method="post">
                                      <input type="submit" class="button" value="Ajouter" name="val"/>
                                    </form></td>

                              </tr>
                              </thead>
                              <tbody>
                              <?php
							 	$all_ins=mysql_query("select * from formations");
         					 	while($ligne_ins=mysql_fetch_array($all_ins)){
								?>
                              <tr>
                                  <td><?php print($ligne_ins[0]); ?></td>
                                  <td><?php print($ligne_ins[2]); ?></td>
                                  <td><?php print($ligne_ins[4]); ?></td>
                                  <td><?php print($ligne_ins[5]); ?></td>
                                  <td><?php print($ligne_ins[6]); ?></td>
                                  <td><?php print($ligne_ins[8]); ?></td>
                                  <td><?php print($ligne_ins[9]); ?></td>
                                  <td><?php echo $ligne_ins[10].' // '.$ligne_ins[11]; ?></td>
                                  <td><?php print($ligne_ins[13]); ?></td>
                                  <td><?php print($ligne_ins[14]); ?></td>
                                  <td><?php echo '<strong>Date depot:</strong> '.$ligne_ins[15].'<br><strong>Date entretien:</strong> '.$ligne_ins[16]; ?></td>
                                  <td><?php echo '<strong>Frais formation:</strong> '.$ligne_ins[17].'<br><strong>Frais entretien:</strong> '.$ligne_ins[18]; ?></td>
                                  <td><?php echo'<form action="update_formations.php" class="sky-form" method="post">
                                  				 <input type="submit" class="button" value="Modifier" name="val"/>
                                                 <input type="hidden" name="id_page" value="'.$ligne_ins[0].'" />
                                                 </form>
                                                 <form action="delete_formations.php" class="sky-form" method="post">
                                           <input type="submit" class="button" value="Supprimer" name="val"/>
                                                 <input type="hidden" name="id_page" value="'.$ligne_ins[0].'" />
                                                 </form>';?></td>
                                
                              </tr>
							  <?php } ?>
                                 
                              </tbody>
                            </table>
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
