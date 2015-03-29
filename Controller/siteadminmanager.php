<?php
include_once "../Classes/siteadmin.class.php";

class siteadminmanager {

  private $_db; 
 
  public function __construct() {
    $this->_db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
	  /*$this->_db = new PDO('mysql:host=localhost;dbname=ensakfor_fc','ensakfor_root','siteadmin');*/
  }

  public function setDb(PDO $db) {
    $this->_db = $db;
  }

  public function add(siteadmin $siteadmin) {
    $q = $this->_db->prepare('INSERT INTO siteadmin SET email= :email, mdp_siteadmin = :mdp_siteadmin') or die ("erreur");
    $q->bindValue(':email', $siteadmin->email);
    $q->bindValue(':mdp_siteadmin', $siteadmin->mdp_siteadmin);
	  $q->execute();
  }
 
  public function get($email) {
    $q = $this->_db->query('SELECT email, mdp_siteadmin FROM siteadmin WHERE email=\''  . $email . '\'');
    $donnees = $q->fetch();
    if($donnees)
      return new siteadmin($donnees['email'], $donnees['mdp_siteadmin']);
    else 
      return null;
  }

  public function update(siteadmin $siteadmin) {
    $q = $this->_db->prepare('UPDATE siteadmin SET  email= :email, mdp_siteadmin = :mdp_siteadmin  WHERE email= :email');
    $q->bindValue(':email',$siteadmin->email(), PDO::PARAM_INT);
    $q->bindValue(':mdp_siteadmin', $siteadmin->mdp_siteadmin(), PDO::PARAM_INT);
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

  public function Adminconnect($postemail,$postmdp ,$sessionemail,$sessionmdp) {

    if(empty($postemail) AND empty($postmdp)) {
      $this->signForm();
    } else {
        $siteadmin = $this->get($postemail);
        if($siteadmin) {
          if(!$siteadmin->verifyPassword($postmdp)) {
          echo 'accès refusé <hr>';
          signForm();
        } else {
            $sessionemail = $siteadmin->email;
            $sessionmdp = $siteadmin->mdp_siteadmin;
            echo '<script> 
                    window.location.href="pageadmin.php"; 
                  </script> ';
          } 
        } else {
            echo '<font color="red">accès refusé </font><hr>';
            $this->signForm();
           }
    }    
  }
}
?>