<?php session_start(); 
error_reporting(E_ALL ^ E_WARNING);
ob_start();
//error_reporting(E_ERROR | E_PARSE); pour afficher tous les erreurs a part warning et notice 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>%TITLE%</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link href="../css/flexslider-2.css" rel="stylesheet" />
<!-- css sky -->
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../dist/css/bootstrap.css">
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
    	<link rel="stylesheet" type="text/css" media="screen" href="./css/ie.css">
    <![endif]-->
</head>
                            
<!-- javascript -->
<!-- js du slider -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.fancybox.pack.js"></script>
<script src="../js/jquery.flexslider-2.js"></script>
<script src="../js/custom.js"></script>
<!-- fin js du slider -->
<script type="text/javascript" src="../js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="../js/superfish.js"></script> 
<script type="text/javascript" src="../js/jquery.responsivemenu.js"></script> 
<script type="text/javascript" src="../js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script> 
<script src="../js/jquery.carouFredSel-6.1.0-packed.js" type="text/javascript"></script> 
<script src="../js/contact.js" type="text/javascript"></script> 
<script type="text/javascript" src="../js/script.js"></script>
<!-- js tabs -->
<script type="text/javascript" src="js/jquery-ui-1.8.24.custom.min.js"></script> 
<!-- fin js tabs -->
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63201519-1', 'auto');
  ga('send', 'pageview');

</script>
<!--fin Google Analytics -->
<!-- fin javascript -->