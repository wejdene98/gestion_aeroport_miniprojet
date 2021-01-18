<?php
  require_once("connexion.php");
 
  $id = $_POST["id"] ;

  $NomSt= $_POST["NomSt"] ;
  $PrenomSt= $_POST["PrenomSt"] ;

  
 
  $q = "UPDATE steward  SET NomSt = '$NomSt' , PrenomSt = '$PrenomSt' WHERE CodeSt  = '$id' " ;


 if ($idcon->query($q) === TRUE) {
    echo "La modification à été correctement effectuée";
} else {
    echo "Erreur: " . $q . "<br>" . $idcon->error;
}

?>