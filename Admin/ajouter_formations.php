<?php
$title="ENSA Khouribga - Ajout";
include("../Layouts/headstatic.php");
?>
<body>
    <!-- TOP BANNER -->
    <div class="col-lg-12">
        <div class="top-banner">
            <div class="col-lg-2">
                <img src="../images/logo-ensak.jpg">
            </div>
            <div class="col-lg-8">
                <h3>Universite Hassan 1<sup>er</sup></h3>
                <h4>Ecole Nationale des Sciences Appliquées de Khouribga</h4>
            </div>
            <div class="col-lg-2">
                <img src="../images/logo-uh1.png">
            </div>
        </div>
    </div>
    <!--==============================header=================================-->
    <?php $administrateur="active";
    include("../Layouts/menuadmin.php");?>
    <!-- top banner -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">NOUVEAU FORMATIONS</h1>
            </div>

            <div class="col-lg-4">
              <img src="../images/formation.png">
            </div>

          </div>
        </div>
      </div>
      <div class="sub">
        <h2 class="title">Nouveau Formations</h2>
      </div>
  <!-- # 1 ere Affichage # -->
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
    if(!(empty($_POST['nbr_semestre']))){		
	?>		
  <div class="form-area">
    <div class="container">
      <div class="col-lg-12">
        
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
          <h1 class="title-center">Semestres</h1>
            <fieldset>
            	<?php for($i=1;$i<=$_POST['nbr_semestre'];$i++) { ?>
                <div class="form-group col-lg-12">
                  <label class="col-lg-4 control-label">Nombre de Module du Semestre <?php echo $i;?> : </label>
                  <div class="col-lg-6">
                    <input class="form-control" name="nbr_module<?php echo $i;?>" id="nbr_module" type="text" value="" tabindex="">
                    <input name="id_semestre<?php echo $i;?>" type="hidden" value="<?php echo $_POST['id_formations'].'-S'.$i;?>">
                    <input name="id_formations2" type="hidden" value="<?php echo $_POST['id_formations']?>">
                    <input name="nbr_semestre2" type="hidden" value="<?php echo $_POST['nbr_semestre']?>">
                  </div>
                </div>
				      <?php }	?>      	
              <div class="form-group col-lg-12">
                <div class="col-lg-6 col-lg-offset-4">
                  <input type="submit"  class="btn btn-valide" value="Entrer" tabindex="">
                </div>
              </div>
            </fieldset>
        </form> 
      </div>
    </div>
  </div>   
  <?php } ?>
	<!-- # 2 eme Affichage # -->
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

  <div class="form-area">
    <div class="container">
      <div class="col-lg-12">
        <h1 class="title-center">Modules</h1>	
        <form action="" method="post" class="sky-form" enctype="multipart/form-data">
            <fieldset>
            	<?php for($i=1;$i<=$_POST['nbr_semestre2'];$i++) { ?>
                  <h3 class="title-center">Semestre <?php echo $i;?></h3>
                  <?php for($j=1;$j<=$_POST['nbr_module'.$i.''];$j++) { ?>
          			    <div class="form-group col-lg-12">
                    <label class="col-lg-4 control-label">Nom Module <?php echo $j;?> : </label>
                      <div class="col-lg-6">
                          <input class="form-control"name="nom_module<?php echo $i;?><?php echo $j;?>" id="nom_module" type="text" value="">
                          <input name="id_semestre<?php echo $i;?>" type="hidden" value="<?php echo 'Semestre '.$i;?>">
                          <input name="id_formations3" type="hidden" value="<?php echo $_POST['id_formations2']?>">
                          <input name="id_module<?php echo $i;?><?php echo $j;?>" type="hidden" value="<?php echo $_POST['id_formations2'].'-S'.$i.'-M'.$j;?>">
                          <input name="nbr_module<?php echo $i;?>" type="hidden" value="<?php echo $_POST['nbr_module'.$i.'']?>">
                          <input name="nbr_semestre3" type="hidden" value="<?php echo $i;?>">
                      </div>
                    </div>
				          <?php }	?>
				      <?php } ?>
              <div class="form-group col-lg-12">
                <div class="col-lg-6 col-lg-offset-4">
                  <input type="submit"  class="btn btn-valide" value="Entrer" tabindex="">
                </div>
              </div>	
            </fieldset>
        </form>
      </div>
    </div>
  </div>
    <?php } ?> 
    <!-- # 3 eme Affichage # -->
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
  <div class="container">
    <div class="col-lg-12 delete-content">
      <h1 class="title-center">La formation s'est ajoutée avec succès</h1>
	    <a class="btn btn-valide" href="pageadmin.php">Retour vers la page d'Administrateur</a>
      <div class="getfrom-bottom"></div>
    </div>
  </div>
  <?php } ?> 
</body>
</html>
