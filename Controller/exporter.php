<?php 
	try{	
		include("../Model/connect.php");
		$_db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		$_db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
	}catch(PDOException $e){
		echo 'Connexion impossible';	
	}

	$req = $_db->prepare('SELECT nom as Nom, prenom as Prenom, cne as CNE, cin as CIN, date_naissance as Date_Naissance, lieu_naissance as Ville_de_Naissance, province as Province, sexe as Sexe, nationalite as Nationalite, situation as Situation_Familiale, handicap as Handicap, bac_annee as Annee_D_obtention_Du_Bac, bac_serie as Serie_Du_Bac, mention as Mention, etablissment as Etablissment, adresse as Adresse, email as Email, tel as Telephone, tel_parents as Telephone_De_Parents, prof_ben as Profession_du_beneficiare, prof_pere as Profession_du_pere, prof_mere as Profession_de_la_mere  FROM inscription_final');
	$req->execute();
	$data = $req->fetchALL();
	require '../Controller/class.csv.php';
	CSV::export($data,'formulaire');
?>