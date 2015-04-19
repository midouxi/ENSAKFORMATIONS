<?php
include_once "../Classes/admin.class.php";

class adminmanager {

  private $_db; 
 
  public function __construct() {
  $this->_db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
  }

  public function setDb(PDO $db) {
    $this->_db = $db;
  }

  public function add(admin $admin) {
  $q = $this->_db->prepare('INSERT INTO admin SET email= :email, mdp_admin = :mdp_admin') or die ("erreur");
	$q->bindValue(':email', $admin->email);
  $q->bindValue(':mdp_admin', $admin->mdp_admin);
	$q->execute();
  }
 

  public function get($email) {
  $q = $this->_db->query('SELECT email, mdp_admin FROM admin WHERE email=\''  . $email . '\'');
  $donnees = $q->fetch();
  if($donnees)
    return new admin($donnees['email'], $donnees['mdp_admin']);
  else 
    return null;
  }

  public function gettype($email) {
  $q = $this->_db->query('SELECT type FROM admin WHERE email=\''  . $email . '\'');
  $donnees = $q->fetch();
  if($donnees)
    return $donnees['type'];
  else 
    return null;
  }

  public function getfiliere($email) {
  $q = $this->_db->query('SELECT filiere FROM admin WHERE email=\''  . $email . '\'');
  $donnees = $q->fetch();
  if($donnees)
    return $donnees['filiere'];
  else 
    return null;
  }


  public function update(admin $admin) {
  $q = $this->_db->prepare('UPDATE admin SET  email= :email, mdp_admin = :mdp_admin  WHERE email= :email');
	$q->bindValue(':email',$admin->email(), PDO::PARAM_INT);
  $q->bindValue(':mdp_admin', $admin->mdp_admin(), PDO::PARAM_INT);
  $q->execute();
  } 

  public function signForm() {
    echo '<form action="" class="bs-example form-horizontal" method="post">
                <h2>Connexion</h2>            
                <fieldset>
                    <div class="form-group">
                      <div class="col-lg-12">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                      </div>
                    </div> 
                    <div class="form-group">
                      <div class="col-lg-12">
                        <input class="form-control" type="password" name="mdp_siteadmin" placeholder="Mot de passe">
                      </div>
                    </div> 
                    <button type="submit" class="btn btn-valide">Se connecter</button>
                </fieldset>
            </form>';
  }

  public function Adminconnect($postemail,$postmdp) {

    if(empty($postemail) AND empty($postmdp)) {
      $this->signForm();
    } else {
        $siteadmin = $this->get($postemail);
        if($siteadmin) {
          if(!$siteadmin->verifyPassword($postmdp)) {
          echo 'accès refusé <hr>';
          $this->signForm();
        } else {
          //var_dump($this->gettype($postemail));
            if($this->gettype($postemail)=="admin") {
              session_start();
              $_SESSION['email'] = $siteadmin->email;
              $_SESSION['mdp'] = $siteadmin->mdp_admin;
              $_SESSION['type'] = "admin";
              session_write_close();
              echo '<script> 
                      window.location.href="../Admin/pageadmin.php"; 
                    </script> ';
             } else if ($this->gettype($postemail) == "editeur") {
              session_start();
              $_SESSION['email'] = $siteadmin->email;
              $_SESSION['mdp'] = $siteadmin->mdp_admin;
              $_SESSION['type'] = "editeur";
              $_SESSION['filiere'] = $this->getfiliere($postemail);
              session_write_close();
              echo '<script> 
                      window.location.href="../Edit/adminpage.php"; 
                    </script> ';
             } else { echo "compte non spécifié veuillez contacter l'admin " ;}
          } 
        } else {
            echo '<div class="alert alert-danger" role="alert"><p>Accès refusé </p></div>';
            $this->signForm();
           }
    }    
  }
} 

?>