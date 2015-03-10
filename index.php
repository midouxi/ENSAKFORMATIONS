<?php session_start(); session_destroy(); session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ENSA Khouribga - Formation Contunie professionnelle</title>
<meta charset="utf-8">
<meta name="description" content="ensak-formations.com: ENSA Khouribga - Formation Contunie professionnelle vous propose des formations diplômants, en : Système d’information - Génie logiciel - Administration réseaux - Analyse et conception des systèmes informatiques">
<meta name="keywords" content="ensak formation, ensak formations continue, ensak formation professionnelle, informatique, Ensa Khouribga formation continue, Ensa Khouribga formation professionelle">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link href="css/flexslider-2.css" rel="stylesheet" type="text/css"/>

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
    <!--==============================header=================================-->
  <div class="container_12 mar-left1"> 
    <header class="homepage">
    	<article class="grid_4" style="margin-right:50px">
      		<a class="logo" href="index.php"><img src="images/ensa-uh-logo.png" style="width:100%"></a>
      	</article>
      	<article class="grid_3">
      		<!-- mega menu -->
				<?php $id = 'index'; include("menu.php");  ?>
			<!--/ mega menu -->
        </article>
        <article class="faceb">
        	<a href="https://www.facebook.com/ensak.formations"><i class="fa fa-facebook fa-3x"></i></a>
     	</article>
      <div class="clear"></div>	  
    </header>
  </div>
    <!--==============================fin header=================================-->
  <div class="container_12 mar-left1 sky"> 
                  <article class="grid_10">
                    <h2>Objéctifs généraux</h2>
                    <div class="linnee">
                      <p>Pour répondre aux besoins en formations des cadres et des organisations, Ensak formation Continue vous propose des formations diplômants, en : </p>
                      <p>
                      • Système d’information<br>
                      • Génie logiciel<br>
                      • Administration réseaux<br>
                      • Analyse et conception des systèmes informatiques<br>
                      </p>
                      <p>Ces programmes se déclinent en licences de niveau Bac + 3, Maîtrise (Master 1), Master 2 ou diplômes d'Université de niveau Bac + 5.</p>
                      <p>Les conditions d'accès sont propres à chaque formation. Pour télécharger le calendrier et dossier de candidature, rendez vous sur la formation de votre choix. </p>
                      <p>Que vous cherchiez une formation pour vous-même ou pour une personne de votre équipe, n'hésitez pas à nous contacter ! </p>
                    </div>
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
<!--------------- fin javascript ------------------>
</body>
</html>
