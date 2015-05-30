<?php 
Class functdb {

  public $_db; 
 
  public function __construct() {
    include("../Model/constructconnect.php");
  }

	public function getformationline() { 
		$all_ins=$this->_db->query("select * from formations ORDER BY niveau ASC");    
    $all_ins->setFetchMode(PDO::FETCH_NUM);
		while($ligne=$all_ins->fetch()){     
			echo '<option value="'.$ligne[0].'" name="id_page">'.$ligne[2].' '.$ligne[1].'</option>';
		}
	}

	public function getformationlinewithid($id_page,$index){
    $all_ins=$this->_db->query("select * from formations where id_formations='$id_page'");
    $all_ins->setFetchMode(PDO::FETCH_NUM);
    $ligne_ins=$all_ins->fetch();
    return $ligne_ins[$index];
	}

  public function getinfoaccount($id,$out) {
    $q=$this->_db->query("SELECT email,mdp_admin,type,filiere FROM admin WHERE id_c='$id'");
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
    $this->_db->exec("UPDATE formations SET nbr_semestre ='$nv_nbr_semestre' WHERE id_formations ='$id'");
    $this->_db->exec("DELETE FROM semestre WHERE id_formations ='$id");
    $this->_db->exec("DELETE FROM module WHERE id_formations ='$id");   
	}

	public function deleteformation($id_pagee) {
    $this->_db->exec("DELETE FROM formations WHERE id_formations ='$id_pagee'");
    $this->_db->exec("DELETE FROM semestre WHERE id_formations ='$id_pagee'");
    $this->_db->exec("DELETE FROM module WHERE id_formations ='$id_pagee'");
	}

  public function deleteaccount($id_c) {
    $this->_db->exec("DELETE FROM admin WHERE id_c='$id_c'");
  }

  public function updateaccount($id_c,$email,$mdp,$type,$filiere) { 
    $this->_db->exec("UPDATE admin SET email ='$email' WHERE id_c ='$id_c'");
    $this->_db->exec("UPDATE admin SET mdp_admin ='$mdp' WHERE id_c ='$id_c'");
    $this->_db->exec("UPDATE admin SET type ='$type' WHERE id_c ='$id_c'");
    $this->_db->exec("UPDATE admin SET filiere ='$filiere' WHERE id_c ='$id_c'");
  }

  public function addaccount($email,$mdp,$type,$filiere) {
    $this->_db->exec("INSERT INTO admin (`id_c`, `email`, `mdp_admin`, `type`, `filiere`) VALUES (NULL, '$email', '$mdp', '$type', '$filiere');");
  }

	public function getinscription($type) {
		if ($type=="All") {
			$type="' OR '1'='1";
		}
		$all_ins=$this->_db->query("select * from inscription where formation= '$type' AND etat='0'");
    $i=0;
    $all_ins->setFetchMode(PDO::FETCH_NUM);
    while($ligne_ins=$all_ins->fetch()){  
      $idv="viewed".$i;
      $idc="contacte".$i;
      $idi="inscrit".$i;		   
      echo '<tr>'; 
      echo '<td>'.$ligne_ins[14].'</td>';
      echo '<td><strong>Nom :</strong><br>'.$ligne_ins[0].'<br><strong>Prénom :</strong><br>'.$ligne_ins[1].'<br><strong>Date De Naissance :</strong><br>'.$ligne_ins[2].'</td>';
      echo '<td>'.$ligne_ins[3].'</td>';
      echo '<td><strong>N° Telephone :</strong><br>'.$ligne_ins[4].'<br><strong>Email :</strong><br>'.$ligne_ins[5].'</td>';
      echo '<td>'.$ligne_ins[6].'</td>';
      echo '<td>'.$ligne_ins[7]. '</td>';
      echo '<td><a data-toggle="modal" data-target="#data-'.$i.'" class="btn btn-table">Visualiser</a></td>';
      $q=$this->_db->query("SELECT viewed,contacte,inscrit FROM inscription WHERE cin='$ligne_ins[3]'");
      foreach ($q as $row) {
        $a= $row['viewed'];
        $b =$row['contacte'];
        $c =$row['inscrit'];
      }
      if($a==1) $checked1="checked";
      if($b==1) $checked2="checked";
      if($c==1) $checked3="checked";
      echo '<td>';
      echo '<input type="checkbox" id="'.$idv.'" '.$checked1.'  onclick="go(\''.$ligne_ins[3].'\',\'viewed\','.$idv.')" />';
      echo '</td>';
      echo '<td>';
      echo '<input type="checkbox" id="'.$idc.'" '.$checked2.' onclick="go(\''.$ligne_ins[3].'\',\'contacte\','.$idc.')" />';
      echo '</td>';
      echo '<td>';
      echo '<input type="checkbox" id="'.$idi.'" '.$checked3.' onclick="go(\''.$ligne_ins[3].'\',\'inscrit\','.$idi.')" />';
      echo '</td>';
      echo '<td>';
      echo'<form action="" class="sky-form" method="post">
 			        <input type="submit" class="btn btn-table" value="Valider" onclick="validation(\''.$ligne_ins[3].'\')"/>
           </form>';
     	echo '</td>';
      echo '</tr>';
      $checked1=null;
      $checked2=null;
      $checked3=null;
      $i++;
		}
	}

  public function getinscriptionfin($type) {
    if ($type=="All") {
      $type="' OR '1'='1";
    }
    $i=0;
    $all_ins=$this->_db->query("select * from inscription where formation= '$type' AND etat='1'");
    $all_ins->setFetchMode(PDO::FETCH_NUM);
    while($ligne_ins=$all_ins->fetch()){   
      echo '<tr>'; 
        echo '<td>'.$ligne_ins[14].'</td>';
        echo '<td><strong>Nom :</strong><br>'.$ligne_ins[0].'<br><strong>Prénom :</strong><br>'.$ligne_ins[1].'<br><strong>Date De Naissance :</strong><br>'.$ligne_ins[2].'</td>';
        echo '<td>'.$ligne_ins[3].'</td>';
        echo '<td><strong>N° Telephone :</strong><br>'.$ligne_ins[4].'<br><strong>Email :</strong><br>'.$ligne_ins[5].'</td>';
        echo '<td>'.$ligne_ins[6].'</td>';
        echo '<td>'.$ligne_ins[7]. '</td>';
        echo '<td><a data-toggle="modal" data-target="#data-'.$i.'" class="btn btn-table">Visualiser</a></td>';
      echo '</tr>';
      $i++;
    }
  }

  public function getModalInscription($type,$etat) {
    if ($type=="All") {
      $type="' OR '1'='1";
    }
    $all_ins=$this->_db->query("select * from inscription where formation= '$type' AND etat='$etat'");
    $i=0;
    $all_ins->setFetchMode(PDO::FETCH_NUM);
      while($ligne_ins=$all_ins->fetch()){  
        echo '<!-- modal definition -->
                <div class="modal fade" id="data-'.$i.'" tabindex="-1" role="dialog" aria-labelle_dby="compt-Label" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header modal-header-compt">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="compt-Label">LETTRE DE MOTIVATION</h4>
                      </div>
                      <div class="modal-body modal-body-compt">
                        <h3>Lettre de motivation de '.$ligne_ins[0].' '.$ligne_ins[1].'</h3>
                        <p>'.$ligne_ins[9].'</p>
                      </div>
                    </div>
                  </div>
                </div>';
              $i++;
        }
  }

	public function getinscriptionfinal(){
    $all_ins=$this->_db->query("select * from inscription_final");
 	  $all_ins->setFetchMode(PDO::FETCH_NUM);
    while($ligne_ins=$all_ins->fetch()){ 
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
    $all_ins=$this->_db->query("select * from admin");
    $all_ins->setFetchMode(PDO::FETCH_NUM);
    while($ligne_ins=$all_ins->fetch()){ 
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
                <input type="submit" class="btn btn-table" value="Supprimer" name="val" onclick="return confirm(\'Etes-vous sûr que vous voulez supprimer ce compte ?\')"/>
                <input type="hidden" name="id_c" value="'.$ligne_ins[0].'" />
             </form>'; 
        echo '</td>';
      echo '</tr>';
    }
  }

  public function profexiste($idformation) {
     $all_ins=$this->_db->query("SELECT * FROM lier ");
     $all_ins->setFetchMode(PDO::FETCH_NUM);
     while($ligne=$all_ins->fetch()){ 
        if($ligne[0]==$idformation){
            return "disabled";
        }
      }
      return null;

  }

  public function getprofs() {
    $all_ins=$this->_db->query("select * from prof");
    $i=0;
    $all_ins->setFetchMode(PDO::FETCH_NUM);
    while($ligne_ins=$all_ins->fetch()){ 
      echo '<tr>'; 
        echo '<td>'.$ligne_ins[1].'</td>';
        echo '<td>'.$ligne_ins[2].'</td>';
        echo '<td>'.$ligne_ins[3].'</td>';
        echo '<td>'.$ligne_ins[4].'</td>';
        echo '<td class="fixed-formation">';
        $all_ins_form=$this->_db->query("select * from formations");
        $all_ins_form->setFetchMode(PDO::FETCH_NUM);
        while($ligne_ins_form=$all_ins_form->fetch()){ 
          $idv="formation".$i;
          $q=$this->_db->query("SELECT id_formations,id_prof FROM lier WHERE id_formations='$ligne_ins_form[0]' AND id_prof='$ligne_ins[0]'");
          foreach ($q as $row) {
            $a= $row['id_formations'];
            $b= $row['id_prof'];
          }
          echo $ligne_ins_form[2].' '.$ligne_ins_form[1].'  ';
          if($a==$ligne_ins_form[0] && $b==$ligne_ins[0]) $checked1="checked";
          echo '<input type="checkbox" id="'.$idv.'" '.$checked1.' '.$this->profexiste($ligne_ins_form[0]).' onclick="goo(\''.$ligne_ins[0].'\',\''.$ligne_ins_form[0].'\','.$idv.')" /></br>';
          $i++;
          $checked1=null;
        }
        echo'</td>';
        echo '<td>' ;
        echo' <form action="update_prof.php" class="sky-form" method="post">
                <input type="submit" class="btn btn-table" value="Modifier" name="val"/>
                <input type="hidden" name="id_prof" value="'.$ligne_ins[0].'" />
             </form>
             <form action="delete_prof.php" class="sky-form" method="post">
                <input type="submit" class="btn btn-table" value="Supprimer" name="val" onclick="return confirm(\'Etes-vous sûr que vous voulez supprimer ce prof ?\')"/>
                <input type="hidden" name="id_prof" value="'.$ligne_ins[0].'" />
             </form>'; 
        echo '</td>';
      echo '</tr>';
    }
  }

  public function deleteprof($idprof) {
    $this->_db->exec("DELETE FROM prof WHERE id_prof='$idprof'");
    $this->_db->exec("DELETE FROM lier WHERE id_prof='$idprof'");
  }

  public function updateprof($idprof,$nom,$prenom,$resume,$descriptif,$photo) { 
    $this->_db->exec("UPDATE prof SET nom ='$nom' WHERE id_prof ='$idprof'");
    $this->_db->exec("UPDATE prof SET prenom ='$prenom' WHERE id_prof ='$idprof'");
    $this->_db->exec("UPDATE prof SET resume ='$resume' WHERE id_prof ='$idprof'");
    $this->_db->exec("UPDATE prof SET descriptif ='$descriptif' WHERE id_prof ='$idprof'");
    if($photo != NULL) {
      $this->_db->exec("UPDATE prof SET photo ='$photo' WHERE id_prof ='$idprof'");
    }
  }

  public function addprof($nom,$prenom,$resume,$descriptif,$photo) {
    $this->_db->exec("INSERT INTO prof (nom, prenom, resume, descriptif, photo) VALUES ('$nom', '$prenom', '$resume', '$descriptif', '$photo')");
  }

  public function getresponsable($idprof) {
    $all_ins=$this->_db->query("select * from lier where id_prof= '$idprof'");
    $all_ins->setFetchMode(PDO::FETCH_NUM);
    while($ligne_ins=$all_ins->fetch()){  
      echo '<tr>'; 
        echo '<td>'.$this->getformationlinewithid($ligne_ins[0],2).' '.$this->getformationlinewithid($ligne_ins[0],1).'</td>';
        echo '<td>';
        echo '<input class="btn btn-table" value="Supprimer" onclick="supprimer(\''.$ligne_ins[0].'\',\''.$ligne_ins[1].'\')"/>';
        echo '</td>';
      echo '</tr>'; 
    }
  }
  

}
?>