<?php
//error_reporting(E_ALL ^ E_WARNING); 
error_reporting(E_ERROR | E_PARSE); //pour afficher tous les erreurs a part warning et notice 
session_start(); 
session_destroy(); 
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
<meta charset="utf-8">
<meta name="description" content="ensak-formations.com: ENSA Khouribga - Formation Contunie professionnelle vous propose des formations diplômants, en : Système d’information - Génie logiciel - Administration réseaux - Analyse et conception des systèmes informatiques">
<meta name="keywords" content="ensak formation, ensak formations continue, ensak formation professionnelle, informatique, Ensa Khouribga formation continue, Ensa Khouribga formation professionelle">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link href="../css/flexslider-2.css" rel="stylesheet" type="text/css"/>
<!-- css pour le menu -->
<link rel="stylesheet" href="../css/demo.css">
<link rel="stylesheet" href="../css/font-awesome-2.css">
<link rel="stylesheet" href="../css/sky-mega-menu.css">
<link rel="stylesheet" href="../css/sky-forms.css">
<link rel="stylesheet" href="../css/demo-login.css">
<link rel="stylesheet" href="../css/sky-forms-red.css">
<link rel="stylesheet" href="../css/sky-tabs.css">
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

<!---------------- javascript --------------------->
<!---- js du slider ---->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.fancybox.pack.js"></script>
<script src="../js/jquery.flexslider-2.js"></script>
<script src="../js/custom.js"></script>
<!---- fin js du slider ---->
<script type="text/javascript" src="../js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="../js/superfish.js"></script> 
<script type="text/javascript" src="../js/jquery.responsivemenu.js"></script> 
<script type="text/javascript" src="../js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script> 
<script src="../js/jquery.carouFredSel-6.1.0-packed.js" type="text/javascript"></script> 
<script src="../js/contact.js" type="text/javascript"></script> 
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.24.custom.min.js"></script> 
</head>
<!--------------- fin javascript ------------------>