<?php
include("../Model/connect.php");
// On récupère l'ID
//$id=isset($_GET["id"])?$_GET["id"]:'error';
 // Activation du compte utilisateur
$idprof = $_GET["idprof"];
$idformation= $_GET["idformation"];
$val = $_GET["val"];
if ($val == 1) {
  $result=$_db->exec("INSERT INTO `lier` (`id_formations`, `id_prof`) VALUES ('$idformation','$idprof')");
} else {
  $result=$_db->exec("DELETE FROM lier WHERE id_formations='$idformation' AND id_prof='$idprof'");
}
  // On retourne le résultat dans la fonction ajax
  if($result){
          print_r($result);
          echo 'reussi';
  }else{
    echo $idprof."//";
    echo $$idformation."//";
    echo $val."//";
    

        echo "<br><b>NON REUSSI :</b><br>".$sql;
  }

?>

