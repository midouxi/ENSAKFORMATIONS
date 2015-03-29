<?php 
Class functdb {

	public function getformationline() { //existe 2 ds administrateur1 et 1 ds administrateur 1
		$all=mysql_query("select * from formations");    
		while($ligne=mysql_fetch_array($all)){     
			echo '<option value="'.$ligne[0].'" name="id_page">'.$ligne[2].' '.$ligne[1].'</option>';
		}
	}

	public function getformationlinewithid($id_page){
        $all_ins=mysql_query("select * from formations where id_formations='$id_page'");
        $ligne_ins=mysql_fetch_array($all_ins);
	}

	public function getnbrsemester($id,$nv_nbr_semestre) {
        $db->exec("UPDATE formations SET nbr_semestre ='$nv_nbr_semestre' WHERE id_formations ='$id'");
        $db->exec("DELETE FROM semestre WHERE id_formations ='$id");
        $db->exec("DELETE FROM module WHERE id_formations ='$id");   
	}

	public function deleteformation($id_pagee) {
		$id_page=$_POST['id_page'];
        $db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
        $db->exec("DELETE FROM formations WHERE id_formations ='$id_pagee'");
        $db->exec("DELETE FROM semestre WHERE id_formations ='$id_pagee'");
        $db->exec("DELETE FROM module WHERE id_formations ='$id_pagee'");
	}

	public function getinscription($type) {
		if ($type=="all") {
			$filtre="'' OR 1=1";
		}
		else if ($type=="lil") {
			$filtre="'License Ingenierie du logiciel'";
		}
		else if ($type=="lar") {
			$filtre="'License Administration reseaux'";
		}
		else if ($type=="lsi") {
			$filtre="'License systemes information'";
		}
		else if ($type=="mi") {
			$filtre="'Master informatique'";
		}
		$all_ins=mysql_query("select * from inscription where formation= $filtre");
	   	while($ligne_ins=mysql_fetch_array($all_ins)){			   
              echo '<tr>'; 
              echo '<td>'.$ligne_ins[8].'</td>';
              echo '<td>'.$ligne_ins[0].'</td>';
              echo '<td>'.$ligne_ins[1].'</td>';
              echo '<td>'.$ligne_ins[2].'</td>';
              echo '<td>'.$ligne_ins[3].'</td>';
              echo '<td>'.$ligne_ins[4].'</td>';
              echo '<td>'.$ligne_ins[5].'</td>';
              echo '<td>'.$ligne_ins[6].'</td>';
              echo '<td>'.$ligne_ins[7]. '</td>';
              echo '<td>'.$ligne_ins[9]. '</td>';
              echo '<td>';
              echo'<form action="envoi_mail.php" class="sky-form" method="post">
			   			<input type="submit" class="button" value="valider" name="val"/>
               			<input type="hidden" name="email" value="'.$ligne_ins[5].'" />
		       			<input type="hidden" name="nom" value="'.$ligne_ins[0].'" />
		       			<input type="hidden" name="prenom" value="'.$ligne_ins[1].'" />
		       			<input type="hidden" name="cin" value="'.$ligne_ins[3].'" />
		       			<input type="hidden" name="etat" value="'.$ligne_ins[10].'" />
                   </form>';
             	echo '</td>';
             	echo '<td>';
             	print($ligne_ins[10]);
             	echo '</td>';
              	echo '</tr>';
     
		}
	}

	public function getinscriptionfinal(){
		$all_ins=mysql_query("select * from inscription_final");
 	   	while($ligne_ins=mysql_fetch_array($all_ins)){
 	   		echo '<tr>'; 
              echo '<td>'.$ligne_ins[0].'</td>';
              echo '<td>'.$ligne_ins[1].'</td>';
              echo '<td>'.$ligne_ins[2].'</td>';
              echo '<td>'.$ligne_ins[3].'</td>';
              echo '<td>'.$ligne_ins[4].'</td>';
              echo '<td>'.$ligne_ins[5].'</td>';
              echo '<td>'.$ligne_ins[6].'</td>';
              echo '<td>'.$ligne_ins[7]. '</td>';
              echo '<td>'.$ligne_ins[8].'</td>';
              echo '<td>'.$ligne_ins[9]. '</td>';
              echo '<td>'.$ligne_ins[10].'</td>';
              echo '<td>'.$ligne_ins[11].'</td>';
              echo '<td>'.$ligne_ins[12].'</td>';
              echo '<td>'.$ligne_ins[13].'</td>';
              echo '<td>'.$ligne_ins[14].'</td>';
              echo '<td>'.$ligne_ins[15].'</td>';
              echo '<td>'.$ligne_ins[16].'</td>';
              echo '<td>'.$ligne_ins[17]. '</td>';
              echo '<td>'.$ligne_ins[18].'</td>';
              echo '<td>'.$ligne_ins[19]. '</td>';
              echo '<td>'.$ligne_ins[20].'</td>';
              echo '<td>'.$ligne_ins[21].'</td>';
          	echo '</tr>';
      	}
  	}
	 

}
?>