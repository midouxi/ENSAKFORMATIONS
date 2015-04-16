<?php 
Class functdb {

	public function getformationline() { //existe 2 ds administrateur1 et 1 ds administrateur 1
		$all=mysql_query("select * from formations");    
		while($ligne=mysql_fetch_array($all)){     
			echo '<option value="'.$ligne[0].'" name="id_page">'.$ligne[2].' '.$ligne[1].'</option>';
		}
	}

	public function getformationlinewithid($id_page,$index){
        $all_ins=mysql_query("select * from formations where id_formations='$id_page'");
        $ligne_ins=mysql_fetch_array($all_ins);
        return $ligne_ins[$index];
	}

  public function getinfoaccount($id,$out) {
    $db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
    $q=$db->query("SELECT email,mdp_admin,type,filiere FROM admin WHERE id_c='$id'");
    foreach ($q as $row) {
       $a= $row['email'];
       $b =$row['mdp_admin'];
       $c =$row['type'];
       $d =$row['filiere'];
    }

    if($out=="email") return $a;
    if($out=="mdp") return $b;
    if($out=="type") return $c;
    if($out=="filiere") return $d;
      else {return null;}
  }
	public function getnbrsemester($id,$nv_nbr_semestre) {
        $db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
        $db->exec("UPDATE formations SET nbr_semestre ='$nv_nbr_semestre' WHERE id_formations ='$id'");
        $db->exec("DELETE FROM semestre WHERE id_formations ='$id");
        $db->exec("DELETE FROM module WHERE id_formations ='$id");   
	}

	public function deleteformation($id_pagee) {
        $db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
        $db->exec("DELETE FROM formations WHERE id_formations ='$id_pagee'");
        $db->exec("DELETE FROM semestre WHERE id_formations ='$id_pagee'");
        $db->exec("DELETE FROM module WHERE id_formations ='$id_pagee'");
	}

  public function deleteaccount($id_c) {
        $db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
        $db->exec("DELETE FROM admin WHERE id_c='$id_c'");
  }

  public function updateaccount($id_c,$email,$mdp,$type,$filiere) { 
    $db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
    $db->exec("UPDATE admin SET email ='$email' WHERE id_c ='$id_c'");
    $db->exec("UPDATE admin SET mdp_admin ='$mdp' WHERE id_c ='$id_c'");
    $db->exec("UPDATE admin SET type ='$type' WHERE id_c ='$id_c'");
    $db->exec("UPDATE admin SET filiere ='$filiere' WHERE id_c ='$id_c'");
  }

  public function addaccount($email,$mdp,$type,$filiere) {
    $db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
    $db->exec("INSERT INTO admin (`id_c`, `email`, `mdp_admin`, `type`, `filiere`) VALUES (NULL, '$email', '$mdp', '$type', '$filiere');");

  }
	public function getinscription($type) {
    $db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
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
      $i=0;
      
	   	while($ligne_ins=mysql_fetch_array($all_ins)){	
              $idv="viewed".$i;
              $idc="contacte".$i;
              $idi="inscrit".$i;		   
              echo '<tr>'; 
              echo '<td>'.$ligne_ins[8].'</td>';
              echo '<td><strong>Nom :</strong><br>'.$ligne_ins[0].'<br><strong>Prénom :</strong><br>'.$ligne_ins[1].'<br><strong>Date De Naissance :</strong><br>'.$ligne_ins[2].'</td>';
              echo '<td>'.$ligne_ins[3].'</td>';
              echo '<td><strong>N° Telephone :</strong><br>'.$ligne_ins[4].'<br><strong>Email :</strong><br>'.$ligne_ins[5].'</td>';
              echo '<td>'.$ligne_ins[6].'</td>';
              echo '<td>'.$ligne_ins[7]. '</td>';
              echo '<td><a data-toggle="modal" data-target="#data-'.$i.'" class="btn btn-table">Visualiser</a></td>';
              echo '<td class="fixed">';
              $q=$db->query("SELECT viewed,contacte,inscrit FROM inscription WHERE cin='$ligne_ins[3]'");
              foreach ($q as $row) {
                $a= $row['viewed'];
                $b =$row['contacte'];
                $c =$row['inscrit'];
              }
              if($a==1) $checked1="checked";
              if($b==1) $checked2="checked";
              if($c==1) $checked3="checked";
              echo 'Vue ';
              echo '<input type="checkbox" id="'.$idv.'" '.$checked1.'  onclick="go(\''.$ligne_ins[3].'\',\'viewed\','.$idv.')" />';
              echo '<br>Contacté ';
              echo '<input type="checkbox" id="'.$idc.'" '.$checked2.' onclick="go(\''.$ligne_ins[3].'\',\'contacte\','.$idc.')" />';
              echo '<br>Inscrit ';
              echo '<input type="checkbox" id="'.$idi.'" '.$checked3.' onclick="go(\''.$ligne_ins[3].'\',\'inscrit\','.$idi.')" />';
              //"go('.$ligne_ins[3].')" />';
              echo '</td>';
              echo '<td>';
              echo'<form action="envoi_mail.php" class="sky-form" method="post">
		   			        <input type="submit" class="btn btn-table" value="valider" name="val"/>
             			  <input type="hidden" name="email" value="'.$ligne_ins[5].'" />
	       			      <input type="hidden" name="nom" value="'.$ligne_ins[0].'" />
	       			      <input type="hidden" name="prenom" value="'.$ligne_ins[1].'" />
	       			      <input type="hidden" name="cin" value="'.$ligne_ins[3].'" />
	       			      <input type="hidden" name="etat" value="'.$ligne_ins[10].'" />
                   </form>';
             	echo '</td>';
              echo '</tr>';
              $checked1=null;
              $checked2=null;
              $checked3=null;
              $i++;
		}
	}
  public function getModalInscription($type)
  {
    $db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
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
      $i=0;
      while($ligne_ins=mysql_fetch_array($all_ins)){  
        echo '<!-- modal definition -->
                <div class="modal fade" id="data-'.$i.'" tabindex="-1" role="dialog" aria-labelledby="compt-Label" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header modal-header-compt">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="compt-Label">LETTRE DE MOTIVATION</h4>
                      </div>
                      <div class="modal-body modal-body-compt">
                        <h3>Lettre de motivation de '.$ligne_ins[0].' '.$ligne_ins[1].'</h3>
                        <p>'.utf8_encode($ligne_ins[9]).'</p>
                      </div>
                    </div>
                  </div>
                </div>';
              $i++;
        }
  }
	public function getinscriptionfinal(){
		$all_ins=mysql_query("select * from inscription_final");
 	   	while($ligne_ins=mysql_fetch_array($all_ins)){
 	   		echo '<tr>'; 
              echo '<td><strong>Nom :</strong><br>'.$ligne_ins[0].'<br><strong>Prénom :</strong><br>'.$ligne_ins[1].'<br><strong>Date De Naissance :</strong><br>'.$ligne_ins[4].'<br><strong>Lieu De Naissance :</strong><br>'.$ligne_ins[5].'</td>';
              echo '<td>'.$ligne_ins[2].'</td>';
              echo '<td>'.$ligne_ins[3].'</td>';
              echo '<td>'.$ligne_ins[6].'</td>';
              echo '<td>'.$ligne_ins[7]. '</td>';
              echo '<td>'.$ligne_ins[8].'</td>';
              echo '<td>'.$ligne_ins[9]. '</td>';
              echo '<td>'.$ligne_ins[10].'</td>';
              echo '<td><strong>Annee d\'obtention du bac :</strong><br>'.$ligne_ins[11].'<br><strong>N° Serie du BAC :</strong><br>'.$ligne_ins[12].'<br><strong>Mention :</strong><br>'.$ligne_ins[13].'<br><strong>Etablissment :</strong><br>'.$ligne_ins[14].'</td>';
              echo '<td><strong>Adresse :</strong><br>'.$ligne_ins[15].'<br><strong>Email :</strong><br>'.$ligne_ins[16].'<br><strong>N° Telephone :</strong><br>'.$ligne_ins[17].'<br><strong>N° Telephone PARENTS :</strong><br>'.$ligne_ins[18].'</td>';
              echo '<td><strong>BENEFICIER :</strong><br>'.$ligne_ins[19]. '<br><strong>DU PERE :</strong><br>'.$ligne_ins[20].'<br><strong>DE LA MERE :</strong><br>'.$ligne_ins[21].'</td>';
      	echo '</tr>';
      	}
  	}
  public function getaccounts(){
    $all_ins=mysql_query("select * from admin");
      while($ligne_ins=mysql_fetch_array($all_ins)){
        echo '<tr>'; 
            
              echo '<td>'.$ligne_ins[1].'</td>';
              echo '<td>'.$ligne_ins[2].'</td>';
              echo '<td>'.$ligne_ins[3].'</td>';
              echo '<td>'.$ligne_ins[4].'</td>';
              echo '<td>' ;
              echo' <form action="update_account.php" class="sky-form" method="post">
                      <input type="submit" class="btn btn-table" value="Modifier" name="val"/>
                      <input type="hidden" name="id_c" value="'.$ligne_ins[0].'" />
                   </form>
                   <form action="delete_account.php" class="sky-form" method="post">
                      <input type="submit" class="btn btn-table" value="Supprimer" name="val"/>
                      <input type="hidden" name="id_c" value="'.$ligne_ins[0].'" />
                   </form>'; 
              echo '</td>';
         echo '</tr>';
      }

  }

}
?>