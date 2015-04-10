<?php
$db = new PDO('mysql:host=localhost;dbname=db_fc','root', '');
// On récupère l'ID
//$id=isset($_GET["id"])?$_GET["id"]:'error';
 // Activation du compte utilisateur
$cin = $_GET["cin"];
$type = $_GET["type"];
$val = $_GET["val"];
$db->exec("UPDATE inscription SET $type='$val' WHERE cin='$cin'");
    
  // On retourne le résultat dans la fonction ajax
  if($result){
          print_r($result);
          echo 'reussi';
  }else{
    echo $cin."//";
    echo $type."//";
    echo $val."//";
    

        echo "<br><b>NON REUSSI :</b><br>".$sql;
  }

?>

