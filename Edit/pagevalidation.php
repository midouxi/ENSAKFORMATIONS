<?php
$db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
// On récupère l'ID
//$id=isset($_GET["id"])?$_GET["id"]:'error';
 // Activation du compte utilisateur
$cin = $_GET["cin"];
$db->exec("UPDATE inscription SET etat='1' WHERE cin='$cin'");
    
  // On retourne le résultat dans la fonction ajax
  if($result){
          print_r($result);
          echo 'reussi';
          header("Location: " . $_SERVER["PHP_SELF"]);
          die();
  }else{
    echo $cin."//";
    echo "<br><b>NON REUSSI :</b><br>".$sql;
  }

?>

