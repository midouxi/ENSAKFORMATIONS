<?php
 class charger{
	 function addfile($post,$file,$type) {
		$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
		$extension_upload=strtolower(substr(strrchr($file['name'],'.'),1) );
		if ($type == "logo") {
			$nom = "../images/".$post."-logo.{$extension_upload}";
		} else if ($type =="icone") {
			$nom = "../images/".$post.".{$extension_upload}";
		} else if ($type =="sponsor") {
			$nom = "../images/sponsor-".$post.".{$extension_upload}";
		} else {
			$nom = "../images/prof/".$post.".{$extension_upload}";
		}
		if ($file['error'] > 0) $erreur = "Erreur lors du transfert";
			{
				if ($file['size'] <= 8000000) $erreur = "Le fichier est trop gros";
					{
						if ( in_array($extension_upload,$extensions_valides) )
							{
								$image_sizes = getimagesize($file['tmp_name']);
								if ($image_sizes[0] > 8000 OR $image_sizes[1] > 8000) $erreur = "Image trop grande";
									{
									move_uploaded_file($file['tmp_name'],$nom);
								}

						}		
				}
		}
		return $nom;
	}
}
?>
