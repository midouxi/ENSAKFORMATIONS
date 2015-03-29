<?php 
include("../Model/connect.php");
$title="ENSA Khouribga - Mise à jour";
include("../Layouts/headstatic.php");
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <?php $administrateur1="current";
      include("../Layouts/menuadmin.php");?>
      <div class="clear"></div>   
    </header> 
  </div>

  <div class="body">
  <!-------------------# 1 ere Affichage # ------------------> 
  <?php
    include("../Model/functdb.php");
    $functdb = new functdb();
    if (isset($_POST['id_page'])) {
      $functdb->getformationlinewithid($_POST['id_page']);        
  ?>        
    <form action="" method="post" class="sky-form" enctype="multipart/form-data">
      <header>
        <h1>Mettre a jour du Formations <?php echo $ligne_ins[2].' '.$ligne_ins[1];?></h1>
      </header>
      <fieldset>
      <div class="row">
        <section class="col col-6">
          <label class="label">Id Formations:</label>
          <label class="input"><i class="icon-append icon-key"></i>
          <input type="hidden" name="id_formations" id="id_formations" value="<?php echo $ligne_ins[0];?>">  
          <input  type="text" name="disabled" value="<?php echo $ligne_ins[0];?>" tabindex="1" disabled></label>
        </section>

        <section class="col col-6">
          <label class="label">Titre du Menu:</label>
          <label class="input"><i class="icon-append icon-info"></i>
          <input name="menu_titre" id="menu_titre" type="text" value="<?php echo $ligne_ins[1];?>" tabindex="2"></label>
        </section> 

        <section class="col col-6">
          <label class="label">Niveau:</label>
          <label class="input"><i class="icon-append icon-info"></i>
          <input name="niveau" id="niveau" type="text" value="<?php echo $ligne_ins[2];?>" tabindex="3"></label>
        </section> 

        <section class="col col-6">
          <label class="label">Titre:</label>
          <label class="input"><i class="icon-append icon-info"></i>
          <input name="titre" id="titre" type="text" value="<?php echo $ligne_ins[4];?>" tabindex="4"></label>
        </section>

        <section class="col col-6">
          <label class="label">Nombre de Semestre:</label>
          <label class="input"><i class="icon-append icon-info"></i>
          <input type="hidden" name="nbr_semestre" id="nbr_semestre" value="<?php echo $ligne_ins[5];?>">  
          <input name="semestre" id="semestre" type="text" value="<?php echo $ligne_ins[5];?>" tabindex="7" disabled></label>
        </section>  

        <section class="col col-6">
          <label class="label">Domaine:</label>
          <label class="input"><i class="icon-append icon-info"></i>
          <input name="domaine" id="domaine" type="text" value="<?php echo $ligne_ins[6];?>" tabindex="8"></label>
        </section>

        <section class="col col-6">
          <label class="label">Type de formations:</label>
          <label class="input"><i class="icon-append icon-info"></i>
          <input name="type_formations" id="type_formations" type="text" value="<?php echo $ligne_ins[7];?>" tabindex="9"></label>
        </section>  

        <section class="col col-6">
          <label class="label">Durée:</label>
          <label class="input"><i class="icon-append icon-time"></i>
          <input name="duree" id="duree" type="text" value="<?php echo $ligne_ins[8];?>" tabindex="10"></label>
        </section> 

        <section class="col col-6">
          <label class="label">Email:</label>
          <label class="input"><i class="icon-append icon-envelope-alt"></i>
          <input name="email" id="email" type="email" value="<?php echo $ligne_ins[9];?>" tabindex="11"></label>
        </section>

        <section class="col col-6">
          <label class="label">Télephone:</label>
          <label class="input"><i class="icon-append icon-phone"></i>
          <input name="telephone" id="phone" type="text" value="<?php echo $ligne_ins[10];?>" tabindex="12"></label>
        </section>

        <section class="col col-6">
          <label class="label">Fax:</label>
          <label class="input"><i class="icon-append fa-phone-square"></i>
          <input name="fax" id="fax" type="text" value="<?php echo $ligne_ins[11];?>" tabindex="13"></label>
        </section>

        <section class="col col-6">
          <label class="label">Condition d'admission:</label>
          <label class="textarea textarea-expandable textarea-resizable"><i class="icon-append icon-info"></i>
          <textarea name="condition_admission" id="condition_admission" tabindex="14"><?php echo $ligne_ins[13];?></textarea></label>
        </section> 

        <section class="col col-6">
          <label class="label">Organisation de la formation:</label>
          <label class="textarea textarea-expandable textarea-resizable"><i class="icon-append icon-info"></i>
          <textarea name="organisation_formations" id="organisation_formations" tabindex="15"><?php echo $ligne_ins[14];?></textarea></label>
        </section>

        <section class="col col-6">
          <label class="label">Calendrier Date de depot dossier:</label>
          <label class="input"><i class="icon-append icon-calendar"></i>
          <input name="date_depot" id="date_depot" type="text" value="<?php echo $ligne_ins[15];?>" tabindex="16"></label>
        </section> 

        <section class="col col-6">
          <label class="label">Calendrier Date d'entretien:</label>
          <label class="input"><i class="icon-append icon-calendar"></i>
          <input name="date_entretien" id="date_entretien" type="text" value="<?php echo $ligne_ins[16];?>" tabindex="17"></label>
        </section>  

        <section class="col col-6">
          <label class="label">Frais De Formations:</label>
          <label class="input"><i class="icon-append icon-money"></i>
          <input name="frais_formations" id="frais_formations" type="text" value="<?php echo $ligne_ins[17];?>" tabindex="18"></label>
        </section>  

        <section class="col col-6">
          <label class="label">Frais D'entretien:</label>
          <label class="input"><i class="icon-append icon-money"></i>
          <input name="frais_entretien" id="frais_entretien" type="text" value="<?php echo $ligne_ins[18];?>" tabindex="19"></label>
        </section>  
      </div>  
    </fieldset>
    <footer>
      <input type="hidden" name="logos" value="<?php echo $ligne_ins[3];?>"/>
      <input type="hidden" name="debouche" value="<?php echo $ligne_ins[12];?>"/>
      <input type="hidden" name="partenaire" value="<?php echo $ligne_ins[19];?>"/>
      <input type="submit"  class="button large" id="send-message" value="Mettre à jour" tabindex="20" style="width:30%; margin-right:340px;">
    </footer>
  </form>
  <?php } ?>
  <!-------------------# 2 eme Affichage # ------------------>
  <?php
  if(!(empty($_POST['id_formations']))){
    $id=$_POST['id_formations'];
    
    include_once "../Controller/formationsmanager.php";

    $formationsmanager = new formationsmanager();
    $formations = new formations($_POST['id_formations'], $_POST['menu_titre'], $_POST['niveau'], $_POST['logos'], $_POST['titre'], $_POST['nbr_semestre'],$_POST['domaine'], $_POST['type_formations'], $_POST['duree'], $_POST['email'], $_POST['telephone'], $_POST['fax'], $_POST['debouche'], $_POST['condition_admission'], $_POST['organisation_formations'], $_POST['date_depot'], $_POST['date_entretien'], $_POST['frais_formations'], $_POST['frais_entretien'], $_POST['partenaire']);
    $formationsmanager->update($formations);      
  ?>
  <div class="body">      
    <form action="" method="post" class="sky-form" enctype="multipart/form-data">
      <header>
        <h1>Semestres</h1>
      </header>
      <fieldset>
        <div class="row">
          <?php
          for($i=1;$i<=$_POST['nbr_semestre'];$i++) {
            $all_nbr_module=mysql_query("select count(id_semestre) from module where id_formations='$id' AND id_semestre='Semestre $i'");//bloc sql non encapsulable .
            $ligne_nbr_module=mysql_fetch_array($all_nbr_module);
          ?>
          <section class="col col-6">
            <label class="label">Nombre de Module du Semestre <?php echo $i;?> :</label>
            <label class="input"><i class="icon-append icon-info"></i>
            <input name="module<?php echo $i;?>" id="module" type="text" value="<?php echo $ligne_nbr_module[0];?>" tabindex="" disabled></label>
            <input name="nbr_module<?php echo $i;?>" id="nbr_module" type="hidden" value="<?php echo $ligne_nbr_module[0];?>" ></label>
            <input name="id_semestre<?php echo $i;?>" type="hidden" value="<?php echo $_POST['id_formations'].'-S'.$i;?>">
            <input name="id_formations2" type="hidden" value="<?php echo $_POST['id_formations']?>">
            <input name="nbr_semestre2" type="hidden" value="<?php echo $_POST['nbr_semestre']?>">
          </section>
          <?php } ?>        
        </div>  
      </fieldset>
      <footer>
        <input type="submit"  class="button large" value="Entrer" tabindex="">
      </footer>
    </form>
  </div>     
  <?php } ?>
  <!-------------------# 3 eme Affichage # ------------------>
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
   } 
  ?>
  <div class="body">      
    <form action="" method="post" class="sky-form" enctype="multipart/form-data">
      <header>
        <h1>Modules</h1>
      </header>
      <fieldset>
        <?php
        for($i=1;$i<=$_POST['nbr_semestre2'];$i++) {
        ?>
        <div class="row">
          <h1>Semestre <?php echo $i;?> :</h1>
          <?php       
            for($j=1;$j<=$_POST['nbr_module'.$i.''];$j++) {
              $all_nom_module=mysql_query("select nom_module from module where id_module='$id-S$i-M$j'"); //bloc sql non encapsulable .
              $ligne_nom_module=mysql_fetch_array($all_nom_module);
            ?>
          <section class="col col-6">
            <label class="label">Nom Module <?php echo $j;?> :</label>
            <label class="input"><i class="icon-append icon-info"></i>
            <input name="nom_module<?php echo $i;?><?php echo $j;?>" id="nom_module" type="text" value="<?php print($ligne_nom_module[0]); ?>"></label>
            <input name="id_semestre<?php echo $i;?>" type="hidden" value="<?php echo 'Semestre '.$i;?>">
            <input name="id_formations3" type="hidden" value="<?php echo $_POST['id_formations2']?>">
            <input name="id_module<?php echo $i;?><?php echo $j;?>" type="hidden" value="<?php echo $_POST['id_formations2'].'-S'.$i.'-M'.$j;?>">
            <input name="nbr_module<?php echo $i;?>" type="hidden" value="<?php echo $_POST['nbr_module'.$i.'']?>">
            <input name="nbr_semestre3" type="hidden" value="<?php echo $i;?>">
          </section>
          <?php } ?>
        </div>  
        <?php } ?>          
      </fieldset>
      <footer>
        <input type="submit"  class="button large" value="Entrer" tabindex="">
      </footer>
    </form>
  </div>
  <?php } ?> 
  <!--------------------# 4 eme Affichage #------------------------>

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

  <div class='body sky'>
    <h3>Mise à jour de la formation s'est déroulée avec succès</h3>
    <a href="pageadmin.php">Revenir à la page d'Administrateur</a>
  </div>
  <?php } ?>  
  <!-------------------# fin Affichge # ------------------>
</div>
<?php include("../Layouts/footerstatic.php");?>
</body>
</html>