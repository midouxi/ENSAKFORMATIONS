<!DOCTYPE html>
<html lang="en">
<head>
<title>ENSA Khouribga - Inscription</title>
<meta charset="utf-8">
<meta name="description" content="ensak-formations.com: ENSA Khouribga - Formation Contunie professionnelle vous propose des formations diplômants, en : Système d’information - Génie logiciel - Administration réseaux - Analyse et conception des systèmes informatiques">
<meta name="keywords" content="ensak formation, ensak formations continue, ensak formation professionnelle, informatique, Ensa Khouribga formation continue, Ensa Khouribga formation professionelle, inscription, ensak formation inscription, ensa khouribga inscription ">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<!-- css pour le menu -->
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/font-awesome-2.css">
		<link rel="stylesheet" href="css/sky-mega-menu.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<link rel="stylesheet" href="css/demo-login.css">
		<link rel="stylesheet" href="css/sky-forms-red.css">
        <!-- fin css pour menu -->

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
				<li aria-haspopup="true" class="current">
					<a href="administrateur.php"><i class="fa fa-home"></i>Administrateur</a>
				</li>
			</ul>
			<!--/ mega menu -->
      </article>
      <div class="clear"></div>	  
    </header>
    
  </div>
  	<?php
    if(!(empty($_POST['nbr_semestre3']))){
      for ($r=1; $r<=$_POST['nbr_semestre3']; $r++) { 
  		for($h=1; $h<=$_POST['nbr_module'.$r.'']; $h++){
			if(!(empty($_POST['id_module'.$r.''.$h.'']))){
			
		    	include_once "module.class.php";
            	include_once "modulemanager.php";

                	$modulemanager = new modulemanager();
            	    $module = new module($_POST['id_module'.$r.''.$h.''], $_POST['nom_module'.$r.''.$h.''], $_POST['id_semestre'.$r.''], $_POST['id_formations3']);
        	       	$modulemanager->add($module);
         
            }
		}
    }
	?> 
  <div class='body sky'>
    <h3>Formations ajouter avec succes</h3>
    <a href="administrateur.php">Revenire à la page d'Administrateur</a>
  </div>
  <?php   }
  ?> 
<br>
<div class="container_12 mar-left1 sky">
        <article class="grid_8">
            <h2>contact</h2>
            <div >
             <ul>
             	<li>École Nationale des Sciences Appliquées, Bd Béni Amir, BP 77, Khouribga - Maroc</li>
                <li><strong>Responsable : </strong> Pr Imad Hafidi</li>
                <li><strong>Email : </strong> ensak.formations@gmail.com</li>
                <li><strong>Téléphone : </strong> 06 62 05 77 69 / 05 23 49 23 35</li>
                <li><strong>Fax :</strong>  05 23 49 23 39</li>
            <ul>
            </div>
          </article>
        <article class="grid_7">
          <h2>Interessé par une de nos formations ?</h2>
          <p> inscrivez vous dès maintenant , le nombre de places est limité !!</p>
        </article>
        <article class="grid_7">
                  <form action="inscription.php" method="post" class="sky-form">
                 <input type="submit"  class="button large" id="send-message" value="s'inscrire" >
                </form>
        </article>
        
    
</div>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="js/superfish.js"></script> 
<script type="text/javascript" src="js/jquery.responsivemenu.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script src="js/ajoute.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
