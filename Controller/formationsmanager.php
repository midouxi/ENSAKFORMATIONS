<?php
include_once "../Classes/formations.class.php";

class formationsmanager
{
  private $_db; 

  public function __construct() {
    include("../Model/constructconnect.php");
  }

  public function setDb(PDO $db) {
    $this->_db = $db;
  }

  public function add(formations $formations) {
    $q = $this->_db->prepare('INSERT INTO formations SET id_formations = :id_formations, menu_titre = :menu_titre, niveau = :niveau, id_logo = :id_logo, titre = :titre, nbr_semestre = :nbr_semestre, domaine = :domaine, type_formations = :type_formations, duree = :duree, email = :email, telephone = :telephone, fax = :fax, Debouche_formations = :Debouche_formations, condition_admission = :condition_admission, organisation_formations = :organisation_formations, date_depot = :date_depot, date_entretien = :date_entretien, frais_formations = :frais_formations, frais_entretien = :frais_entretien, logo_sponsor = :logo_sponsor');
    $q->bindValue(':id_formations', $formations->id_formations);
    $q->bindValue(':menu_titre', $formations->menu_titre);
    $q->bindValue(':niveau', $formations->niveau);
    $q->bindValue(':id_logo', $formations->id_logo);
    $q->bindValue(':titre', $formations->titre);
    $q->bindValue(':nbr_semestre', $formations->nbr_semestre);
    $q->bindValue(':domaine', $formations->domaine);
    $q->bindValue(':type_formations', $formations->type_formations);
    $q->bindValue(':duree', $formations->duree);
    $q->bindValue(':email', $formations->email);
    $q->bindValue(':telephone', $formations->telephone);
    $q->bindValue(':fax', $formations->fax);
    $q->bindValue(':Debouche_formations', $formations->Debouche_formations);
    $q->bindValue(':condition_admission', $formations->condition_admission);
    $q->bindValue(':organisation_formations', $formations->organisation_formations);
    $q->bindValue(':date_depot', $formations->date_depot);
    $q->bindValue(':date_entretien', $formations->date_entretien);
    $q->bindValue(':frais_formations', $formations->frais_formations);
    $q->bindValue(':frais_entretien', $formations->frais_entretien);
    $q->bindValue(':logo_sponsor', $formations->logo_sponsor);
    $q->execute();
  }
 
  public function get($id_formations) {
  $q = $this->_db->query('SELECT id_formations, menu_titre, niveau, id_logo, titre, nbr_semestre, domaine, type_formations, duree, email, telephone, fax, Debouche_formations, condition_admission, organisation_formations, date_depot, date_entretien, frais_formations, frais_entretien, logo_sponsor FROM formations WHERE id_formations=\''  . $id_formations . '\'');
  $donnees = $q->fetch();
  if($donnees)
    return new formations($donnees['id_formations'], $donnees['menu_titre'] , $donnees['niveau'],$donnees['id_logo'],  $donnees['titre'], $donnees['nbr_semestre'],  $donnees['domaine'], $donnees['type_formations'], $donnees['duree'], $donnees['email'], $donnees['telephone'], $donnees['fax'], $donnees['Debouche_formations'], $donnees['condition_admission'], $donnees['organisation_formations'], $donnees['date_depot'], $donnees['date_entretien'], $donnees['frais_formations'], $donnees['frais_entretien'], $donnees['logo_sponsor']);
  else 
    return null;
  }

  public function update(formations $formations) {
    $q = $this->_db->prepare('UPDATE formations SET id_formations = :id_formations, menu_titre = :menu_titre, niveau = :niveau, id_logo = :id_logo, titre = :titre, nbr_semestre = :nbr_semestre, domaine = :domaine, type_formations = :type_formations, duree = :duree, email = :email, telephone = :telephone, fax = :fax, Debouche_formations = :Debouche_formations, condition_admission = :condition_admission, organisation_formations = :organisation_formations, date_depot = :date_depot, date_entretien = :date_entretien, frais_formations = :frais_formations, frais_entretien = :frais_entretien, logo_sponsor = :logo_sponsor WHERE id_formations = :id_formations');
    $q->bindValue(':id_formations', $formations->id_formations);
    $q->bindValue(':menu_titre', $formations->menu_titre);
    $q->bindValue(':niveau', $formations->niveau);
    $q->bindValue(':id_logo', $formations->id_logo);
    $q->bindValue(':titre', $formations->titre);
    $q->bindValue(':nbr_semestre', $formations->nbr_semestre);
    $q->bindValue(':domaine', $formations->domaine);
    $q->bindValue(':type_formations', $formations->type_formations);
    $q->bindValue(':duree', $formations->duree);
    $q->bindValue(':email', $formations->email);
    $q->bindValue(':telephone', $formations->telephone);
    $q->bindValue(':fax', $formations->fax);
    $q->bindValue(':Debouche_formations', $formations->Debouche_formations);
    $q->bindValue(':condition_admission', $formations->condition_admission);
    $q->bindValue(':organisation_formations', $formations->organisation_formations);
    $q->bindValue(':date_depot', $formations->date_depot);
    $q->bindValue(':date_entretien', $formations->date_entretien);
    $q->bindValue(':frais_formations', $formations->frais_formations);
    $q->bindValue(':frais_entretien', $formations->frais_entretien);
    $q->bindValue(':logo_sponsor', $formations->logo_sponsor);
	  $q->execute();
  } 

}
?>