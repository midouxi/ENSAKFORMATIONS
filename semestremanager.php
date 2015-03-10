<?php
include_once "semestre.class.php";

class semestremanager
{

  private $_db; 
 
  public function __construct()
  {
    $this->_db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
	/*$this->_db = new PDO('mysql:host=localhost;dbname=ensakfor_fc','ensakfor_root','admin');*/
  }

 public function setDb(PDO $db)
  {
    $this->_db = $db;
  }

  public function add(semestre $semestre)
  {
    $q = $this->_db->prepare('INSERT INTO semestre SET id_semestre = :id_semestre, nbr_module = :nbr_module, id_formations = :id_formations');
 
    $q->bindValue(':id_semestre', $semestre->id_semestre);
    $q->bindValue(':nbr_module', $semestre->nbr_module);
    $q->bindValue(':id_formations', $semestre->id_formations);
    $q->execute();
  }
 

  public function get($id_semestre)
  {
 
     $q = $this->_db->query('SELECT id_semestre, nbr_module, id_formations FROM semestre WHERE id_semestre=\''  . $id_semestre . '\'');
     $donnees = $q->fetch();

    if($donnees)
      return new semestre($donnees['id_semestre'], $donnees['nbr_module'] , $donnees['id_formations']);
    else 
      return null;
  }

  public function update(semestre $semestre)
  {
    $q = $this->_db->prepare('UPDATE semestre SET id_semestre = :id_semestre, nbr_module = :nbr_module, id_formations = :id_formations WHERE id_semestre = :id_semestre');

    $q->bindValue(':id_semestre', $semestre->id_semestre);
    $q->bindValue(':nbr_module', $semestre->nbr_module);
    $q->bindValue(':id_formations', $semestre->id_formations);
   
	$q->execute();
  }  
}

  

?>