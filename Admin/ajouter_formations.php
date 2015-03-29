<?php
$title="ENSA Khouribga - Ajout";
include("../Layouts/headstatic.php");
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
      	<a class="logo" href="../index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <?php $administrateur="current";
      include("../Layouts/menuadmin.php");?>
      <div class="clear"></div>	  
    </header> 
  </div>
  <!--------------------# 1 ere Affichage #------------------------>
  <?php
  include "../Controller/chargerfichier.php"; 
  include_once "../Classes/formations.class.php";
  include_once "../Controller/formationsmanager.php";
  if(!(empty($_POST['id_formations']))){
	$charger=new charger();
	$nom_logo=$charger->addfile($_POST['id_formations'],$_FILES['logo'],"logo");
	$nom_icone=$charger->addfile($_POST['id_formations'],$_FILES['icone'],"icone");
	$nom_sponsor=$charger->addfile($_POST['id_formations'],$_FILES['sponsor'],"sponsor");
  }
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
            		<?php for($i=1;$i<=$_POST['nbr_semestre'];$i++) { ?>
        			<section class="col col-6">
                  		<label class="label">Nombre de Module du Semestre <?php echo $i;?> :</label>
                  		<label class="input"><i class="icon-append icon-info"></i>
                  		<input name="nbr_module<?php echo $i;?>" id="nbr_module" type="text" value="" tabindex=""></label>
                  		<input name="id_semestre<?php echo $i;?>" type="hidden" value="<?php echo $_POST['id_formations'].'-S'.$i;?>">
                  		<input name="id_formations2" type="hidden" value="<?php echo $_POST['id_formations']?>">
                  		<input name="nbr_semestre2" type="hidden" value="<?php echo $_POST['nbr_semestre']?>">
              		</section>
				    <?php }	?>      	
             	</div>	
            </fieldset>
			<footer>
            	<input type="submit"  class="button large" value="Entrer" tabindex="">
            </footer>
        </form>
	</div>     
	<!--------------------# 2 eme Affichage #------------------------>
	<?php
  		if(!(empty($_POST['nbr_semestre2']))){
  			for($h=1;$h<=$_POST['nbr_semestre2'];$h++){
				if(!(empty($_POST['nbr_module'.$h.'']))){
		    		include_once "../Classes/semestre.class.php";
            		include_once "../Controller/semestremanager.php";
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
            	<?php for($i=1;$i<=$_POST['nbr_semestre2'];$i++) { ?>
            	<div class="row">
                  	<h1>Semestre <?php echo $i;?> :</h1>
                  	<?php for($j=1;$j<=$_POST['nbr_module'.$i.''];$j++) { ?>
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
				    <?php }	?>
				    </div>	
				    <?php } ?>	      	
            </fieldset>
			<footer>
            	<input type="submit"  class="button large" value="Entrer" tabindex="">
            </footer>
        </form>
    </div>
    <?php } ?> 
    <!--------------------# 3 eme Affichage #------------------------>
    <?php
		if(!(empty($_POST['nbr_semestre3']))){
		  for ($r=1; $r<=$_POST['nbr_semestre3']; $r++) { 
				for($h=1; $h<=$_POST['nbr_module'.$r.'']; $h++){
				if(!(empty($_POST['id_module'.$r.''.$h.'']))){
			    	include_once "../Classes/module.class.php";
		        	include_once "../Controller/modulemanager.php";
		    		$modulemanager = new modulemanager();
			    	$module = new module($_POST['id_module'.$r.''.$h.''], $_POST['nom_module'.$r.''.$h.''], $_POST['id_semestre'.$r.''], $_POST['id_formations3']);
		       		$modulemanager->add($module);
		        }
			}
		}
	?> 
  <div class='body sky'>
    <h3>La formation s'est ajoutée avec succès</h3>
	<a href="pageadmin.php">Retour vers la page d'Administrateur</a>
  </div>
  <?php } ?> 
<?php include("../Layouts/footerstatic.php");?>
</body>
</html>
