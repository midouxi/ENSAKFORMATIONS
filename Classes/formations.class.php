<?php

class formations {
	public $id_formations;
	public $menu_titre;
	public $niveau;
	public $id_logo;
	public $titre;
	public $nbr_semestre;
	public $domaine;
	public $type_formations;
	public $duree;
	public $email;
	public $telephone;
	public $fax;
	public $Debouche_formations;
	public $condition_admission;
	public $organisation_formations;
	public $date_depot;
	public $date_entretien;
	public $frais_formations;
	public $frais_entretien;
	public $logo_sponsor;

 	function __construct($id_formations,$menu_titre,$niveau,$id_logo,$titre,$nbr_semestre,$domaine,$type_formations,$duree,$email,$telephone,$fax,$Debouche_formations,$condition_admission,$organisation_formations,$date_depot,$date_entretien,$frais_formations,$frais_entretien,$logo_sponsor) {
	 	$this->id_formations=$id_formations;
	 	$this->menu_titre=$menu_titre;
	 	$this->niveau=$niveau;
	 	$this->id_logo=$id_logo;
	 	$this->titre=$titre;
	 	$this->nbr_semestre=$nbr_semestre;
	 	$this->domaine=$domaine;
	 	$this->type_formations=$type_formations;
	 	$this->duree=$duree;
	 	$this->email=$email;
	 	$this->telephone=$telephone;
	 	$this->fax=$fax;
		$this->Debouche_formations=$Debouche_formations;
		$this->condition_admission=$condition_admission;
		$this->organisation_formations=$organisation_formations;
		$this->date_depot=$date_depot;
		$this->date_entretien=$date_entretien;
		$this->frais_formations=$frais_formations;
		$this->frais_entretien=$frais_entretien;
		$this->logo_sponsor=$logo_sponsor;
	}

}
?>