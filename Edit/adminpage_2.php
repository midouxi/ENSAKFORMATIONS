<?php 
$title="ENSA Khouribga - Formation Continue professionnelle";
include("../Layouts/headstatic.php");
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../fr/index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <?php 
      $adminpage_2="current";
      include("../Layouts/menuedit.php");
      ?>
      <div class="clear"></div>	  
    </header>  
  </div>

  <article class="grid_13 last-col">
    <h2 class="sky" style="text-align:center">TABLEAU FINAL</h2>
  </article>
  
  <?php  						
	//if(!$connect=mysql_connect("localhost","root","")) mysql_error();
	//if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
	if(!$connect=mysql_connect("localhost","root","")) mysql_error();
	if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
	?>            
  <!-- tabs -->
	<div class="sky-tabs sky-tabs-pos-top-left sky-tabs-anim-flip sky-tabs-response-to-icons">
	 <input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
	 <label for="sky-tab1"><span><span><i class="fa fa-bars"></i>TOUT</span></span></label>
	 <ul>
	   <li class="sky-tab-content-1">	  
		  <table class="table table-striped table-bordered">
        <thead>
          <tr class="inane">
            <td>NOM</td>
            <td>PRENOM</td>
            <td>CNE</td>
            <td>CIN</td>
            <td>DATE DE NAISSANCE</td>
            <td>LIEU DE NAISSANCE</td>
            <td>PROVINCE</td>
            <td>SEXE</td>
            <td>NATIONALITER</td>
            <td>SITUATION FAMILIALE</td>
            <td>HANDICAP</td>
            <td>ANNEE D'OBTENTION DU BAC</td>
            <td>N° SERIE DU BAC</td>
            <td>MENTION</td>
            <td>ETABLISSMENT</td>
            <td>ADRESSE</td>
            <td>EMAIL</td>
            <td>N° Telephone</td>
            <td>N° Telephone PARENTS</td>
            <td>PROFESSION BENEFICIER</td>
            <td>PROFESSION DU PERE</td>
            <td>PROFESSION DE LA MERE</td>
          </tr>
        </thead>
        <tbody>
          <?php
			 	   $all_ins=mysql_query("select * from inscription_final");
			 	   while($ligne_ins=mysql_fetch_array($all_ins)){
				  ?>
          <tr>
            <td><?php print($ligne_ins[0]); ?></td>
            <td><?php print($ligne_ins[1]); ?></td>
            <td><?php print($ligne_ins[2]); ?></td>
            <td><?php print($ligne_ins[3]); ?></td>
            <td><?php print($ligne_ins[4]); ?></td>
            <td><?php print($ligne_ins[5]); ?></td>
            <td><?php print($ligne_ins[6]); ?></td>
            <td><?php print($ligne_ins[7]); ?></td>
            <td><?php print($ligne_ins[8]); ?></td>
            <td><?php print($ligne_ins[9]); ?></td>
            <td><?php print($ligne_ins[10]); ?></td>
            <td><?php print($ligne_ins[11]); ?></td>
            <td><?php print($ligne_ins[12]); ?></td>
            <td><?php print($ligne_ins[13]); ?></td>
            <td><?php print($ligne_ins[14]); ?></td>
            <td><?php print($ligne_ins[15]); ?></td>
            <td><?php print($ligne_ins[16]); ?></td>
            <td><?php print($ligne_ins[17]); ?></td>
            <td><?php print($ligne_ins[18]); ?></td>
            <td><?php print($ligne_ins[19]); ?></td>
            <td><?php print($ligne_ins[20]); ?></td>
            <td><?php print($ligne_ins[21]); ?></td>                      
          </tr>
			    <?php } ?>                
        </tbody>
       </table>          
		 </li>
	 </ul>
 </div>

  <!--/ tabs -->
  <form action="exporter.php" method="post" class="sky-form">
   <footer>
     <button class="button">Exporter Les Données</button>
   </footer>
  </form>                                     
 </div>
</body>
</html>
