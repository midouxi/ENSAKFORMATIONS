<?php
include("../Model/connect.php");
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
				<?php $id = 'test_index'; include("menu.php");  ?>
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
        <?php
        $file="../Textos/text_index.txt";
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
    </article>
  <?php include "../Layouts/slider.php"; ?>
  </div>
<?php include "../Layouts/footerstatic.php"; ?>  
</body>