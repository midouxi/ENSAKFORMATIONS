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

}
?>