<?php
$title="ENSA Khouribga - Formation Continue professionnelle";
include("../Layouts/headstatic.php");
?>

<body>
    <!--==============================header=================================-->
  <div class="container_12 mar-left1"> 
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
        <article class="grid_3">
          <!-- mega menu -->
        <?php $id = 'index'; include("menu.php");  ?>
          <!--/ mega menu -->
        </article>
        <article class="faceb">
          <a href="https://www.facebook.com/ensak.formations"><i class="fa fa-facebook fa-3x"></i></a>
        </article>
      <div class="clear"></div>   
    </header>
  </div>
    <!--==============================fin header=================================-->
  <div class="container_12 mar-left1 sky"> 
    <article class="grid_10">
      <h2>Objéctifs généraux</h2>
        <div class="linnee">
            <p>Pour répondre aux besoins en formations des cadres et des organisations, Ensak formation Continue vous propose des formations diplômants, en : </p>
            <p>
                      • Système d’information<br>
                      • Génie logiciel<br>
                      • Administration réseaux<br>
                      • Analyse et conception des systèmes informatiques<br>
            </p>
            <p>Ces programmes se déclinent en licences de niveau Bac + 3, Maîtrise (Master 1), Master 2 ou diplômes d'Université de niveau Bac + 5.</p>
            <p>Les conditions d'accès sont propres à chaque formation. Pour télécharger le calendrier et dossier de candidature, rendez vous sur la formation de votre choix. </p>
            <p>Que vous cherchiez une formation pour vous-même ou pour une personne de votre équipe, n'hésitez pas à nous contacter ! </p>
       </div>
    </article>
    <?php include("../Layouts/slider.php");?>
  </div>
<?php include("../Layouts/headstatic.php");?>
</body>
</html>
