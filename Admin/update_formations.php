<?php 
include("../Model/connect.php");
$title="ENSA Khouribga - Mise à jour";
include("../Layouts/headstatic.php");
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
        <h2 class="title">Mettre à jour une formation</h2>
      </div>
  <!-- page content -->
  <div class="form-area">
    <div class="container">
      <div class="col-lg-12">
        <!-- # 1 ere Affichage # --> 
        <?php
          include("../Model/functdb.php");
          $functdb = new functdb();
          if (isset($_POST['id_page'])) {      
        ?>        
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <h1 class="title-center">Mettre à jour de la formation "<?php echo $functdb->getformationlinewithid($_POST['id_page'],2).' '.$functdb->getformationlinewithid($_POST['id_page'],1);?>"</h1>
            <fieldset>
                <div class="form-group col-lg-12">
                  <label for="id_formations" class="col-lg-4 control-label">Id Formations : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input type="hidden" name="id_formations" id="id_formations" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],0);?>">
                      <input type="text" name="disabled" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],0);?>" tabindex="1" disabled class="form-control" placeholder="Id Formations">
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-asterisk"></span>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="menu_titre" class="col-lg-4 control-label">Titre du Menu : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input name="menu_titre" id="menu_titre" type="text" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],1);?>" tabindex="2" class="form-control" placeholder="Titre du Menu">
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-text-size"></span>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="niveau" class="col-lg-4 control-label">Niveau : </label>
                  <div class="col-lg-6">
                    <select class="form-control" name="niveau" id="niveau"  tabindex="7">
                      <option value="" selected>--Choisir--</option>
                      <option value="Licence">Licence</option>
                      <option value="Master">Master</option>
                    </select>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="titre" class="col-lg-4 control-label">Titre : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="titre" id="titre" type="text" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],4);?>" tabindex="4" class="form-control" placeholder="Titre">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-text-size"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="semestre" class="col-lg-4 control-label">Nombre de Semestre : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <input type="hidden" name="nbr_semestre" id="nbr_semestre" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],5);?>">
                        <input name="semestre" id="semestre" type="text" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],5);?>" tabindex="7" disabled class="form-control" placeholder="Nombre de Semestre">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-list-alt"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="domaine" class="col-lg-4 control-label">Domaine : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="domaine" id="domaine" type="text" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],6);?>" tabindex="8" class="form-control" placeholder="Domaine">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-briefcase"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="type_formations" class="col-lg-4 control-label">Type de formations : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="type_formations" id="type_formations" type="text" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],7);?>" tabindex="9" class="form-control" placeholder="Type de formations">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-tag"></span>
                        </span>
                      </div>
                  </div>
                </div>  

                <div class="form-group col-lg-12">
                  <label for="duree" class="col-lg-4 control-label">Durée : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="duree" id="duree" type="text" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],8);?>" tabindex="10" class="form-control" placeholder="Durée">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-hourglass"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="email" class="col-lg-4 control-label">Email : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="email" id="email" type="email" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],9);?>" tabindex="11" class="form-control" placeholder="Email">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="phone" class="col-lg-4 control-label">Télephone : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="telephone" id="phone" type="text" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],10);?>" tabindex="12" class="form-control" placeholder="Télephone">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-earphone"></span>
                        </span>
                      </div>
                  </div>
                </div> 

                <div class="form-group col-lg-12">
                  <label for="fax" class="col-lg-4 control-label">Fax : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="fax" id="fax" type="text" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],11);?>" tabindex="13" class="form-control" placeholder="Fax">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-print"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="condition_admission" class="col-lg-4 control-label">Condition d'admission : </label>
                  <div class="col-lg-6">
                    <textarea class="form-control" name="condition_admission" id="condition_admission" tabindex="14"><?php echo $functdb->getformationlinewithid($_POST['id_page'],13);?></textarea>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="organisation_formations" class="col-lg-4 control-label">Organisation de la formation : </label>
                  <div class="col-lg-6">
                    <textarea class="form-control" name="organisation_formations" id="organisation_formations" tabindex="15"><?php echo $functdb->getformationlinewithid($_POST['id_page'],14);?></textarea>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="date_depot" class="col-lg-4 control-label">Calendrier Date de depot dossier : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="date_depot" id="date_depot" type="text" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],15);?>" tabindex="16" class="form-control" placeholder="Calendrier Date de depot dossier">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                  </div>
                </div> 

                <div class="form-group col-lg-12">
                  <label for="date_entretien" class="col-lg-4 control-label">Calendrier Date d'entretien : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="date_entretien" id="date_entretien" type="text" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],16);?>" tabindex="17" class="form-control" placeholder="Calendrier Date d'entretien">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                  </div>
                </div>    

                <div class="form-group col-lg-12">
                  <label for="frais_formations" class="col-lg-4 control-label">Frais De Formations : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="frais_formations" id="frais_formations" type="text" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],17);?>" tabindex="18" class="form-control" placeholder="Frais De Formations">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-usd"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="frais_entretien" class="col-lg-4 control-label">Frais D'entretien : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="frais_entretien" id="frais_entretien" type="text" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],18);?>" tabindex="19" class="form-control" placeholder="Frais D'entretien">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-usd"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="partenaire" class="col-sm-4 control-label">Partenaire Logo : </label>
                  <div class="col-sm-6">
                      <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
                        <input type="hidden" name="MAX_FILE_SIZE" value="100048576"/>
                        <input type="file" name="partenaire" id="partenaire" tabindex="4" style="display:none">
                        <input type="text" id="imagepartenaire" class="form-control">
                        <span class="input-group-btn">
                          <botton class="btn btn-browse" onclick="$('input[id=partenaire]').click();">Browse</botton>
                        </span>
                      </div>
                    </div>
                  <div class="col-sm-2"><img src="<?php echo $functdb->getformationlinewithid($_POST['id_page'],19); ?>" style="height:auto; width:100%;"></div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="icone" class="col-sm-4 control-label">Débouché de la formation : </label>
                  <div class="col-sm-6">
                      <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
                        <input type="hidden" name="MAX_FILE_SIZE" value="100048576"/>
                        <input type="file" name="debouche" id="debouche" tabindex="4" style="display:none">
                        <input type="text" id="imagedebouche" class="form-control">
                        <span class="input-group-btn">
                          <botton class="btn btn-browse" onclick="$('input[id=debouche]').click();">Browse</botton>
                        </span>
                      </div>
                    </div>
                  <div class="col-sm-2"><img src="<?php echo $functdb->getformationlinewithid($_POST['id_page'],12); ?>" style="height:auto; width:100%;"></div>
                </div>

              <div class="form-group col-lg-12">
                <div class="col-lg-6 col-lg-offset-4">
                  <input type="hidden" name="logos" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],3);?>"/>
                  <input type="hidden" name="debouche" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],12);?>"/>
                  <input type="hidden" name="partenaire" value="<?php echo $functdb->getformationlinewithid($_POST['id_page'],19);?>"/>
                  <input type="submit"  class="btn btn-valide" id="send-message" value="Mettre à jour" tabindex="20">
                </div>
              </div> 
          </fieldset>
        </form>
        <?php } ?>
        <!-- # 2 eme Affichage # -->
        <?php
        if(!(empty($_POST['id_formations']))){
          include_once "../Controller/formationsmanager.php";
          include "../Controller/chargerfichier.php"; 

          $id=$_POST['id_formations'];
          $charger=new charger();

          if(!(empty($_FILES['partenaire']['name']))){
            $partenaire=$charger->addfile($id,$_FILES['partenaire'],"sponsor");
          } else { $partenaire=$_POST['partenaire'] ;}

          if(!(empty($_FILES['debouche']['name']))){
            $debouche=$charger->addfile($id,$_FILES['debouche'],"icone");
          } else { $debouche=$_POST['debouche'] ;}
          
          $formationsmanager = new formationsmanager();
          $formations = new formations($_POST['id_formations'], $_POST['menu_titre'], $_POST['niveau'], $_POST['logos'], $_POST['titre'], $_POST['nbr_semestre'],$_POST['domaine'], $_POST['type_formations'], $_POST['duree'], $_POST['email'], $_POST['telephone'], $_POST['fax'], $debouche, $_POST['condition_admission'], $_POST['organisation_formations'], $_POST['date_depot'], $_POST['date_entretien'], $_POST['frais_formations'], $_POST['frais_entretien'], $partenaire);
          $formationsmanager->update($formations);      
        ?>     
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <h1 class="title-center">Semestres</h1>
            <fieldset>
                <?php
                for($i=1;$i<=$_POST['nbr_semestre'];$i++) {
                  $all_nbr_module=$_db->query("select count(id_semestre) from module where id_formations='$id' AND id_semestre='Semestre $i'");
                  $all_nbr_module->setFetchMode(PDO::FETCH_NUM);
                  $ligne_nbr_module=$all_nbr_module->fetch();
                ?>
                <div class="form-group col-lg-12">
                  <label class="col-lg-4 control-label">Nombre de Module du Semestre <?php echo $i;?> : </label>
                  <div class="col-lg-6">
                    <input class="form-control" name="module<?php echo $i;?>" id="module" type="text" value="<?php echo $ligne_nbr_module[0];?>" tabindex="" disabled>
                    <input name="nbr_module<?php echo $i;?>" id="nbr_module" type="hidden" value="<?php echo $ligne_nbr_module[0];?>" >
                    <input name="id_semestre<?php echo $i;?>" type="hidden" value="<?php echo $_POST['id_formations'].'-S'.$i;?>">
                    <input name="id_formations2" type="hidden" value="<?php echo $_POST['id_formations']?>">
                    <input name="nbr_semestre2" type="hidden" value="<?php echo $_POST['nbr_semestre']?>">
                  </div>
                </div>
                <?php } ?>
                <div class="form-group col-lg-12">
                  <div class="col-lg-6 col-lg-offset-4">
                    <input type="submit"  class="btn btn-valide" value="Entrer" tabindex="">
                  </div>
                </div>
            </fieldset>
          </form>  
        <?php } ?>
        <!-- # 3 eme Affichage #  -->
        <?php
        if(!(empty($_POST['nbr_semestre2']))) { 
          for($h=1;$h<=$_POST['nbr_semestre2'];$h++) {
            if(!(empty($_POST['nbr_module'.$h.'']))) {
              $id=$_POST['id_formations2'];

              include_once "../Controller/semestremanager.php";

              $semestremanager = new semestremanager();
              $semestre = new semestre($_POST['id_semestre'.$h.''], $_POST['nbr_module'.$h.''], $_POST['id_formations2']);
              $semestremanager->update($semestre);
               
            }
          }
        ?>  
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
            <h1 class="title-center">Modules</h1>
            <fieldset>
              <?php
              for($i=1;$i<=$_POST['nbr_semestre2'];$i++) {
              ?>
                <h3 class="title-center">Semestre <?php echo $i;?></h3>
                <?php       
                  for($j=1;$j<=$_POST['nbr_module'.$i.''];$j++) {
                    $all_nom_module=$_db->query("select nom_module from module where id_module='$id-S$i-M$j'");
                    $all_nom_module->setFetchMode(PDO::FETCH_NUM);
                    $ligne_nom_module=$all_nom_module->fetch();
                  ?>
                  <div class="form-group col-lg-12">
                  <label class="col-lg-4 control-label">Nom Module <?php echo $j;?> : </label>
                  <div class="col-lg-6">
                    <input class="form-control" name="nom_module<?php echo $i;?><?php echo $j;?>" id="nom_module" type="text" value="<?php print($ligne_nom_module[0]); ?>">
                    <input name="id_semestre<?php echo $i;?>" type="hidden" value="<?php echo 'Semestre '.$i;?>">
                    <input name="id_formations3" type="hidden" value="<?php echo $_POST['id_formations2']?>">
                    <input name="id_module<?php echo $i;?><?php echo $j;?>" type="hidden" value="<?php echo $_POST['id_formations2'].'-S'.$i.'-M'.$j;?>">
                    <input name="nbr_module<?php echo $i;?>" type="hidden" value="<?php echo $_POST['nbr_module'.$i.'']?>">
                    <input name="nbr_semestre3" type="hidden" value="<?php echo $i;?>">
                  </div>
                </div>
                <?php } ?>
              <?php } ?>
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
        if(!(empty($_POST['nbr_semestre3']))){
          for ($r=1; $r<=$_POST['nbr_semestre3']; $r++) { 
            for($h=1; $h<=$_POST['nbr_module'.$r.'']; $h++){
              if(!(empty($_POST['id_module'.$r.''.$h.'']))){
                include_once "../Controller/modulemanager.php";
                $modulemanager = new modulemanager();
                $module = new module($_POST['id_module'.$r.''.$h.''], $_POST['nom_module'.$r.''.$h.''], $_POST['id_semestre'.$r.''], $_POST['id_formations3']);
                $modulemanager->update($module);
              }
            }
          }
        ?> 
        <div class="container">
          <div class="col-lg-12 delete-content">
            <h1 class="title-center">Mise à jour de la formation s'est déroulée avec succès</h1>
            <a class="btn btn-valide" href="pageadmin.php">Revenir à la page d'Administrateur</a>
          </div>
        </div>
        <?php } ?>  
        <!-- # fin Affichge # -->
      </div>
    </div>
  </div>
  <?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>

  <script type="text/javascript">
    $('input[id=debouche]').change(function() {
      $('#imagedebouche').val($(this).val());
    });
    $('input[id=partenaire]').change(function() {
      $('#imagepartenaire').val($(this).val());
    });
  </script>
</body>
</html>