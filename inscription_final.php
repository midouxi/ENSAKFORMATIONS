<?php session_start(); session_destroy(); session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ENSA Khouribga - Inscription Final</title>
<meta charset="utf-8">
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

                    include_once "inscription_final.class.php";
                    include_once "inscription_finalmanager.php";

                    if(!(empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['cne']) OR empty($_POST['cin']) OR empty($_POST['date_naissance']) OR empty($_POST['lieu_naissance']) OR empty($_POST['province']) OR empty($_POST['sexe']) OR empty($_POST['nationalite']) OR empty($_POST['situation']) OR empty($_POST['handicap']) OR empty($_POST['bac_annee']) OR empty($_POST['bac_serie']) OR empty($_POST['mention']) OR empty($_POST['etablissment']) OR empty($_POST['adresse']) OR empty($_POST['email']) OR empty($_POST['tel']) OR empty($_POST['tel_parents']) OR empty($_POST['prof_ben']) OR empty($_POST['prof_pere']) OR empty($_POST['prof_mere'])))
                              {

                      $inscription_finalmanager = new inscription_finalmanager();
                      $inscription_final = new inscription_final($_POST['nom'], $_POST['prenom'], $_POST['cne'], $_POST['cin'], $_POST['date_naissance'], $_POST['lieu_naissance'], $_POST['province'], $_POST['sexe'], $_POST['nationalite'], $_POST['situation'], $_POST['handicap'], $_POST['bac_annee'], $_POST['bac_serie'], $_POST['mention'], $_POST['etablissment'], $_POST['adresse'], $_POST['email'], $_POST['tel'], $_POST['tel_parents'], $_POST['prof_ben'], $_POST['prof_pere'], $_POST['prof_mere']);

                      $inscription_finalmanager->add($inscription_final);

                      echo "<div class='sky'>Féliciation: inscription final réussite<br>";
                      echo '<a href="index.php">Revenire à la page d\'accueil</a></div>';
                    }else{
                    
        echo'<form action="" method="post" class="sky-form" id="cform" name="cform">
        	<header>
        		<h1>Formulaire d\'inscription final</h1>
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
                  <label class="label">Numero Nationale d\'etudiant(CNE):<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-key"></i>
                  <input name="cne" id="cne" type="number" value="" tabindex="3"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Numero de la carte Nationale(CIN):<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-key"></i>
                  <input name="cin" id="cin" type="text" value="" tabindex="4"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Date de naissance:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-calendar"></i>
                  <input name="date_naissance" id="date" type="date" value="" tabindex="5"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Lieu de naissance:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-map-marker"></i>
                  <input name="lieu_naissance" id="lieu" type="text" value="" tabindex="6"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Province:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-tag"></i>
                  <input name="province" id="province" type="text" value="" tabindex="7"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Sexe:<span class="required">*</span></label>
                  <label class="select"><i class="icon-append icon-chevron-down"></i>
                      <select name="sexe" id="sexe"  tabindex="8" >
                      <option value="" selected>--Choisir--</option>
                      <option value="masculin">Masculin</option>
                      <option value="feminin">Féminin</option>
                      </select></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Nationalité:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-flag"></i>
                  <input name="nationalite" id="nationalite" type="text" value="" tabindex="9"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Situation familiale:<span class="required">*</span></label>
                  <label class="select"><i class="icon-append icon-chevron-down"></i>
                      <select name="situation" id="situation"  tabindex="10" >
                      <option value="" selected>Quel est votre statut?</option>
                      <option value="marie">Marié</option>
                      <option value="celibataire">Célibataire</option>
                      <option value="divorse">Divorsé</option>
                      </select></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Handicap:<span class="required">*</span></label>
                  <label class="select"><i class="icon-append icon-chevron-down"></i>
                  	  <select name="handicap" id="handicap"  tabindex="11" >
                      <option value="" selected>--Choisir--</option>
                      <option value="oui">OUI</option>
                      <option value="non">NON</option>
                      </select></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Année d\'obtention du bac:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-calendar-empty"></i>
                  <input name="bac_annee" id="bac_annee" type="number" value="" tabindex="12"></label>
               </section>	
			  <section class="col col-6">
                  <label class="label">Série du bac:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-barcode"></i>
                  <input name="bac_serie" id="bac_serie" type="text" value="" tabindex="13"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Mention:<span class="required">*</span></label>
                  <label class="select"><i class="icon-append icon-chevron-down"></i>
                      <select name="mention" id="mention"  tabindex="14" >
                      <option value="" selected>--Choisir--</option>
                      <option value="Exelent">Excellent</option>
                      <option value="Tres bien">Trés Bien</option>
                      <option value="Bien">Bien</option>
                      <option value="Assez Bien">Assez Bien</option>
                      <option value="Pas de mention">sans</option>
                      </select></label>
                </section>	
			  <section class="col col-6">
                	<label class="label">Etablissment:<span class="required">*</span></label>
                    <label class="select"><i class="icon-append icon-chevron-down"></i>
                  	  <select name="etablissment" id="etablissment"  tabindex="15" >
                      <option value="" selected>--Choisir--</option>
                      <option value="public">Public</option>
                      <option value="prive">Privé</option>
                      </select> </label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Adresse:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-location-arrow"></i>
                  <input name="adresse" id="adresse" type="text" value="" tabindex="16"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Email:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-envelope-alt"></i>
                  <input name="email" id="email" type="email" value="" tabindex="17"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Tél:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-phone"></i>
                  <input name="tel" id="phone" type="number" value="" tabindex="18"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Tél Parents:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-phone-sign"></i>
                  <input name="tel_parents" id="phone_parents" type="number" value="" tabindex="19"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Profession du bénéficiare:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-info"></i>
                  <input name="prof_ben" id="prof_ben" type="text" value="" tabindex="20"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Profession du pére:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-info"></i>
                  <input name="prof_pere" id="prof_pere" type="text" value="" tabindex="21"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Profession de la mére:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-info"></i>
                  <input name="prof_mere" id="prof_mere" type="text" value="" tabindex="22"></label>
                </section>	
			  </div>
              </fieldset>
              <footer>
                  <input type="submit"  class="button large" id="send-message" value="s\'inscrire" tabindex="23" style="width:30%; margin: 30px 340px;">
               </footer>
            </form>';}
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
<script src="js/contact_final.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>