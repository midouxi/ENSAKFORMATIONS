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
    echo '<form action="" class="sky-form" method="post">
                <header>Connexion</header>            
                <fieldset>          
                    <section>
                        <div class="row">
                            <label class="label col col-4">E-mail</label>
                            <div class="col col-8">
                                <label class="input">
                                    <i class="icon-append icon-user"></i>
                                    <input type="email" name="email">
                                </label>
                            </div>
                        </div>
                    </section>           
                    <section>
                        <div class="row">
                            <label class="label col col-4">Password</label>
                            <div class="col col-8">
                                <label class="input">
                                    <i class="icon-append icon-lock"></i>
                                    <input type="password" name="mdp_siteadmin">
                                </label>
                            </div>
                        </div>
                    </section>
                </fieldset>
                <footer>
                    <button type="submit" class="button large">Se connecter</button>
                </footer>
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
                      window.location.href="../Edit/adminpage1.php"; 
                    </script> ';
             } else { echo "compte non spécifié veuillez contacter l'admin " ;}
          } 
        } else {
            echo '<font color="red">accès refusé </font><hr>';
            $this->signForm();
           }
    }    
  }
} 

?>