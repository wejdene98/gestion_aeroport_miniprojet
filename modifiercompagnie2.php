<?php
  require_once("connexion.php");
 
  $id = $_POST["id"] ;

  $NomCo= $_POST["NomCo"] ;
 

  
 
  $q = "UPDATE compagnie  SET NomCo = '$NomCo'  WHERE IdCo  = '$id' " ;


 if ($idcon->query($q) === TRUE) {
    echo "La modification à été correctement effectuée";
} else {
    echo "Erreur: " . $q . "<br>" . $idcon->error;
}

?>