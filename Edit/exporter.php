<?php 
	try {	
			include "../Model/connect.php";
			$_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
			$_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
	
	} catch(PDOException $e){
			echo 'Connexion impossible';	
	}
	$req = $_db->prepare('SELECT nom as Nom, prenom as Prenom, date_naissance as Date_Naissance, cin as CIN, tel as Telephone, diplome as Diplome, etablissment as Etablissment, formation as Formation, email as Email FROM inscription');
	$req->execute();
	$data = $req->fetchALL();
	//print_r($data);
	require 'class.csv.php';
	CSV::export($data,'formulaire');

?>