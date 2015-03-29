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

  public function update(admin $admin) {
  $q = $this->_db->prepare('UPDATE admin SET  email= :email, mdp_admin = :mdp_admin  WHERE email= :email');
	$q->bindValue(':email',$admin->email(), PDO::PARAM_INT);
  $q->bindValue(':mdp_admin', $admin->mdp_admin(), PDO::PARAM_INT);
  $q->execute();
  }  

}
?>