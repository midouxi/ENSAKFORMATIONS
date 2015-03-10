<?php

class inscription_final

{
	public $nom;
	public $prenom;
	public $cne;
	public $cin;
	public $date_naissance;
	public $lieu_naissance;
	public $province;
	public $sexe;
	public $nationalite;
	public $situation;
	public $handicap;
	public $bac_annee;
	public $bac_serie;
	public $mention;
	public $etablissment;
	public $adresse;
	public $email;
	public $tel;
	public $tel_parents;
	public $prof_ben;
	public $prof_pere;
	public $prof_mere;

 	function __construct($nom, $prenom, $cne,$cin, $date_naissance, $lieu_naissance, $province, $sexe, $nationalite, $situation, $handicap, $bac_annee, $bac_serie, $mention, $etablissment, $adresse, $email, $tel, $tel_parents, $prof_ben, $prof_pere, $prof_mere)
 	{
	 	$this->nom=$nom;
	 	$this->prenom=$prenom;
		$this->cne=$cne;
		$this->cin=$cin;
	 	$this->date_naissance=$date_naissance;
		$this->lieu_naissance=$lieu_naissance;
		$this->province=$province;
		$this->sexe=$sexe;
		$this->nationalite=$nationalite;
		$this->situation=$situation;
		$this->handicap=$handicap;
		$this->bac_annee=$bac_annee;
		$this->bac_serie=$bac_serie;
	 	$this->mention=$mention;
		$this->etablissment=$etablissment;
		$this->adresse=$adresse;
		$this->email=$email;
	 	$this->tel=$tel;
	 	$this->tel_parents=$tel_parents;
	 	$this->prof_ben=$prof_ben;
	 	$this->prof_pere=$prof_pere;
	 	$this->prof_mere=$prof_mere;
	 }
}

?>