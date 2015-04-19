<?php 
include("../Model/connect.php");
$db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
$title="ENSA Khouribga - Ajout Semestre";
include("../Layouts/headstatic.php");
include ("../Model/functdb.php");
$getformation = new functdb();  
session_start();
  if (isset($_SESSION['email']) && isset($_SESSION['mdp'])&& $_SESSION['type']=="admin") {
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
      <?php $administrateur1="active";
      include("../Layouts/menuadmin.php");?>
      <!-- top banner -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">METTRE À JOUR FORMATION</h1>
            </div>

            <div class="col-lg-4">
              <img src="../images/formation.png">
            </div>

          </div>
        </div>
      </div>
      <div class="sub">
        <h2 class="title">Mettre à jour des semestres de la formation</h2>
      </div>
  <!-- page content -->
  <div class="form-area">
    <div class="container">
      <div class="col-lg-12">
        <!--# 1 ere Affichage # --> 
        <?php
          if (isset($_POST['id_page'])) {
        ?>        
        <form action="" method="post" class="sky-form" enctype="multipart/form-data">
          <h1 class="title-center">Mettre à jour les Semestre de la Formations <?php echo $getformation->getformationlinewithid($_POST['id_page'],2).' '.$getformation->getformationlinewithid($_POST['id_page'],1);?></h1>
                <div class="form-group col-lg-12">
                  <label for ="nv_nbr_semestre" class="col-lg-4 control-label">Nouveau Nombre De Semestre : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="nv_nbr_semestre" id="nv_nbr_semestre" type="text" value="<?php echo $getformation->getformationlinewithid($_POST['id_page'],5);?>" tabindex="1" class="form-control" placeholder="Nombre De Semestre">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-list-alt"></span>
                        </span>
                      </div>
                  </div>
                </div>
              <div class="form-group col-lg-12">
                <div class="col-lg-6 col-lg-offset-4">
                  <input type="hidden" name="id_formations" id="id_formations" value="<?php echo $id_page;?>">  
                  <input type="submit"  class="btn btn-valide" value="Mettre à jour Nombre De Semestre" tabindex="2">
                </div>
              </div>   
          </fieldset>
        </form>
        <?php } ?>
        <!--# 2 eme Affichage # -->
        <?php
          if (isset($_POST['nv_nbr_semestre'])) {
          $getformation->getnbrsemester($_POST['id_formations'],$_POST['nv_nbr_semestre']);
        ?>     
          <h1 class="title-center">Semestres</h1>
          <form action="" method="post" class="sky-form" enctype="multipart/form-data">
            <fieldset>
                <?php for($i=1;$i<=$_POST['nv_nbr_semestre'];$i++) { ?>
                <div class="form-group col-lg-12">
                  <label class="col-lg-4 control-label">Nombre de Module du Semestre <?php echo $i;?> :</label>
                  <div class="col-lg-6">
                    <input class="form-control" name="nbr_module<?php echo $i;?>" id="nbr_module" type="text" value="" tabindex="">
                    <input name="id_semestre<?php echo $i;?>" type="hidden" value="<?php echo $_POST['id_formations'].'-S'.$i;?>">
                    <input name="id_formations2" type="hidden" value="<?php echo $_POST['id_formations']?>">
                    <input name="nv_nbr_semestre2" type="hidden" value="<?php echo $_POST['nv_nbr_semestre']?>">
                  </div>
                </div>
                <?php }  ?>        
              <div class="form-group col-lg-12">
                <div class="col-lg-6 col-lg-offset-4">
                  <input type="submit"  class="btn btn-valide" value="Entrer" tabindex="">
                </div>
              </div>
            </fieldset>
          </form>  
        <?php } ?>
        <!-- # 3 eme Affichage # -->
        <?php
          if(!(empty($_POST['nv_nbr_semestre2']))){
            for($h=1;$h<=$_POST['nv_nbr_semestre2'];$h++){
              if(!(empty($_POST['nbr_module'.$h.'']))){
                include_once "../Controller/semestremanager.php";
                $semestremanager = new semestremanager();
                $semestre = new semestre($_POST['id_semestre'.$h.''], $_POST['nbr_module'.$h.''], $_POST['id_formations2']);
                $semestremanager->add($semestre);
              }
            }
        ?> 
          <h1 class="title-center">Modules</h1>
          <form action="" method="post" class="sky-form" enctype="multipart/form-data">
            <fieldset>
              <?php for($i=1;$i<=$_POST['nv_nbr_semestre2'];$i++) { ?>
                <h3 class="title-center">Semestre <?php echo $i;?> :</h3>
                <?php for($j=1;$j<=$_POST['nbr_module'.$i.''];$j++) { ?>
                  <div class="form-group col-lg-12">
                    <label class="col-lg-4 control-label">Nom Module <?php echo $j;?> :</label>
                      <div class="col-lg-6">
                          <input class="form-control" name="nom_module<?php echo $i;?><?php echo $j;?>" id="nom_module" type="text" value="">
                          <input name="id_semestre<?php echo $i;?>" type="hidden" value="<?php echo 'Semestre '.$i;?>">
                          <input name="id_formations3" type="hidden" value="<?php echo $_POST['id_formations2']?>">
                          <input name="id_module<?php echo $i;?><?php echo $j;?>" type="hidden" value="<?php echo $_POST['id_formations2'].'-S'.$i.'-M'.$j;?>">
                          <input name="nbr_module<?php echo $i;?>" type="hidden" value="<?php echo $_POST['nbr_module'.$i.'']?>">
                          <input name="nv_nbr_semestre3" type="hidden" value="<?php echo $i;?>">
                      </div>
                    </div>
                <?php } ?> 
              <?php  } ?>
              <div class="form-group col-lg-12">
                <div class="col-lg-6 col-lg-offset-4">
                  <input type="submit"  class="btn btn-valide" value="Entrer" tabindex="">
                </div>
              </div>         
            </fieldset>
          </form>
        <?php } ?> 
        <!-- # 4 eme Affichage # -->
        <?php
        if(!(empty($_POST['nv_nbr_semestre3']))){
          for ($r=1; $r<=$_POST['nv_nbr_semestre3']; $r++) { 
            for($h=1; $h<=$_POST['nbr_module'.$r.'']; $h++) {
              if(!(empty($_POST['id_module'.$r.''.$h.'']))) {
                include_once "../Controller/modulemanager.php";
                $modulemanager = new modulemanager();
                $module = new module($_POST['id_module'.$r.''.$h.''], $_POST['nom_module'.$r.''.$h.''], $_POST['id_semestre'.$r.''], $_POST['id_formations3']);
                $modulemanager->update($module);
              }
            }
          }
        ?> 
        <div class="container">
          <div class='col-lg-12 delete-content'>
            <h1 class="title-general">La Mise à jour des semestres s'est déroulée avec succès</h1>
            <a class="btn btn-valide" href="pageadmin.php">Revenir à la page d'Administrateur</a>
            <div class="getfrom-bottom"></div>
          </div>
        </div>
        <?php }?>  
      </div>
    </div>
  </div>
  <?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>
</body>
</html>