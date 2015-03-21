<?php 
  $title="ENSA Khouribga - Formation Continue professionnelle";
  include("../Layouts/headstatic.php");
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <?php 
      $adminpage="current";
      include("../Layouts/menuedit.php");
      ?>
      <div class="clear"></div>	  
    </header> 
  </div>

  <article class="grid_13 last-col ">
  	<h2 class="sky" style="text-align:center">TABLEAU D'INSCRIPTION</h2>
  </article>
  <?php  			
		//if(!$connect=mysql_connect("localhost","root","")) mysql_error();
		//if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
		if(!$connect=mysql_connect("localhost","root","")) mysql_error();
		if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
	?>

  <!-- tabs -->
    <div class="sky-tabs sky-tabs-pos-top-left sky-tabs-anim-rotate sky-tabs-response-to-icons">
		  <input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
		  <label for="sky-tab1"><span><span><i class="fa fa-bars"></i>TOUT</span></span></label>
				
		  <input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
		  <label for="sky-tab2"><span><span><i class="fa fa-table"></i>License Génie logiciel</span></span></label>
				
		  <input type="radio" name="sky-tabs" id="sky-tab3" class="sky-tab-content-3">
		  <label for="sky-tab3"><span><span><i class="fa fa-list"></i>Licence Administration réseaux</span></span></label>
				
		  <input type="radio" name="sky-tabs" id="sky-tab4" class="sky-tab-content-4">
		  <label for="sky-tab4"><span><span><i class="fa fa-list-alt"></i>License Systeme d'information</span></span></label>
                
		  <input type="radio" name="sky-tabs" id="sky-tab5" class="sky-tab-content-5">
		  <label for="sky-tab5"><span><span><i class="fa fa-th-list"></i>Masters informatique</span></span></label>
				
			<ul>
		    <li class="sky-tab-content-1">	  
				  <table class="table table-striped table-bordered">
 				   <thead>
            <tr class="inane">
            	<td>FORMATIONS</td>
              <td>NOM</td>
              <td>PRENOM</td>
              <td>DATE DE NAISSANCE</td>
              <td>CIN</td>
              <td>N° Telephone</td>
              <td>EMAIL</td>
              <td>DIPLOME</td>
              <td>ETABLISSMENT</td>
              <td>LETTRE DE MOTIVATION</td>
              <td>Valider</td>
              <td>Traitement</td>
            </tr>
          </thead>
          <tbody>
            <?php
				 	    $all_ins=mysql_query("select * from inscription");
 					   	while($ligne_ins=mysql_fetch_array($all_ins)){
					   ?>
            <tr>
              <td><?php print($ligne_ins[8]); ?></td>
              <td><?php print($ligne_ins[0]); ?></td>
              <td><?php print($ligne_ins[1]); ?></td>
              <td><?php print($ligne_ins[2]); ?></td>
              <td><?php print($ligne_ins[3]); ?></td>
              <td><?php print($ligne_ins[4]); ?></td>
              <td><?php print($ligne_ins[5]); ?></td>
              <td><?php print($ligne_ins[6]); ?></td>
              <td><?php print($ligne_ins[7]); ?></td>
              <td><?php print($ligne_ins[9]); ?></td>
              <td><?php echo'<form action="envoi_mail.php" class="sky-form" method="post">
                  				   <input type="submit" class="button" value="valider" name="val"/>
                             <input type="hidden" name="email" value="'.$ligne_ins[5].'" />
					 							     <input type="hidden" name="nom" value="'.$ligne_ins[0].'" />
					 							     <input type="hidden" name="prenom" value="'.$ligne_ins[1].'" />
					 							     <input type="hidden" name="cin" value="'.$ligne_ins[3].'" />
					 							     <input type="hidden" name="etat" value="'.$ligne_ins[10].'" />
                             </form>';?></td>
              <td><?php print($ligne_ins[10]); ?></td>    
            </tr>
				    <?php } ?>        
          </tbody>
         </table>
       </li>
			 <li class="sky-tab-content-2"> 
			   <table class="table table-striped table-bordered">
 				   <thead>
            <tr class="danger">
          	  <td>FORMATIONS</td>
              <td>NOM</td>
              <td>PRENOM</td>
              <td>DATE DE NAISSANCE</td>
              <td>CIN</td>
              <td>N° Telephone</td>
              <td>EMAIL</td>
              <td>DIPLOME</td>
              <td>ETABLISSMENT</td>
              <td>LETTRE DE MOTIVATION</td>
              <td>Valider</td>
              <td>Traitement</td>
            </tr>
           </thead>
           <tbody>
             <?php
				 	   $all_ins=mysql_query("select * from inscription where formation='License Ingenierie du logiciel'");
 					  	while($ligne_ins=mysql_fetch_array($all_ins)){
					   ?>
             <tr>
             <td><?php print($ligne_ins[8]); ?></td>
             <td><?php print($ligne_ins[0]); ?></td>
             <td><?php print($ligne_ins[1]); ?></td>
             <td><?php print($ligne_ins[2]); ?></td>
             <td><?php print($ligne_ins[3]); ?></td>
             <td><?php print($ligne_ins[4]); ?></td>
             <td><?php print($ligne_ins[5]); ?></td>
             <td><?php print($ligne_ins[6]); ?></td>
             <td><?php print($ligne_ins[7]); ?></td>
             <td><?php print($ligne_ins[9]); ?></td>
             <td><?php echo'<form action="envoi_mail.php" class="sky-form" method="post">
                    				 <input type="submit" class="button" value="valider" name="val"/>
                             <input type="hidden" name="email" value="'.$ligne_ins[5].'" />
						  					     <input type="hidden" name="nom" value="'.$ligne_ins[0].'" />
						  					     <input type="hidden" name="prenom" value="'.$ligne_ins[1].'" />
						  					     <input type="hidden" name="cin" value="'.$ligne_ins[3].'" />
						  					     <input type="hidden" name="etat" value="'.$ligne_ins[10].'" />
                             </form>';?></td>
              <td><?php print($ligne_ins[10]); ?></td>      
            </tr>
				    <?php } ?> 
           </tbody>
          </table>
         </li>
					
					<li class="sky-tab-content-3">
    			 <table class="table table-striped table-bordered">
   				   <thead>
              <tr class="warning">
          	    <td>FORMATIONS</td>
                <td>NOM</td>
                <td>PRENOM</td>
                <td>DATE DE NAISSANCE</td>
                <td>CIN</td>
                <td>N° Telephone</td>
                <td>EMAIL</td>
                <td>DIPLOME</td>
                <td>ETABLISSMENT</td>
                <td>LETTRE DE MOTIVATION</td>
                <td>Valider</td>
                <td>Traitement</td>
              </tr>
              </thead>
              <tbody>
                <?php
							 	 $all_ins=mysql_query("select * from inscription where formation='License Administration reseaux'");
     					 	 while($ligne_ins=mysql_fetch_array($all_ins)){
								?>
                <tr>
                  <td><?php print($ligne_ins[8]); ?></td>
                  <td><?php print($ligne_ins[0]); ?></td>
                  <td><?php print($ligne_ins[1]); ?></td>
                  <td><?php print($ligne_ins[2]); ?></td>
                  <td><?php print($ligne_ins[3]); ?></td>
                  <td><?php print($ligne_ins[4]); ?></td>
                  <td><?php print($ligne_ins[5]); ?></td>
                  <td><?php print($ligne_ins[6]); ?></td>
                  <td><?php print($ligne_ins[7]); ?></td>
                  <td><?php print($ligne_ins[9]); ?></td>
            	    <td><?php echo'<form action="envoi_mail.php" class="sky-form" method="post">
                        				 <input type="submit" class="button" value="valider" name="val"/>
                                 <input type="hidden" name="email" value="'.$ligne_ins[5].'" />
												         <input type="hidden" name="nom" value="'.$ligne_ins[0].'" />
												         <input type="hidden" name="prenom" value="'.$ligne_ins[1].'" />
												         <input type="hidden" name="cin" value="'.$ligne_ins[3].'" />
												         <input type="hidden" name="etat" value="'.$ligne_ins[10].'" />
                                 </form>';?></td>
                  <td><?php print($ligne_ins[10]); ?></td>          
                </tr>
							  <?php } ?>
              </tbody>
             </table>
            </li>
					
					<li class="sky-tab-content-4">
    			 <table class="table table-striped table-bordered">
     			  <thead>
              <tr class="info">
            	  <td>FORMATIONS</td>
                <td>NOM</td>
                <td>PRENOM</td>
                <td>DATE DE NAISSANCE</td>
                <td>CIN</td>
                <td>N° Telephone</td>
                <td>EMAIL</td>
                <td>DIPLOME</td>
                <td>ETABLISSMENT</td>
                <td>LETTRE DE MOTIVATION</td>
                <td>Valider</td>
                <td>Traitement</td>
              </tr>
            </thead>
            <tbody>
              <?php
					 	   $all_ins=mysql_query("select * from inscription where formation='License systemes information'");
         			 while($ligne_ins=mysql_fetch_array($all_ins)){
							?>
              <tr>
                <td><?php print($ligne_ins[8]); ?></td>
                <td><?php print($ligne_ins[0]); ?></td>
                <td><?php print($ligne_ins[1]); ?></td>
                <td><?php print($ligne_ins[2]); ?></td>
                <td><?php print($ligne_ins[3]); ?></td>
                <td><?php print($ligne_ins[4]); ?></td>
                <td><?php print($ligne_ins[5]); ?></td>
                <td><?php print($ligne_ins[6]); ?></td>
                <td><?php print($ligne_ins[7]); ?></td>
                <td><?php print($ligne_ins[9]); ?></td>
          	    <td><?php echo'<form action="envoi_mail.php" class="sky-form" method="post">
                      				 <input type="submit" class="button" value="valider" name="val"/>
                               <input type="hidden" name="email" value="'.$ligne_ins[5].'" />
											         <input type="hidden" name="nom" value="'.$ligne_ins[0].'" />
											         <input type="hidden" name="prenom" value="'.$ligne_ins[1].'" />
											         <input type="hidden" name="cin" value="'.$ligne_ins[3].'" />
											         <input type="hidden" name="etat" value="'.$ligne_ins[10].'" />
                               </form>';?></td>
                <td><?php print($ligne_ins[10]); ?></td>   
              </tr>
							<?php } ?>
            </tbody>
           </table>
          </li>
					
					<li class="sky-tab-content-5"> 
    			 <table class="table table-striped table-bordered">
 				     <thead>
              <tr class="success">
          	    <td>FORMATIONS</td>
                <td>NOM</td>
                <td>PRENOM</td>
                <td>DATE DE NAISSANCE</td>
                <td>CIN</td>
                <td>N° Telephone</td>
                <td>EMAIL</td>
                <td>DIPLOME</td>
                <td>ETABLISSMENT</td>
                <td>LETTRE DE MOTIVATION</td>
                <td>Valider</td>
                <td>Traitement</td>
              </tr>
              </thead>
              <tbody>
                <?php
							  	$all_ins=mysql_query("select * from inscription where formation='Master informatique'");
     					   	while($ligne_ins=mysql_fetch_array($all_ins)){
							  ?>
                <tr>
                  <td><?php print($ligne_ins[8]); ?></td>
                  <td><?php print($ligne_ins[0]); ?></td>
                  <td><?php print($ligne_ins[1]); ?></td>
                  <td><?php print($ligne_ins[2]); ?></td>
                  <td><?php print($ligne_ins[3]); ?></td>
                  <td><?php print($ligne_ins[4]); ?></td>
                  <td><?php print($ligne_ins[5]); ?></td>
                  <td><?php print($ligne_ins[6]); ?></td>
                  <td><?php print($ligne_ins[7]); ?></td>
                  <td><?php print($ligne_ins[9]); ?></td>
            	    <td><?php echo'<form action="envoi_mail.php" class="sky-form" method="post">
                        				 <input type="submit" class="button" value="valider" name="val"/>
                                 <input type="hidden" name="email" value="'.$ligne_ins[5].'" />
												         <input type="hidden" name="nom" value="'.$ligne_ins[0].'" />
												         <input type="hidden" name="prenom" value="'.$ligne_ins[1].'" />
												         <input type="hidden" name="cin" value="'.$ligne_ins[3].'" />
												         <input type="hidden" name="etat" value="'.$ligne_ins[10].'" />
                                 </form>';?></td>
                  <td><?php print($ligne_ins[10]); ?></td>  
                </tr>
							  <?php } ?>   
              </tbody>
            </table>
         </li>					
			</ul>
		</div>
	<!--/ tabs -->        
  </div>
</body>
</html>
