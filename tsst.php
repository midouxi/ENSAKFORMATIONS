<?php
	include('Properties.class.php');

	$pf = new Properties('ensak_text.properties');
	
	$pf->AffichezContent();
	
	/*
	$result = $pf->readContent();
	if($result)
	  print_r($pf->getAllValues());
	else
	  print("Un problème s’est produit !\n");

	print("\n\nLecture de la deuxième valeur :\n");
	echo $pf->getValue('deux')."\n";

	print("\n\nChangement de la deuxième valeur :\n");
	$pf->setValue('deux','ouafouaf')."\n";
	echo $pf->getValue('deux')."\n";

	print("\n\nAjout d’une nouvelle paire clé/valeur :\n");
	$pf->setValue('quatre','coucou');
	echo $pf->getValue('quatre')."\n";

	print("\n\nSauvegarde du fichier properties modifié :\n");
	$pf->writeContent();
	$result = $pf->readContent();
	if($result)
	  var_dump($pf->getAllValues());
	else
	  print("Un problème s’est produit !\n");
	*/
?>