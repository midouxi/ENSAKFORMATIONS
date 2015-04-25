<?php 
  include "../Model/connect.php";
  include_once "../Model/functdb.php";
  $functdb = new functdb(); 
  $title="ENSA Khouribga - Formation continue";
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
    <!--============================== menu =================================-->
    <?php $id = $id_page; include("menu.php");  ?>
    <!--============================== Fin menu =================================-->
    
    <!-- TOP BANNER -->
    <div class="banner-top-formation">
      <div class="container">
        <div class="col-lg-12">
        </div>
      </div>
    </div>

    <!-- titre de la formation -->
    <div class="sub-formation">
      <h1 class="title"><?php print($functdb->getformationlinewithid($_GET['id_page'],4));?></h1>
    </div>

    <!-- Contenu de la formation -->
    <div class="section">
      <div class="container">

        <div class="col-lg-3">
          <h1 class="title">Contenu de la formation</h1>
        </div>

        <div class="col-lg-9">
          <?php 
              for ($i=1; $i <=$functdb->getformationlinewithid($_GET['id_page'],5); $i++) { 
          ?> 
          <div class="semestre">
            <div class="col-lg-2">
              <h1 class="header-box">S<?php echo $i;?></h1>
            </div>
            <div class="col-lg-10 modules">
              <?php 
                $id_page=$_GET['id_page'];
                $all_nbr_module=$_db->query("select count(id_semestre) from module where id_formations='$id_page' AND id_semestre='Semestre $i'");
                $all_nbr_module->setFetchMode(PDO::FETCH_NUM);
                $ligne_nbr_module=$all_nbr_module->fetch(); 
                for ($j=1; $j <=$ligne_nbr_module[0]; $j++) { 
                    $all_nom_module=$_db->query("select nom_module from module where id_module='$id_page-S$i-M$j'");
                    $all_nom_module->setFetchMode(PDO::FETCH_NUM);
                    $ligne_nom_module=$all_nom_module->fetch();
              ?>
              <p><strong>M<?php echo $j;?> </strong>: <?php print($ligne_nom_module[0]); ?></p>
              <?php  } ?> 
            </div>
          </div>
          <?php  } ?>  
        </div>
      </div>
    </div>
    <!-- Débouché de la formation -->
    <div class="section">
      <div class="container">

        <div class="col-lg-3">
          <h1 class="title">La formation</h1>
        </div>

        <div class="col-lg-9 section-content">
          <div class="col-lg-12">
            <h4>Débouché de la formation</h4>
            <img src='<?php echo $functdb->getformationlinewithid($_GET['id_page'],12);?>'>
          </div>
        </div>
      </div>
    </div>
    <!-- Condition d'admission -->
    <div class="section">
      <div class="container">

        <div class="col-lg-3"></div>

        <div class="col-lg-9 section-content">
          <div class="col-lg-3">
            <img src="../images/checklist.png">
          </div>
          <div class="col-lg-9">
            <h4>Condition d'admission</h4>
            <p><?php print($functdb->getformationlinewithid($_GET['id_page'],13)); ?></p>
          </div>
        </div>

      </div>
    </div>

    <!-- Organisation & Calendrier à retenir -->
    <div class="section">
      <div class="container">

        <div class="col-lg-3"></div>

        <div class="col-lg-9 section-content">
          <div class="col-lg-3">
            <img src="../images/calendar.png">
          </div>
          <div class="col-lg-9">
            <h4>Organisation de la formation</h4>
            <p><?php print($functdb->getformationlinewithid($_GET['id_page'],14)); ?></p>

            <h4>Calendrier à retenir</h4>
            <p><?php print($functdb->getformationlinewithid($_GET['id_page'],15)); ?> : dépot du dossier de candidature</p>
            <p><?php print($functdb->getformationlinewithid($_GET['id_page'],16)); ?> : Entretien de séléction</p>
          </div>
        </div>

      </div>
    </div>

    <!-- Les frais -->
    <div class="section">
      <div class="container">

        <div class="col-lg-3"></div>

        <div class="col-lg-9 section-content">
          <div class="col-lg-3">
            <img src="../images/wallet.png">
          </div>
          <div class="col-lg-9">
            <h4>Les frais</h4>
            <p>Frais de formation : <?php print($functdb->getformationlinewithid($_GET['id_page'],17)); ?></p>
            <p>Frais d'entretien : <?php print($functdb->getformationlinewithid($_GET['id_page'],18)); ?></p>
          </div>
        </div>

      </div>
    </div>
    <!-- informations générales -->
    <div class="info-general">
      <div class="container">
        <div class="col-lg-12">

          <div class="col-lg-4">
            <img src="../images/info-general.png">
          </div>

          <div class="col-lg-8">
            <h1>Informations Generales</h1>
            <div class="col-lg-6">
              <p><span>Domaine :</span> <?php print($functdb->getformationlinewithid($_GET['id_page'],6)); ?></p>
              <p><span>Type de formation :</span> <?php print($functdb->getformationlinewithid($_GET['id_page'],7)); ?></p>
              <p><span>Niveau :</span> <?php print($functdb->getformationlinewithid($_GET['id_page'],2)); ?></p>
              <p><span>Durée :</span> <?php print($functdb->getformationlinewithid($_GET['id_page'],8)); ?></p>
            </div>
            <div class="col-lg-6">
              <p><span class="glyphicon glyphicon-map-marker"></span>ENSA Khouriga</p>
              <p><span class="glyphicon glyphicon-envelope"></span><?php print($functdb->getformationlinewithid($_GET['id_page'],9)); ?></p>
              <p><span class="glyphicon glyphicon-earphone"></span><?php print($functdb->getformationlinewithid($_GET['id_page'],10)); ?></p>
              <p><span class="glyphicon glyphicon-print"></span><?php print($functdb->getformationlinewithid($_GET['id_page'],11)); ?></p>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="logos"><img src='<?php echo $functdb->getformationlinewithid($_GET['id_page'],19);?>'></div>
    <div class="container">
      <div class="col-lg-12 list-prof">
        <h1 class="title-center">STAFF</h1>
        <?php 
          $i = 0;
          $idformation= $_GET['id_page'];
          $all_ins=$_db->query("SELECT * FROM lier RIGHT JOIN prof ON prof.id_prof=lier.id_prof WHERE lier.id_formations='$idformation'");
          $all_ins->setFetchMode(PDO::FETCH_NUM);
          while($ligne=$all_ins->fetch()){ 
        ?>
            <div class="col-lg-3 prof-content">
              <div class="prof-image">
                <img src="<?php echo $ligne[7]; ?>">
                <div class="overlay">
                  <a class="overlay-content" data-toggle="modal" data-target="#data-<?php echo $i; ?>" class="btn">
                    <h3 class="glyphicon glyphicon-search"></h3>
                    <h3>Visualiser</h3>
                  </a>
                </div>
              </div>
              <h3><?php echo $ligne[3].' '.$ligne[4]; ?></h3>
              <p><?php echo $ligne[5]; ?></p>
            </div>
        <?php $i++; } ?>
      </div>
    </div>


    <?php 
      $j = 0;
      $idformation= $_GET['id_page'];
      $all_ins=$_db->query("SELECT * FROM lier RIGHT JOIN prof ON prof.id_prof=lier.id_prof WHERE lier.id_formations='$idformation'");
      $all_ins->setFetchMode(PDO::FETCH_NUM);
      while($ligne=$all_ins->fetch()){ 
    ?>
        <!-- modal prof definition -->
        <div class="modal fade" id="data-<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="compt-Label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header modal-header-compt">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="compt-Label">Information</h4>
                  </div>
                  <div class="modal-body modal-body-compt">
                      <img src="<?php echo $ligne[7]; ?>">
                      <h3><?php echo $ligne[3].' '.$ligne[4]; ?></h3>
                      <p class="colored">Résumé</p>
                      <p><?php echo $ligne[5]; ?></p>
                      <p class="colored">Description</p>
                      <p><?php echo $ligne[6]; ?></p>
                  </div>
                </div>
              </div>
        </div>
    <?php $j++; } ?>
<?php include "../Layouts/footerstatic.php"; ?>
</body>
</html>
