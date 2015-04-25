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

          <div class="col-lg-9">
          <?php
            $file="../Textos/text_ensak.txt";
            $id_file=fopen($file,"r");
            while($ligne=fgets($id_file,4000)) {
              $tab=explode (" ",$ligne);
              if (strcasecmp($tab[0], '•') != 0) {
                echo "<p>$ligne</p>";
                }else{
                  echo "$ligne</br>";
              }
            }
            fclose($id_file);
          ?>
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
              <p><span class="glyphicon glyphicon-earphone"></span>06 62 05 77 69</p>
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
