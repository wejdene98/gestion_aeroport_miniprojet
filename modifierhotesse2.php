<?php
  require_once("connexion.php");
 
  $id = $_POST["id"] ;

  $NomHo= $_POST["NomHo"] ;
  $PrenomHo= $_POST["PrenomHo"] ;

  
 
  $q = "UPDATE hotesse  SET NomHo = '$NomHo' , PrenomHo = '$PrenomHo' WHERE CodeHo  = '$id' " ;


 if ($idcon->query($q) === TRUE) {
    echo "La modification à été correctement effectuée";
} else {
    echo "Erreur: " . $q . "<br>" . $idcon->error;
}

?>
