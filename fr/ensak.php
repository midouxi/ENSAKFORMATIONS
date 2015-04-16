<?php
$title="ENSA Khouribga - Présentation";
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
		<?php $id = 'ensak'; include("menu.php");  ?>
    <!--============================== fin menu =================================-->

    <!-- TOP BANNER -->
    <div class="banner-top-ensak">
      <div class="container">
        <div class="col-lg-12">
        </div>
      </div>
    </div>
    <div class="sub-title">
      <h1 class="title">Ecole Nationale des sciences appliquées Khouribga</h1>
    </div>
    <!-- page content -->
    <div class="content">
      <div class="container">
        <div class="col-lg-12">

          <div class="col-lg-3 image-panel">
            <img src="../images/logo-ensak.jpg">
          </div>

          <div class="col-lg-9 text-content">
            <p>Faisant partie du réseau ENSA du Maroc, l’Ecole Nationale des Sciences Appliquées de Khouribga relève de l’Université Hassan 1er de Settat. Elle a été créée en 2007 pour appuyer la volonté gouvernementale dans le cadre de l’initiative nationale de formation de 10 000 ingénieurs à l’horizon 2010. Elle forme des ingénieurs d’Etat hautement qualifiés au niveau scientifique, technique, modélisation, management et communication.</p>

            <p>L’école dispense un cursus de 5 ans d’études : un cycle ingénieur en 3 années (6 semestres) débouchant sur un diplôme d’Ingénieur d’Etat précédé par des années préparatoires intégrées qui durent 2 ans (4 semestres).</p>

            <h4>Le cycle préparatoire intégré</h4>

            <p>Permet à l’élève ingénieur d’acquérir des connaissances solides en mathématiques et physique ainsi qu’une initiation à l’informatique.</p>

            <h4>Le cycle ingénieur</h4>

            <p>Qui dure 3 ans est accessible directement après deux années des classes préparatoires intégrées et aux admis au CNC des grandes écoles et par voie de concours au BAC+2/3 de nature scientifique ou technique dans la limite des places disponibles. C’est à partir de ce stade que l’élève ingénieur s’ouvre sur le monde industriel. En tronc commun, les études se concentrent sur les bases de l’ingénierie à savoir la modélisation mathématique, l’informatique, l’électronique et les signaux…etc.</p>

            <p>À partir de la 4ème année, l’élève ingénieur de l’ENSAK, se spécialise dans des domaines très demandés en entreprises à savoir le génie des réseaux et télécommunications, le génie électrique (électronique des systèmes embarqués et commande numérique), Génie des procédés de l'énergie et de l'environnement et le génie informatique (ingénierie logiciel). D’autres filières de formations vont êtres mises en place prochainement. Les études sont perfectionnées par des stages, mini projets et visites d’entreprises, conférences…etc.</p>

            <p>A côté de l’encadrement scientifique et technique, le corps administratif et enseignant de l’ENSAK a pour mission de favoriser l’ouverture de l’établissement sur son environnement socio-économique et de compléter harmonieusement la formation des étudiants.</p>

          </div>
        </div>
      </div>
    </div>


    <!-- Contact area -->

    <div class="contact-ensak">
      <div class="container">
        <div class="col-lg-12">

          <div class="col-lg-4">
            <img src="../images/contact-ensak1.png">
          </div>

          <div class="col-lg-8">
            <h1>Contact ENSA Khouribga</h1>
            <div class="col-lg-6">
              <p>École Nationale des Sciences Appliquées, Bd Béni Amir, BP 77, Khouribga - Maroc</p>
            </div>
            <div class="col-lg-6">
              <p><span class="glyphicon glyphicon-earphone"></span>+212 5 23 49 23 35 / +212 6 18 53 43 72</p>
              <p><span class="glyphicon glyphicon-print"></span>+212 5 23 49 23 39</p>
              <p><span class="glyphicon glyphicon-envelope"></span>contact.ensa@uh1.ac.ma</p>
              <p><span class="glyphicon glyphicon-link"></span>www.ensa.uh1.ac.ma</p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- MAP -->
    <div class="map">
      <div style="width: 100%; height: 400px;" class="map-canvas"></div>
    </div>

<?php include "../Layouts/footerstatic.php"; ?>  

  <script>
        $(function(){
            $('.map-canvas').prettyMaps({
                    address: 'École Nationale des Sciences Appliquées,khouribga',
                    image: '../map/map-icon.png',
                    hue: '#eb3e44',
                    saturation: -100,
                    zoom: 17,
                    panControl: true,
                    zoomControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true,
                    scrollwheel: false,
            });   
        });
    </script>
</body>
</html>
