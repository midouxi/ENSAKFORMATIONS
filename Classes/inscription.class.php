<?php

class inscription {
	public $nom;
	public $prenom;
	public $date_naissance;
	public $cin;
	public $tel;
	public $email;
	public $diplome;
	public $etablissment;
	public $formation;
	public $lettre_motivation;
	public $etat;

 	function __construct($nom,$prenom,$date_naissance,$cin,$tel,$email,$diplome,$etablissment,$formation,$lettre_motivation,$etat) {
	 	$this->nom=$nom;
	 	$this->prenom=$prenom;
	 	$this->date_naissance=$date_naissance;
	 	$this->cin=$cin;
	 	$this->tel=$tel;
	 	$this->email=$email;
	 	$this->diplome=$diplome;
	 	$this->etablissment=$etablissment;
	 	$this->formation=$formation;
	 	$this->lettre_motivation=$lettre_motivation;
		$this->etat=$etat;
	 }
}
?>