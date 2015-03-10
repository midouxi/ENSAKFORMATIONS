<!DOCTYPE html>
<html lang="en">
<head>
<title>ENSA Khouribga - administrateur</title>
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
      <ul class="sky-mega-menu sky-mega-menu-anim-flip sky-mega-menu-response-to-icons" style="width:685px;">
        <!-- home -->
                
        <li aria-haspopup="true">
          <a href="pageadmin.php"><i class="fa fa-home"></i>Admin</a>
        </li>
        <!--/ home -->
        <li aria-haspopup="true" class="current">
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
		<div class="body">
							
        <form action="ajouter_formations.php" method="post" class="sky-form" enctype="multipart/form-data">
        	<header>
        		<h1>Nouveau Formations</h1>
            </header>
            <fieldset>
            	<div class="row">
				  
        <section class="col col-6">
                  <label class="label">Id Formations:</label>
                  <label class="input"><i class="icon-append icon-key"></i>
                  <input name="id_formations" id="id_formations" type="text" value="" tabindex="1"></label>
              </section>
        <section class="col col-6">
				  <label class="label">Titre du Menu:</label>
                  <label class="input"><i class="icon-append icon-info"></i>
                  <input name="menu_titre" id="menu_titre" type="text" value="" tabindex="2"></label>
              </section>		
			  <section class="col col-6">
                  <label class="label">Niveau:</label>
                  <label class="input"><i class="icon-append icon-info"></i>
                  <input name="niveau" id="niveau" type="text" value="" tabindex="3"></label>
              </section>	
			  <section class="col col-6">
                  <label class="label">Logos:</label>
                  <label class="input"><i class="icon-append icon-picture"></i>
                  <input type="hidden" name="MAX_FILE_SIZE" value="100048576" />
                  <input type="file" name="logo" id="logo" tabindex="4"/></label>
                </section>			  
        <section class="col col-6">
                  <label class="label">Titre:</label>
                  <label class="input"><i class="icon-append icon-info"></i>
                  <input name="titre" id="titre" type="text" value="" tabindex="5"></label>
                </section>
        <section class="col col-6">
                  <label class="label">Nombre de Semestre:</label>
                  <label class="input"><i class="icon-append icon-info"></i>
                  <input name="nbr_semestre" id="nbr_semestre" type="text" value="" tabindex="6"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Domaine:</label>
                  <label class="input"><i class="icon-append icon-info"></i>
                  <input name="domaine" id="domaine" type="text" value="" tabindex="7"></label>
                </section>
                <section class="col col-6">
                  <label class="label">Type de formations:</label>
                  <label class="input"><i class="icon-append icon-info"></i>
                  <input name="type_formations" id="type_formations" type="text" value="" tabindex="8"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Durée:</label>
                  <label class="input"><i class="icon-append icon-time"></i>
                  <input name="duree" id="duree" type="text" value="" tabindex="9"></label>
                </section>	
				<section class="col col-6">
                  <label class="label">Email:</label>
                  <label class="input"><i class="icon-append icon-envelope-alt"></i>
                  <input name="email" id="email" type="email" value="" tabindex="10"></label>
                </section>
                <section class="col col-6">
                  <label class="label">Télephone:</label>
                  <label class="input"><i class="icon-append icon-phone"></i>
                  <input name="telephone" id="phone" type="text" value="" tabindex="11"></label>
                </section>
                <section class="col col-6">
                  <label class="label">Fax:</label>
                  <label class="input"><i class="icon-append fa-phone-square"></i>
                  <input name="fax" id="fax" type="text" value="" tabindex="12"></label>
                </section>
			  <section class="col col-6">
                  <label class="label">Débouché de la formation:</label>
                  <label class="input"><i class="icon-append icon-picture"></i>
                  <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                  <input name="icone" id="icone" type="file" tabindex="13"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Condition d'admission:</label>
                  <label class="textarea textarea-expandable textarea-resizable"><i class="icon-append icon-info"></i>
                  <textarea name="condition_admission" id="condition_admission" tabindex="14"></textarea></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Organisation de la formation:</label>
                  <label class="textarea textarea-expandable textarea-resizable"><i class="icon-append icon-info"></i>
                  <textarea name="organisation_formations" id="organisation_formations" tabindex="15"></textarea></label>
                </section>
        <section class="col col-6">
                  <label class="label">Calendrier Date de depot dossier:</label>
                  <label class="input"><i class="icon-append icon-calendar"></i>
                  <input name="date_depot" id="date_depot" type="text" value="" tabindex="16"></label>
                </section>  
        <section class="col col-6">
                  <label class="label">Calendrier Date d'entretien:</label>
                  <label class="input"><i class="icon-append icon-calendar"></i>
                  <input name="date_entretien" id="date_entretien" type="text" value="" tabindex="17"></label>
                </section>  	
			  <section class="col col-6">
                  <label class="label">Frais De Formations:</label>
                  <label class="input"><i class="icon-append icon-money"></i>
                  <input name="frais_formations" id="frais_formations" type="text" value="" tabindex="18"></label>
                </section>  
        <section class="col col-6">
                  <label class="label">Frais D'entretien:</label>
                  <label class="input"><i class="icon-append icon-money"></i>
                  <input name="frais_entretien" id="frais_entretien" type="text" value="" tabindex="19"></label>
                </section>  
        <section class="col col-6">
                  <label class="label">Partenaire Logo:</label>
                  <label class="input"><i class="icon-append icon-picture"></i>
                  <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                  <input type="file" name="sponsor" id="sponsor" tabindex="20"/></label>
                </section>  	
                </div>	
                </fieldset>
			 <footer>
             <input type="submit"  class="button large" id="send-message" value="Ajouter" tabindex="21" style="width:30%; margin-right:340px;">
                </footer>
            </form>
      
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
<script src="js/ajoute.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>