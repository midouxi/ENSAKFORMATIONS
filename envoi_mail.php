<?php				
								//if(!$connect=mysql_connect("localhost","root","")) mysql_error();
								//if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
								//if(!$connect=mysql_connect("localhost","ensakfor_root","admin")) mysql_error();
								//if(!$db=mysql_select_db("ensakfor_fc",$connect)) mysql_error();
								
									$bdd = new PDO('mysql:host=localhost;dbname=ensakfor_fc', 'ensakfor_root', 'admin');
									//$bdd = new PDO('mysql:host=localhost;dbname=db_fc', 'root', '');
								
								

$cin=$_POST['cin'];
$etat=$_POST['etat'];
$etat_int="non Traiter";
$etat_sui="Traiter";
if(strcasecmp($etat,$etat_int)==0){
					//$test=$bdd->exec("UPDATE inscription SET etat='Traiter' WHERE cin=\'". $cin ."\'");
								
					$req = $bdd->prepare('UPDATE inscription SET etat = :etat_sui WHERE cin = :cin');
					$req->execute(array(
						'etat_sui' => $etat_sui,
						'cin' => $cin
						));

	$email=$_POST['email'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$mail = $email; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn|gmail).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
//$message_txt = "Salut à vous, voici un lien pour une suite d'inscription à la formation professionnelle de ENSA Khouribga

										 // www.ensak-formations.com/inscription_final.php .";
$message_html = "<html><head></head><body><h3><b>Salut ".$nom." ".$prenom."</b>, voici un lien pour une suite d'inscription à la formation professionnelle de ENSA Khouribga.</h3><br><br>&nbsp;&nbsp;&nbsp;&nbsp;<h2><a href=\"www.ensak-formations.com/inscription_final.php\">Inscription final</a></h2></body></html>";
//==========
 
//=====Lecture et mise en forme de la pièce jointe.
//$fichier   = fopen("image.jpg", "r");
//$attachement = fread($fichier, filesize("image.jpg"));
//$attachement = chunk_split(base64_encode($attachement));
//fclose($fichier);
//==========
 
//=====Création de la boundary.
$boundary = "-----=".md5(rand());
//$boundary_alt = "-----=".md5(rand());
//==========
                                    
 
//=====Définition du sujet.
$sujet = "Inscription à ENSA Khouribga Formations professionnelle";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"ENSAK FORMATIONS\"<ensak.formations@gmail.com>".$passage_ligne;
$header.= "Reply-to: ".$nom." ".$prenom." <".$email.">".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
//$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne; 
//$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
 
//=====Ajout du message au format HTML.
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
 
//=====On ferme la boundary alternative.
//$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
//==========
 
 
$message.= $passage_ligne."--".$boundary.$passage_ligne; 
$message.= $passage_ligne."--".$boundary.$passage_ligne;
 
//=====Ajout de la pièce jointe.
//$message.= "Content-Type: image/jpeg; name=\"image.jpg\"".$passage_ligne;
//$message.= "Content-Transfer-Encoding: base64".$passage_ligne;
//$message.= "Content-Disposition: attachment; filename=\"image.jpg\"".$passage_ligne;
//$message.= $passage_ligne.$attachement.$passage_ligne.$passage_ligne;
//$message.= $passage_ligne."--".$boundary."--".$passage_ligne; 
//========== 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
 
//==========

header('Location: adminpage.php');
}
else{

header('Location: adminpage.php');}
?>