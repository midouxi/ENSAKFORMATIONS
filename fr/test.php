<?php 
  include "../Model/connect.php";
  include_once "../Model/functdb.php";
  $functdb = new functdb(); 
  $title="ENSA Khouribga - Formation continue";
include("../Layouts/headstatic.php");                
?>
<body>

  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../fr/index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <article class="grid_3">
        <!-- mega menu -->
        <?php $id = $id_page; include("menu.php");  ?>
        <!--/ mega menu -->
      </article>
      <article class="faceb">
        <a href="https://www.facebook.com/ensak.formations"><i class="fa fa-facebook fa-3x"></i></a>
      </article>
      <div class="clear"></div>   
    </header>
  </div>

  <div class="container_12 mar-left1 tol sky"> 
    <article class="grid_13 last-col">
      <h1 class="hello_box"><?php print($functdb->getformationlinewithid($_GET['id_page'],4));?></h1>
    </article>
    <article class="grid_5">
      <h2>Contenu de la formation</h2>
      <div class="linnee">
        <div class="sky-tabs sky-tabs-pos-top-justify sky-tabs-anim-slide-down-left sky-tabs-response-to-icons">  
          <input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
          <label for="sky-tab1"><span><span>Semestre 1</span></span></label>
          <?php 
            for ($i=2; $i<=$functdb->getformationlinewithid($_GET['id_page'],5); $i++) { 
          ?>
          <input type="radio" name="sky-tabs" id="sky-tab<?php echo $i;?>" class="sky-tab-content-<?php echo $i;?>">
          <label for="sky-tab<?php echo $i;?>"><span><span>Semestre <?php echo $i;?></span></span></label>
          <?php } ?>
          <ul>
            <?php 
              for ($i=1; $i <=$functdb->getformationlinewithid($_GET['id_page'],5); $i++) { 
            ?>              
            <li class="sky-tab-content-<?php echo $i;?>">  
              <ul>
                <?php 
                    $id_page=$_GET['id_page'];
                    $all_nbr_module=mysql_query("select count(id_semestre) from module where id_formations='$id_page' AND id_semestre='Semestre $i'");
                    $ligne_nbr_module=mysql_fetch_array($all_nbr_module);
                    for ($j=1; $j <=$ligne_nbr_module[0]; $j++) { 
                     $all_nom_module=mysql_query("select nom_module from module where id_module='$id_page-S$i-M$j'");
                     $ligne_nom_module=mysql_fetch_array($all_nom_module);
                ?>
                <li><strong>M<?php echo $j;?> :</strong><?php print($ligne_nom_module[0]); ?></li>
                <?php  } ?>      
              </ul>
            <?php  } ?>    
          </ul>
        </div>
      </div>
    </article>

    <article class="grid_5">
      <h2>informations générales</h2>
      <div class="linnee">
        <ul>
          <li><strong>Domaine : </strong><?php print($functdb->getformationlinewithid($_GET['id_page'],6)); ?></li>
          <li><strong>Type de formation : </strong><?php print($functdb->getformationlinewithid($_GET['id_page'],7)); ?></li>
          <li><strong>Niveau :</strong><?php print($functdb->getformationlinewithid($_GET['id_page'],2)); ?></li>
          <li><strong>Durée :</strong><?php print($functdb->getformationlinewithid($_GET['id_page'],8)); ?></li>
          <li><strong>Lieu : </strong> ENSA Khouribga</li>
          <li><strong>Email : </strong><?php print($functdb->getformationlinewithid($_GET['id_page'],9)); ?></li>
          <li><strong>Téléphone : </strong><?php print($functdb->getformationlinewithid($_GET['id_page'],10)); ?></li>
          <li><strong>Fax : </strong><?php print($functdb->getformationlinewithid($_GET['id_page'],11)); ?></li>
        </ul>
        <br>
      </div>
    </article>

    <article class="grid_5">
      <h2>La formation</h2>
      <div id="accordion">
        <h3> Débouchés de la formation</h3>
        <div> 
            <img src='<?php echo $functdb->getformationlinewithid($_GET['id_page'],12);?>'>
        </div>
        <h3>Condition d'admission</h3>
        <div><?php print($functdb->getformationlinewithid($_GET['id_page'],13)); ?></div>
        <h3>Organisation de la formation</h3>
        <div><?php print($functdb->getformationlinewithid($_GET['id_page'],14)); ?></div>
        <h3>Calendrier à retenir </h3>
        <div>
          <ul>
            <li><strong><?php print($functdb->getformationlinewithid($_GET['id_page'],15)); ?> : </strong> dépôt du dossier de candidature</li>
            <li><strong><?php print($functdb->getformationlinewithid($_GET['id_page'],16)); ?>: </strong> Entretien de séléction</li>
          </ul>
        </div>
        <h3>Les frais</h3>
        <div> 
          <ul> 
             <li><strong>frais de formation : </strong><?php print($functdb->getformationlinewithid($_GET['id_page'],17)); ?></li>
             <li><strong>frais d'entretien : </strong><?php print($functdb->getformationlinewithid($_GET['id_page'],18)); ?></li>
          </ul>
        </div>  
    </article>

    <article class="grid_10 lhata">
      <div style="text-align:center"> <img src='<?php echo $functdb->getformationlinewithid($_GET['id_page'],19);?>'> </div>
    </article>
  </div>
  <div style="margin-top:100px;"><?php include "../Layouts/footerstatic.php"; ?></div>
</body>
</html>
?>
