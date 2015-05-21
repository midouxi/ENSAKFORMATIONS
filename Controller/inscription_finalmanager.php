<?php
include_once "../Classes/inscription_final.class.php";

class inscription_finalManager {
  private $_db; 
 
  public function __construct() {
    include("../Model/constructconnect.php");
  }

  public function setDb(PDO $db) {
    $this->_db = $db;
  }

  public function add(inscription_final $inscription_final) {
    $q = $this->_db->prepare('INSERT INTO inscription_final SET nom = :nom, prenom = :prenom, cne = :cne, cin = :cin, date_naissance = :date_naissance, lieu_naissance = :lieu_naissance, province = :province, sexe = :sexe, nationalite = :nationalite, situation = :situation, handicap = :handicap, bac_annee = :bac_annee, bac_serie = :bac_serie, mention = :mention, etablissment = :etablissment, adresse = :adresse, email = :email, tel = :tel, tel_parents = :tel_parents, prof_ben = :prof_ben, prof_pere = :prof_pere, prof_mere = :prof_mere');
    $q->bindValue(':nom', $inscription_final->nom);
    $q->bindValue(':prenom', $inscription_final->prenom);
    $q->bindValue(':cne', $inscription_final->cne);
    $q->bindValue(':cin', $inscription_final->cin);
    $q->bindValue(':date_naissance', $inscription_final->date_naissance);
    $q->bindValue(':lieu_naissance', $inscription_final->lieu_naissance);
    $q->bindValue(':province', $inscription_final->province);
    $q->bindValue(':sexe', $inscription_final->sexe);
    $q->bindValue(':nationalite', $inscription_final->nationalite);
    $q->bindValue(':situation', $inscription_final->situation);
	  $q->bindValue(':handicap', $inscription_final->handicap);
	  $q->bindValue(':bac_annee', $inscription_final->bac_annee);
	  $q->bindValue(':bac_serie', $inscription_final->bac_serie);
	  $q->bindValue(':mention', $inscription_final->mention);
	  $q->bindValue(':etablissment', $inscription_final->etablissment);
	  $q->bindValue(':adresse', $inscription_final->adresse);
	  $q->bindValue(':email', $inscription_final->email);
	  $q->bindValue(':tel', $inscription_final->tel);
	  $q->bindValue(':tel_parents', $inscription_final->tel_parents);
	  $q->bindValue(':prof_ben', $inscription_final->prof_ben);
	  $q->bindValue(':prof_pere', $inscription_final->prof_pere);
	  $q->bindValue(':prof_mere', $inscription_final->prof_mere);
    $q->execute();
  }
 
  public function get($id_inscription_final) {
    $q = $this->_db->query('SELECT nom, prenom, cne, cin, date_naissance, lieu_naissance, province, sexe, nationalite, situation, handicap, bac_annee, bac_serie, mention, etablissment, adresse, email, tel, tel_parents, prof_ben, prof_pere, prof_mere FROM inscription_final WHERE cin=\''  . $cin . '\'');
    $donnees = $q->fetch();
    if($donnees)
      return new inscription_final($donnees['nom'], $donnees['prenom'],$donnees['cne'],  $donnees['cin'],  $donnees['date_naissance'],  $donnees['lieu_naissance'],  $donnees['province'],  $donnees['sexe'],  $donnees['nationalite'],  $donnees['situation'],  $donnees['handicap'],  $donnees['bac_annee'],  $donnees['bac_serie'],  $donnees['mention'],  $donnees['etablissment'],  $donnees['adresse'],  $donnees['email'], $donnees['tel'], $donnees['tel_parents'], $donnees['prof_ben'], $donnees['prof_pere'], $donnees['prof_mere']);
    else 
      return null;
  }

  public function update(inscription_final $inscription_final) {
    $q = $this->_db->prepare('UPDATE inscription_final SET nom = :nom, prenom = :prenom, cne = :cne, cin = :cin, date_naissance = :date_naissance, lieu_naissance = :lieu_naissance, province = :province, sexe = :sexe, nationalite = :nationalite, situation = :situation, handicap = :handicap, bac_annee = :bac_annee, bac_serie = :bac_serie, mention = :mention, etablissment = :etablissment, adresse = :adresse, email = :email, tel = :tel, tel_parents = :tel_parents, prof_ben = :prof_ben, prof_pere = :prof_pere, prof_mere = :prof_mere WHERE cin = :cin');
    $q->bindValue(':nom', $inscription_final->nom(), PDO::PARAM_INT);
    $q->bindValue(':prenom', $inscription_final->prenom(), PDO::PARAM_INT);
    $q->bindValue(':cne', $inscription_final->cne(), PDO::PARAM_INT);
    $q->bindValue(':cin', $inscription_final->cin(), PDO::PARAM_INT);
    $q->bindValue(':date_naissance', $inscription_final->date_naissance(), PDO::PARAM_INT);
    $q->bindValue(':lieu_naissance', $inscription_final->lieu_naissance(), PDO::PARAM_INT);
    $q->bindValue(':province', $inscription_final->province(), PDO::PARAM_INT);
    $q->bindValue(':sexe', $inscription_final->sexe(), PDO::PARAM_INT);
    $q->bindValue(':nationalite', $inscription_final->nationalite(), PDO::PARAM_INT);
    $q->bindValue(':situation', $inscription_final->situation(), PDO::PARAM_INT);
	  $q->bindValue(':handicap', $inscription_final->handicap(), PDO::PARAM_INT);
	  $q->bindValue(':bac_annee', $inscription_final->bac_annee(), PDO::PARAM_INT);
	  $q->bindValue(':bac_serie', $inscription_final->bac_serie(), PDO::PARAM_INT);
	  $q->bindValue(':mention', $inscription_final->mention(), PDO::PARAM_INT);
	  $q->bindValue(':etablissment', $inscription_final->etablissment(), PDO::PARAM_INT);
	  $q->bindValue(':adresse', $inscription_final->adresse(), PDO::PARAM_INT);
	  $q->bindValue(':email', $inscription_final->email(), PDO::PARAM_INT);
	  $q->bindValue(':tel', $inscription_final->tel(), PDO::PARAM_INT);
	  $q->bindValue(':tel_parents', $inscription_final->tel_parents(), PDO::PARAM_INT);
	  $q->bindValue(':prof_ben', $inscription_final->prof_ben(), PDO::PARAM_INT);
	  $q->bindValue(':prof_pere', $inscription_final->prof_pere(), PDO::PARAM_INT);
	  $q->bindValue(':prof_mere', $inscription_final->prof_mere(), PDO::PARAM_INT);
    $q->execute();
  } 

}
?>