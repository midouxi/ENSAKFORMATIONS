<?php
include("../Model/connect.php");
$title="ENSA Khouribga - Formation Continue professionnelle";
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
    <!--============================== Menu =================================-->
  	<?php $id = 'test_index'; include("menu.php");  ?>
    <!--============================== Menu =================================-->
    <!-- SLIDER IMAGE -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <?php
          $j=1;
          $i=1;
          $all_ins=$_db->query("select * from formations");
          $all_ins->setFetchMode(PDO::FETCH_NUM);
          while($ligne_ins=$all_ins->fetch()){ 
            if($j == 5)
            {
              $j = 1;
            }
        ?>
        <div class="item <?php if ($i==1) { echo 'active' ;}  ?>">
          <img src="../images/slider/<?php echo $j;?>.png">
          <div class="carousel-caption">
            <img class="slider-icons" src="../images/icons/code.png">
            <h2><?php print($ligne_ins[4]); ?></h2>
            <?php if($ligne_ins[0]=="MGP") { ?>
            <h4>Une formation professionnelle en gestion de production industrielle et de qualité sur <?php print($ligne_ins[8]); ?></h4>
            <?php } else if($ligne_ins[0]=="GP") { ?>
            <h4>Une formation professionnelle en génie des procédés industriels sur <?php print($ligne_ins[8]); ?></h4>
            <?php } else if($ligne_ins[0]=="LPL") { ?>
            <h4>Une formation professionnelle en gestion de production industrielle et logistique sur <?php print($ligne_ins[8]); ?></h4>
            <?php } else if($ligne_ins[0]=="GE") { ?>
            <h4>Une formation professionnelle en génie énergétique sur <?php print($ligne_ins[8]); ?></h4>
            <?php } else if($ligne_ins[0]=="LRT" || $ligne_ins[0]=="lar") { ?>
            <h4>Une formation professionnelle en nouvelles technologies réseaux sur <?php print($ligne_ins[8]); ?></h4>
            <?php } else { ?>
            <h4>Une formation professionnelle en nouvelles technologies informatiques sur <?php print($ligne_ins[8]); ?></h4>
            <?php } ?>
          </div>
        </div>
        <?php  $i++ ;
               $j++ ;
          } 
        ?>

        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <!-- END SLIDER IMAGE -->


    <!-- page content -->
    <div class="content">
      <div class="container">
        <div class="col-lg-12">

          <div class="col-lg-3">
            <h1>Objectifs Généraux</h1>
          </div>

          <div class="col-lg-9 text-content">
            <p>Pour répondre aux besoins en formations des cadres et des organisations, les formations continues de l'ENSA Khouribga vous propose des formations diplômantes, en :</p>
            <div class="col-lg-12 items">
              <div class="col-lg-3 item">
                <img src="../images/icons/3.png">
                <p class="colored">Système d’Information</p>
              </div>
              <div class="col-lg-3 item">
                <img src="../images/icons/4.png">
                <p class="colored">Génie Logiciel</p>
              </div>
              <div class="col-lg-3 item">
                <img src="../images/icons/1.png">
                <p class="colored">Administration Réseaux</p>
              </div>
              <div class="col-lg-3 item">
                <img src="../images/icons/2.png">
                <p class="colored">Analyse et Conception des Systèmes Informatiques</p>
              </div>
            </div>
            <div class="col-lg-12 items">
              <div class="col-lg-3 item">
                <img src="../images/icons/5.png">
                <p class="colored">Génie Énergétique</p>
              </div>
              <div class="col-lg-3 item">
                <img src="../images/icons/6.png">
                <p class="colored">Génie des Procédés</p>
              </div>
              <div class="col-lg-3 item">
                <img src="../images/icons/7.png">
                <p class="colored">Réseaux et télécommunications</p>
              </div>
              <div class="col-lg-3 item">
                <img src="../images/icons/8.png">
                <p class="colored">Production Industrielle et Logistique</p>
              </div>
              <div class="col-lg-3 item">
                <img src="../images/icons/9.jpg">
                <p class="colored">Production Industrielle et Management Qualité</p>
              </div>
            </div>
            <p>Ces programmes se déclinent en licences de niveau Bac + 3, Maîtrise (Master 1), Master 2 ou diplômes d'Université de niveau Bac + 5.</p>
            <p>Les conditions d'accès sont propres à chaque formation. Pour télécharger le calendrier et dossier de candidature, rendez vous sur la formation de votre choix.</p>
            <p>Que vous cherchiez une formation pour vous-même ou pour une personne de votre équipe, n'hésitez pas à nous contacter !</p>
          </div>
        </div>
      </div>
    </div>
<?php include "../Layouts/footerstatic.php"; ?>  
</body>
</html>