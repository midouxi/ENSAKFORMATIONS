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
  <!--------------------# 1 ere Affichage #------------------------>
  <?php

	if(!(empty($_POST['id_formations']))){
		
		$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
		$extension_upload = strtolower(  substr(  strrchr($_FILES['logo']['name'], '.')  ,1)  );
		$nom_logo = "images/".$_POST['id_formations']."-logo.{$extension_upload}";
			if ($_FILES['logo']['error'] > 0) $erreur = "Erreur lors du transfert";
			{
				if ($_FILES['logo']['size'] <= 80000000000) $erreur = "Le fichier est trop gros";
				{
					
					if ( in_array($extension_upload,$extensions_valides) )
					{
						$image_sizes = getimagesize($_FILES['logo']['tmp_name']);
						if ($image_sizes[0] > 8000 OR $image_sizes[1] > 8000) $erreur = "Image trop grande";
						{
							move_uploaded_file($_FILES['logo']['tmp_name'],$nom_logo);
						}

					}
						
				}
			}
		$extension_upload2 = strtolower(  substr(  strrchr($_FILES['icone']['name'], '.')  ,1)  );
		$nom_icone = "images/".$_POST['id_formations'].".{$extension_upload}";
			if ($_FILES['icone']['error'] > 0) $erreur = "Erreur lors du transfert";
			{
				if ($_FILES['icone']['size'] <= 8000000) $erreur = "Le fichier est trop gros";
				{
					
					if ( in_array($extension_upload2,$extensions_valides) )
					{
						$image_sizes = getimagesize($_FILES['icone']['tmp_name']);
						if ($image_sizes[0] > 8000 OR $image_sizes[1] > 8000) $erreur = "Image trop grande";
						{
							move_uploaded_file($_FILES['icone']['tmp_name'],$nom_icone);
						}

					}
						
				}
			}
		$extension_upload3 = strtolower(  substr(  strrchr($_FILES['sponsor']['name'], '.')  ,1)  );
		$nom_sponsor = "images/sponsor-".$_POST['id_formations'].".{$extension_upload}";
			if ($_FILES['sponsor']['error'] > 0) $erreur = "Erreur lors du transfert";
			{
				if ($_FILES['sponsor']['size'] <= 8000000) $erreur = "Le fichier est trop gros";
				{
					
					if ( in_array($extension_upload3,$extensions_valides) )
					{
						$image_sizes = getimagesize($_FILES['sponsor']['tmp_name']);
						if ($image_sizes[0] > 8000 OR $image_sizes[1] > 8000) $erreur = "Image trop grande";
						{
							move_uploaded_file($_FILES['sponsor']['tmp_name'],$nom_sponsor);
						}

					}
						
				}
			}
		
		    include_once "formations.class.php";
            include_once "formationsmanager.php";

                $formationsmanager = new formationsmanager();
                $formations = new formations($_POST['id_formations'], $_POST['menu_titre'], $_POST['niveau'], $nom_logo, $_POST['titre'], $_POST['nbr_semestre'],$_POST['domaine'], $_POST['type_formations'], $_POST['duree'], $_POST['email'], $_POST['telephone'], $_POST['fax'], $nom_icone, $_POST['condition_admission'], $_POST['organisation_formations'], $_POST['date_depot'], $_POST['date_entretien'], $_POST['frais_formations'], $_POST['frais_entretien'], $nom_sponsor);

                $formationsmanager->add($formations);
	
		 
					
?>
<div class="body">			
        <form action="" method="post" class="sky-form" enctype="multipart/form-data">
        	<header>
        		<h1>Semestres</h1>
            </header>
            <fieldset>
            	<div class="row">
            		<?php
							for($i=1;$i<=$_POST['nbr_semestre'];$i++)
							{
					?>
        			<section class="col col-6">
                  		<label class="label">Nombre de Module du Semestre <?php echo $i;?> :</label>
                  		<label class="input"><i class="icon-append icon-info"></i>
                  		<input name="nbr_module<?php echo $i;?>" id="nbr_module" type="text" value="" tabindex=""></label>
                  		<input name="id_semestre<?php echo $i;?>" type="hidden" value="<?php echo $_POST['id_formations'].'-S'.$i;?>">
                  		<input name="id_formations2" type="hidden" value="<?php echo $_POST['id_formations']?>">
                  		<input name="nbr_semestre2" type="hidden" value="<?php echo $_POST['nbr_semestre']?>">
              		</section>
				    <?php
				    		}	
				    ?>      	
             	</div>	
            </fieldset>
			<footer>
            	<input type="submit"  class="button large" value="Entrer" tabindex="">
            </footer>
        </form>
</div>     
	<?php 	}
	?> 
	<!--------------------# 2 eme Affichage #------------------------>
	<?php
  		if(!(empty($_POST['nbr_semestre2']))){
  			for($h=1;$h<=$_POST['nbr_semestre2'];$h++){
				if(!(empty($_POST['nbr_module'.$h.'']))){
				
		    		include_once "semestre.class.php";
            		include_once "semestremanager.php";

                	$semestremanager = new semestremanager();
            	    $semestre = new semestre($_POST['id_semestre'.$h.''], $_POST['nbr_module'.$h.''], $_POST['id_formations2']);
        	       	$semestremanager->add($semestre);
         
            	}
			}
		
	?>
	<div class="body">			
        <form action="" method="post" class="sky-form" enctype="multipart/form-data">
        	<header>
        		<h1>Modules</h1>
            </header>
            <fieldset>
            	<?php
							for($i=1;$i<=$_POST['nbr_semestre2'];$i++)
							{
					?>
            	<div class="row">
            		
                  	<h1>Semestre <?php echo $i;?> :</h1>
                  	<?php
                  			
							for($j=1;$j<=$_POST['nbr_module'.$i.''];$j++)
							{
					?>
        			<section class="col col-6">
                  		<label class="label">Nom Module <?php echo $j;?> :</label>
                  		<label class="input"><i class="icon-append icon-info"></i>
                  		<input name="nom_module<?php echo $i;?><?php echo $j;?>" id="nom_module" type="text" value=""></label>
                  		<input name="id_semestre<?php echo $i;?>" type="hidden" value="<?php echo 'Semestre '.$i;?>">
                  		<input name="id_formations3" type="hidden" value="<?php echo $_POST['id_formations2']?>">
                  		<input name="id_module<?php echo $i;?><?php echo $j;?>" type="hidden" value="<?php echo $_POST['id_formations2'].'-S'.$i.'-M'.$j;?>">
                  		<input name="nbr_module<?php echo $i;?>" type="hidden" value="<?php echo $_POST['nbr_module'.$i.'']?>">
                  		<input name="nbr_semestre3" type="hidden" value="<?php echo $i;?>">
              		</section>
				    <?php
				    		}	
				    ?>
				    </div>	
				    <?php 
				    	}
				    ?>	      	
             	
            </fieldset>
			<footer>
            	<input type="submit"  class="button large" value="Entrer" tabindex="">
            </footer>
        </form>
    </div>
    <?php 	}
    ?> 
    <!--------------------# 3 eme Affichage #------------------------>
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
    <a href="pageadmin.php">Revenire à la page d'Administrateur</a>
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
