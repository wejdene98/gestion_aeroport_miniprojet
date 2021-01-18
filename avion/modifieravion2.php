<?php
  require_once("connexion.php");
 
  $id = $_POST["id"] ;

  $Marque= $_POST["Marque"] ;
  $NbrPlace= $_POST["NbrPlace"] ;

  
 
  $q = "UPDATE avion  SET Marque = '$Marque' , NbrPlace = '$NbrPlace' WHERE IdAvion  = '$id' " ;


 if ($idcon->query($q) === TRUE) {
    echo "La modification à été correctement effectuée";
} else {
    echo "Erreur: " . $q . "<br>" . $idcon->error;
}

?>