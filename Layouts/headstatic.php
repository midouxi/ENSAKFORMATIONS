<?php
//error_reporting(E_ALL ^ E_WARNING); 
error_reporting(E_ERROR | E_PARSE); //pour afficher tous les erreurs a part warning et notice 
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
<meta charset="utf-8">
<meta name="description" content="ensak-formations.com: ENSA Khouribga - Formation Contunie professionnelle vous propose des formations diplômants, en : Système d’information - Génie logiciel - Administration réseaux - Analyse et conception des systèmes informatiques">
<meta name="keywords" content="ensak formation, ensak formations continue, ensak formation professionnelle, informatique, Ensa Khouribga formation continue, Ensa Khouribga formation professionelle">
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<!-- css pour le menu -->
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../css/adminstyle.css" />
<link rel="stylesheet" href="../dist/css/bootstrap.css">

<!-- carousel style -->
<link rel="stylesheet" type="text/css" href="../carousel/css/style.css" />
<link rel="stylesheet" type="text/css" href="../carousel/css/jquery.jscrollpane.css" media="all" />
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

<!-- javascript -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../dist/js/bootstrap.js"></script>
<!-- map -->
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="../map/prettymaps.js"></script>
<!-- fin js map -->
	  
<!--
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script> 
	<script src="../js/jquery.carouFredSel-6.1.0-packed.js" type="text/javascript"></script> 
	<script src="../js/contact.js" type="text/javascript"></script> 
	<script type="text/javascript" src="../js/script.js"></script>
-->
</head>
<!-- fin javascript -->