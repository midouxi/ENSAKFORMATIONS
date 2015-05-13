<?php
include("../Model/connect.php");
// On récupère l'ID
//$id=isset($_GET["id"])?$_GET["id"]:'error';
 // Activation du compte utilisateur
$idprof = $_GET["idprof"];
$idformation= $_GET["idformation"];
$result=$_db->exec("DELETE FROM lier WHERE id_formations='$idformation' AND id_prof='$idprof'");

  // On retourne le résultat dans la fonction ajax
  if($result){
          print_r($result);
          echo 'reussi';
          echo '<input type="hidden" name="id_prof" value="'.$idprof.'" />';
  }else{
    echo $idprof."//";
    echo $$idformation."//";
    echo "<br><b>NON REUSSI :</b><br>".$sql;
  }

?>

