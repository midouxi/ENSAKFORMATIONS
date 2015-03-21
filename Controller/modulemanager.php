<?php
include_once "../Classes/module.class.php";

class modulemanager {

  private $_db; 
 
  public function __construct() {
    $this->_db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
	  /*$this->_db = new PDO('mysql:host=localhost;dbname=ensakfor_fc','ensakfor_root','admin');*/
  }

  public function setDb(PDO $db) {
    $this->_db = $db;
  }

  public function add(module $module) {
    $q = $this->_db->prepare('INSERT INTO module SET id_module = :id_module, nom_module = :nom_module, id_semestre = :id_semestre, id_formations = :id_formations');
    $q->bindValue(':id_module', $module->id_module);
    $q->bindValue(':nom_module', $module->nom_module);
    $q->bindValue(':id_semestre', $module->id_semestre);
    $q->bindValue(':id_formations', $module->id_formations);
    $q->execute();
  }

  public function get($id_module) {
    $q = $this->_db->query('SELECT id_module, nom_module, id_semestre, id_formations FROM module WHERE id_module=\''  . $id_module . '\'');
    $donnees = $q->fetch();
    if($donnees)
      return new module($donnees['id_module'], $donnees['nom_module'], $donnees['id_semestre'], $donnees['id_formations']);
    else 
      return null;
  }

  public function update(module $module) {
    $q = $this->_db->prepare('UPDATE module SET id_module = :id_module, nom_module = :nom_module, id_semestre = :id_semestre, id_formations = :id_formations WHERE id_module = :id_module');
    $q->bindValue(':id_module', $module->id_module);
    $q->bindValue(':nom_module', $module->nom_module);
    $q->bindValue(':id_semestre', $module->id_semestre);
    $q->bindValue(':id_formations', $module->id_formations);
	  $q->execute();
  }  

}
?>