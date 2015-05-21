<?php
$title="Contact";
include("../Layouts/headstatic.php");
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
   <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <article class="grid_3">
        <!-- mega menu -->
        <?php $id = 'contacts'; include("menu.php");  ?>
        <!--/ mega menu -->
      </article>
      <article class="faceb">
        <a href="https://www.facebook.com/ensak.formations"><i class="fa fa-facebook fa-3x"></i></a>
      </article>
      <div class="clear"></div>   
   </header>  
  </div>

  <div class="container_12 mar-left1 sky"> 
    <article class="grid_10">
    <h2>contact</h2>
      <div>
        <ul>
          <li>École Nationale des Sciences Appliquées, Bd Béni Amir, BP 77, Khouribga - Maroc</li>
          <?php
            $file="../Textos/text_contact.txt";
            $id_file=fopen($file,"r");
            while($ligne=fgets($id_file,4000)) {
              $tab=explode (" ",$ligne);
              $search=$tab[0]." ".$tab[1];
              $replace="<strong>".$search."</strong>";
              $ligne=str_replace($search, $replace, $ligne);
                echo "<li>".$ligne."</li>";
            }
            fclose($id_file);
          ?>
        </ul>
      </div>
    </article>
    <?php include "../Layouts/slider.php"; ?>             
  </div>
  <?php include "../Layouts/footerstatic.php"; ?>  
</body>
  