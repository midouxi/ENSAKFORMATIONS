<?php session_start(); session_destroy(); session_start(); ?>
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
			<?php $id = 'inscription'; include("menu.php");  ?>
			<!--/ mega menu -->
            </article>
            <article class="faceb">
        	<a href="https://www.facebook.com/ensak.formations"><i class="fa fa-facebook fa-3x"></i></a>
     		</article>
     
      <div class="clear"></div>	  
    </header>
    
  </div>
		<div class="body">
        <?php

                    include_once "inscription.class.php";
                    include_once "inscriptionmanager.php";

                    if(!(empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['date_naissance']) OR empty($_POST['cin']) OR empty($_POST['tel']) OR empty($_POST['email']) OR empty($_POST['diplome']) OR empty($_POST['etablissment']) OR empty($_POST['formation']) OR empty($_POST['lettre_motivation']) OR empty($_POST['etat'])))
                              {

                      $inscriptionmanager = new inscriptionmanager();
                      $inscription = new inscription($_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['cin'], $_POST['tel'], $_POST['email'], $_POST['diplome'], $_POST['etablissment'], $_POST['formation'], $_POST['lettre_motivation'], $_POST['etat']);

                      $inscriptionmanager->add($inscription);

                      echo "<div class='sky'><h3>Féliciation Inscription réussite</h3>&nbsp;&nbsp;Vous recevrez un mail dans les prochaines jours quand votre inscription sera valider<br><br><br><br><br>Attention verifier aussi votre corrier indesrable!!<br>";
                      echo '<a href="index.php">Revenire à la page d\'accueil</a></div>';
                    }else{ echo '
							
        <form action="" method="post" class="sky-form" id="cform" name="cform">
        	<header>
        		<h1>Formulaire d\'inscription</h1>
        		<div class="note">Veuillez renseigner tous les champs obligatoires(<span class="required">*</span>)</div>
            </header>
            <fieldset>
            	<div class="row">
				
              <section class="col col-6">
				  <label class="label">Nom:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-user"></i>
                  <input name="nom" id="name" type="text" value="" tabindex="1"></label>
              </section>	
			  <section class="col col-6">
                  <label class="label">Prénom:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-user"></i>
                  <input name="prenom" id="prenom" type="text" value="" tabindex="2"></label>
              </section>	
			  <section class="col col-6">
                  <label class="label">Date de naissance:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-calendar"></i>
                  <input name="date_naissance" id="date" type="date" value="" tabindex="3"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Numero de la carte Nationale(CIN):<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-key"></i>
                  <input name="cin" id="cin" type="text" value="" tabindex="4"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Tél:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-phone"></i>
                  <input name="tel" id="phone" type="number" value="" tabindex="5"></label>
                </section>	
				<section class="col col-6">
                  <label class="label">Email:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-envelope-alt"></i>
                  <input name="email" id="email" type="email" value="" tabindex="6"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Dernier diplome obtenu:<span class="required">*</span></label>
                  <label class="select"><i class="icon-append icon-chevron-down"></i>
                      <select name="diplome" id="diplome"  tabindex="7" >
                      <option value="" selected>--Choisir--</option>
                      <option value="bac+2">bac+2</option>
                      <option value="bac+3">bac+3</option>
                      <option value="bac+4">bac+4</option>
                      <option value="autre">autre</option>
                      </select></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Etablissement:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-home"></i>
                  <input name="etablissment" id="ecole" type="text" value="" tabindex="8"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Formation souhaitée:<span class="required">*</span></label>
                  <label class="select"><i class="icon-append icon-chevron-down"></i>
                   <select name="formation" id="formation"  tabindex="9" >
                      <option value="" selected>--Choisir--</option>
                      <option value="License Ingenierie du logiciel">License Ingénierie du logiciel</option>
                      <option value="License Administration reseaux">License Administration réseaux</option>
                      <option value="License systemes information">License systemes d\'information</option>
                      <option value="Master informatique">Master informatique</option>
                      </select></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Lettre de motivation:<span class="required">*</span></label>
                  <label class="textarea textarea-expandable textarea-resizable"><i class="icon-append icon-comment"></i>
                 <textarea name="lettre_motivation" id="message" tabindex="10"></textarea></label>
                </section>
                </div>	
                </fieldset>
			 <footer>
               <input type="submit"  class="button large" id="send-message" value="s\'inscrire" tabindex="10" style="width:30%; margin-right:340px;">		<input type="hidden" name="etat" value="non Traiter">
                </footer>
            </form>';
          }
                    ?>
      
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

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="js/superfish.js"></script> 
<script type="text/javascript" src="js/jquery.responsivemenu.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script src="js/contact.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>