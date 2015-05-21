<?php
include_once "../Classes/inscription.class.php";

class inscriptionManager {

  private $_db; 
 
  public function __construct() {
  include("../Model/constructconnect.php");
  }

  public function setDb(PDO $db) {
    $this->_db = $db;
  }

  public function add(inscription $inscription) {
    $q = $this->_db->prepare('INSERT INTO inscription SET nom = :nom, prenom = :prenom, date_naissance = :date_naissance, cin = :cin, tel = :tel, email = :email, diplome = :diplome, etablissment = :etablissment, formation = :formation, lettre_motivation = :lettre_motivation, etat = :etat , created = :created');
    $q->bindValue(':nom', $inscription->nom);
    $q->bindValue(':prenom', $inscription->prenom);
    $q->bindValue(':date_naissance', $inscription->date_naissance);
    $q->bindValue(':cin', $inscription->cin);
    $q->bindValue(':tel', $inscription->tel);
    $q->bindValue(':email', $inscription->email);
    $q->bindValue(':diplome', $inscription->diplome);
    $q->bindValue(':etablissment', $inscription->etablissment);
    $q->bindValue(':formation', $inscription->formation);
    $q->bindValue(':lettre_motivation', $inscription->lettre_motivation);
    $q->bindValue(':etat', $inscription->etat);
    $q->bindValue(':created',$inscription->created);
    $q->execute();
  }
 
  public function get($id_inscription) {
    $q = $this->_db->query('SELECT nom, prenom, date_naissance, cin, tel, email, diplome, etablissment, formation, lettre_motivation, etat ,created FROM inscription WHERE cin=\''  . $cin . '\'');
    $donnees = $q->fetch();
    if($donnees)
      return new inscription($donnees['nom'], $donnees['prenom'],$donnees['date_naissance'],  $donnees['cin'],  $donnees['tel'], $donnees['email'], $donnees['diplome'], $donnees['etablissment'], $donnees['formation'], $donnees['lettre_motivation'], $donnees['etat'], $donnees['created']);
    else 
      return null;
  }

  public function update(inscription $inscription) {
    $q = $this->_db->prepare('UPDATE inscription SET nom = :nom, prenom = :prenom, date_naissance = :date_naissance, cin = :cin, tel = :tel, email = :email, diplome = :diplome, etablissment = :etablissment, formation = :formation, lettre_motivation = :lettre_motivation, etat = :etat WHERE cin = :cin');
    $q->bindValue(':nom', $inscription->nom(), PDO::PARAM_INT);
    $q->bindValue(':prenom', $inscription->prenom(), PDO::PARAM_INT);
    $q->bindValue(':date_naissance', $inscription->date_naissance(), PDO::PARAM_INT);
    $q->bindValue(':cin', $inscription->cin(), PDO::PARAM_INT);
    $q->bindValue(':tel', $inscription->tel(), PDO::PARAM_INT);
    $q->bindValue(':email', $inscription->email(), PDO::PARAM_INT);
    $q->bindValue(':diplome', $inscription->diplome(), PDO::PARAM_INT);
    $q->bindValue(':etablissment', $inscription->etablissment(), PDO::PARAM_INT);
    $q->bindValue(':formation', $inscription->formation(), PDO::PARAM_INT);
    $q->bindValue(':lettre_motivation', $inscription->lettre_motivation(), PDO::PARAM_INT);
    $q->bindValue(':etat', $inscription->etat(), PDO::PARAM_INT);
    $q->execute();
  } 

}
?>