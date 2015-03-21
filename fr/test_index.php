<?php session_start(); session_destroy(); session_start(); 
if(!$connect=mysql_connect("localhost","root","")) mysql_error();
if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
$title="ENSA Khouribga - ENSAK Formations";
include("../Layouts/headstatic.php");
?>
<body>
    <!--==============================header=================================-->
  <div class="container_12 mar-left1"> 
    <header class="homepage">
    	<article class="grid_4" style="margin-right:50px">
      		<a class="logo" href="../test_index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      	</article>
      	<article class="grid_3">
      		<!-- mega menu -->
				<?php $id = 'test_index'; include("../menu_test.php");  ?>
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
                      $file="../text_index.txt";
                      $id_file=fopen($file,"r");
                      while($ligne=fgets($id_file,4000) )
                      {
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
                  <article class="grid_5">
                    <h2>Formations</h2>
                    <!-- start slider -->
                        <div id="main-slider" class="flexslider">
                            <ul class="slides">
                            <?php 
                                  $all_ins=mysql_query("select * from formations");
                                  while ($ligne_ins=mysql_fetch_array($all_ins)) {
                                    ?> <li>
                                            <a href="../test.php?id_page=<?php echo $ligne_ins[0] ; ?>"><img src="<?php echo $ligne_ins[3]; ?>" alt="" /></a>
                                       </li>
                                <?php  }
                            ?>
                            </ul>
                        </div>
                    <!-- end slider -->
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
</html>
