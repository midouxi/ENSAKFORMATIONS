<?php 
if(!$connect=mysql_connect("localhost","root","")) mysql_error();
if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
$db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
$title="ENSA Khouribga - Ajout Semestre";
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
            if (isset($_POST['id_page'])) {
              $id_page=$_POST['id_page'];
                   
                    $all_ins=mysql_query("select * from formations where id_formations='$id_page'");
                    $ligne_ins=mysql_fetch_array($all_ins);
                    
                          
                   
      ?>        
        <form action="" method="post" class="sky-form" enctype="multipart/form-data">
          <header>
            <h1>Mettre a jour les Semestre de la Formations <?php echo $ligne_ins[2].' '.$ligne_ins[1];?></h1>
          </header>
          <fieldset>
            <div class="row">
              <section class="col col-6">
                <label class="label">Nouveau Nombre De Semestre:</label>
                <label class="input"><i class="icon-append icon-info"></i>
                <input name="nv_nbr_semestre" id="nv_nbr_semestre" type="text" value="<?php echo $ligne_ins[5];?>" tabindex="1"></label>
              </section>     
            </div>  
          </fieldset>
          <footer>
            <input type="hidden" name="id_formations" id="id_formations" value="<?php echo $id_page;?>">  
            <input type="submit"  class="button large" value="Mettre à jour Nombre De Semestre" tabindex="2">
          </footer>
        </form>
      <?php } ?>
          <!-------------------# 2 eme Affichage # ------------------>
      <?php
        if (isset($_POST['nv_nbr_semestre'])) {
          
                  $id=$_POST['id_formations'];
                  $nv_nbr_semestre=$_POST['nv_nbr_semestre'];
    
                  $db->exec("UPDATE formations SET nbr_semestre ='$nv_nbr_semestre' WHERE id_formations ='$id'");
                  $db->exec("DELETE FROM semestre WHERE id_formations ='$id");
                  $db->exec("DELETE FROM module WHERE id_formations ='$id");

           
      ?>

      <div class="body">      
        <form action="" method="post" class="sky-form" enctype="multipart/form-data">
          <header>
            <h1>Semestres</h1>
          </header>
          <fieldset>
            <div class="row">
              <?php
              for($i=1;$i<=$_POST['nv_nbr_semestre'];$i++)
              {
              ?>
              <section class="col col-6">
                <label class="label">Nombre de Module du Semestre <?php echo $i;?> :</label>
                <label class="input"><i class="icon-append icon-info"></i>
                <input name="nbr_module<?php echo $i;?>" id="nbr_module" type="text" value="" tabindex=""></label>
                <input name="id_semestre<?php echo $i;?>" type="hidden" value="<?php echo $_POST['id_formations'].'-S'.$i;?>">
                <input name="id_formations2" type="hidden" value="<?php echo $_POST['id_formations']?>">
                <input name="nv_nbr_semestre2" type="hidden" value="<?php echo $_POST['nv_nbr_semestre']?>">
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
      <?php   }
      ?>
  <!-------------------# 3 eme Affichage # ------------------>
  <?php
      if(!(empty($_POST['nv_nbr_semestre2']))){
        for($h=1;$h<=$_POST['nv_nbr_semestre2'];$h++){
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
              <?php
              for($i=1;$i<=$_POST['nv_nbr_semestre2'];$i++)
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
                      <input name="nv_nbr_semestre3" type="hidden" value="<?php echo $i;?>">
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
    <?php   }
    ?> 
    <!--------------------# 4 eme Affichage #------------------------>
    <?php
    if(!(empty($_POST['nv_nbr_semestre3']))){
      for ($r=1; $r<=$_POST['nv_nbr_semestre3']; $r++) { 
      for($h=1; $h<=$_POST['nbr_module'.$r.'']; $h++){
      if(!(empty($_POST['id_module'.$r.''.$h.'']))){
      
          include_once "../Classes/module.class.php";
              include_once "../Controller/modulemanager.php";

                  $modulemanager = new modulemanager();
                  $module = new module($_POST['id_module'.$r.''.$h.''], $_POST['nom_module'.$r.''.$h.''], $_POST['id_semestre'.$r.''], $_POST['id_formations3']);
                  $modulemanager->update($module);
         
            }
    }
    }
  ?> 
  <div class='body sky'>
    <h3>Mise à jour des Semestre de la Formations avec succes</h3>
    <a href="pageadmin.php">Revenire à la page d'Administrateur</a>
  </div>
  <?php   }
  ?>  
  <!-------------------# fin Affichge # ------------------>
</div>
<?php include("../Layouts/footerstatic.php");?>
</body>
</html>