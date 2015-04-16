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
        <div class="item active">
          <img src="../images/slider/1.png">
          <div class="carousel-caption">
            <img class="slider-icons" src="../images/icons/code.png">
            <h2>Licence Universitaire en Sciences Appliquées Ingénierie des Systèmes d’Information</h2>
            <h4>Une formation professionnelle en nouvelles technologies informatiques sur 1 an</h4>
          </div>
        </div>

        <div class="item">
          <img src="../images/slider/2.png">
          <div class="carousel-caption">
            <img class="slider-icons" src="../images/icons/code.png">
            <h2>Licence Universitaire en Sciences Appliquées Ingénierie du logiciel</h2>
            <h4>Une formation professionnelle en nouvelles technologies informatiques sur 1 an</h4>
          </div>
        </div>

        <div class="item">
          <img src="../images/slider/3.png">
          <div class="carousel-caption">
            <img class="slider-icons" src="../images/icons/code.png">
            <h2>Master Universitaire en Sciences Appliquées Conception et architecture des systèmes informatiques</h2>
            <h4>Une formation professionnelle en nouvelles technologies informatiques sur 2 an</h4>
          </div>
        </div>

        <div class="item">
          <img src="../images/slider/4.png">
          <div class="carousel-caption">
            <img class="slider-icons" src="../images/icons/code.png">
            <h2>Licence Universitaire en Sciences Appliquées Administration réseaux</h2>
            <h4>Une formation professionnelle en nouvelles technologies informatiques sur 1 an</h4>
          </div>
        </div>

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
            <h1>Objéctifs Généraux</h1>
          </div>

          <div class="col-lg-9 text-content">
            <p>Pour répondre aux besoins en formations des cadres et des organisations, Ensak formation Continue vous propose des formations diplômants, en :</p>
            <div class="col-lg-12 items">
              <div class="col-lg-3 item">
                <img src="../images/icons/3.png">
                <p class="colored">Système d’information</p>
              </div>
              <div class="col-lg-3 item">
                <img src="../images/icons/4.png">
                <p class="colored">Génie logiciel</p>
              </div>
              <div class="col-lg-3 item">
                <img src="../images/icons/1.png">
                <p class="colored">Administration réseaux</p>
              </div>
              <div class="col-lg-3 item">
                <img src="../images/icons/2.png">
                <p class="colored">Analyse et conception des systèmes informatiques</p>
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