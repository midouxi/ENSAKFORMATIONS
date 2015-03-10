<?php 
      $id_page=$_GET['id_page'];
                   
                    if(!$connect=mysql_connect("localhost","root","")) mysql_error();
                    if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
                    $all_ins=mysql_query("select * from formations where id_formations='$id_page'");
                    $ligne_ins=mysql_fetch_array($all_ins);
                          
                   
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ENSA Khouribga - <?php print($ligne_ins[1]); ?></title>
<meta charset="utf-8">
<meta name="description" content="ensak-formations.com: ENSA Khouribga - Formation Contunie professionnelle vous propose des formations diplômants, en : Système d’information - Génie logiciel - Administration réseaux - Analyse et conception des systèmes informatiques">
<meta name="keywords" content="ensak formation, ensak formations continue, ensak formation professionnelle, informatique, Ensa Khouribga formation continue, Ensa Khouribga formation professionelle, License administration réseaux">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<!-- css pour le menu -->
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/font-awesome-2.css">
    <link rel="stylesheet" href="css/sky-mega-menu.css">
    <link rel="stylesheet" href="css/sky-forms.css">
    <link rel="stylesheet" href="css/sky-tabs.css">
        <!-- fin css pour menu -->

<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
      <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
    <article class="grid_4" style="margin-right:50px">
      <a class="logo" href="index.php"><img src="images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <article class="grid_3">
      <!-- mega menu -->
      <?php $id = $id_page; include("menu_test.php");  ?>
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
          <h1 class="hello_box"><?php print($ligne_ins[4]);?></h1>
        </article>
        <article class="grid_5">
            <h2>Contenu de la formation</h2>
            <div class="linnee">
            <div class="sky-tabs sky-tabs-pos-top-justify sky-tabs-anim-slide-down-left sky-tabs-response-to-icons">
              
            <input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
            <label for="sky-tab1"><span><span>Semestre 1</span></span></label>
              <?php 
                  for ($i=2; $i<=$ligne_ins[5]; $i++) { 
                    
              ?>
            <input type="radio" name="sky-tabs" id="sky-tab<?php echo $i;?>" class="sky-tab-content-<?php echo $i;?>">
            <label for="sky-tab<?php echo $i;?>"><span><span>Semestre <?php echo $i;?></span></span></label>
            <?php   } ?>
            <ul>
              <?php 
                  for ($i=1; $i <=$ligne_ins[5]; $i++) { 

              ?>              
                  <li class="sky-tab-content-<?php echo $i;?>">  
                    <ul>
                      <?php 
                          $all_nbr_module=mysql_query("select count(id_semestre) from module where id_formations='$id_page' AND id_semestre='Semestre $i'");
                          $ligne_nbr_module=mysql_fetch_array($all_nbr_module);
                          for ($j=1; $j <=$ligne_nbr_module[0]; $j++) { 
                           $all_nom_module=mysql_query("select nom_module from module where id_module='$id_page-S$i-M$j'");
                           $ligne_nom_module=mysql_fetch_array($all_nom_module);
                      ?>
                          <li><strong>M<?php echo $j;?> :</strong><?php print($ligne_nom_module[0]); ?></li>
                      <?php   } ?>      
                    </ul>
              <?php   } ?>    
            </ul>
            </div>
            </div>
          </article>
          <article class="grid_5">
            <h2>informations generales</h2>
            <div class="linnee">
              <ul>
                <li><strong>Domaine : </strong><?php print($ligne_ins[6]); ?></li>
                <li><strong>Type de formation : </strong><?php print($ligne_ins[7]); ?></li>
                <li><strong>Niveau :</strong><?php print($ligne_ins[2]); ?></li>
                <li><strong>Durée :</strong><?php print($ligne_ins[8]); ?></li>
                <li><strong>Lieu : </strong> ENSA Khouriga</li>
                <li><strong>Email : </strong><?php print($ligne_ins[9]); ?></li>
                <li><strong>Téléphone : </strong><?php print($ligne_ins[10]); ?></li>
                <li><strong>Fax : </strong><?php print($ligne_ins[11]); ?></li>
               </ul>
               <br>
            </div>
          </article>
          <article class="grid_5">
            <h2>La formation</h2>
            <div id="accordion">
              <h3> débouché de la formation</h3>
              <div> 
                  <img src='<?php echo $ligne_ins[12];?>'>
              </div>
              <h3> Condition d'admission</h3>
              <div><?php print($ligne_ins[13]); ?></div>
              <h3>Organisation de la formation</h3>
              <div><?php print($ligne_ins[14]); ?></div>
              <h3>Calendrier à retenir </h3>
              <div> <ul> <li><strong><?php print($ligne_ins[15]); ?> : </strong> dépot du dossier de candidature</li>
                         <li><strong><?php print($ligne_ins[16]); ?>: </strong> Entretien de séléction</li>
                    </ul>
                </div>
              <h3>Les frais</h3>
              <div> 
                    <ul> 
                         <li><strong>frais de formation : </strong><?php print($ligne_ins[17]); ?></li>
                         <li><strong>frais d'entretien : </strong><?php print($ligne_ins[18]); ?></li>
                    </ul>

              </div>  
          </article>
          <article class="grid_10 lhata">
            <div style="text-align:center"> <img src='<?php echo $ligne_ins[19];?>'> </div>
          </article>
</div>
<br>
<div class="container_12 mar-left1 sky">
        <article class="grid_8">
            <h2>contact</h2>
            <div >
             <ul>
              <li>École Nationale des Sciences Appliquées, Bd Béni Amir, BP 77, Khouribga - Maroc</li>
                <li><strong>Responsable : </strong> Pr Imad Hafidi</li>
                <li><strong>Email : </strong> ensak.formations@gmail.com</li>
                <li><strong>Téléphone : </strong> 06 62 05 77 69 / 05 23 49 23 35</li>
                <li><strong>Fax :</strong>  05 23 49 23 39</li>
            <ul>
            </div>
          </article>
        <article class="grid_7">
          <h2>Interessé par une de nos formations ?</h2>
          <p> inscrivez vous dès maintenant , le nombre de places est limité !!</p>
        </article>
        <article class="grid_7">
                  <form action="inscription.php" method="post" class="sky-form">
                 <input type="submit"  class="button large" id="send-message" value="s'inscrire" >
                </form>
        </article>
        
    
</div>


<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> 
<script type="text/javascript" src="js/superfish.js"></script> 
<script type="text/javascript" src="js/jquery.responsivemenu.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="js/jquery-ui-1.8.24.custom.min.js"></script> 
<script src="js/contact.js" type="text/javascript"></script> 
<script src="js/script.js" type="text/javascript"></script>
</body>
</html>
?>
