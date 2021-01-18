<?php
  require_once("connexion.php");
 
  $id = $_POST["IdVol"] ;
 $IdAvion= $_POST["IdAvion"] ;
  $CodeHo= $_POST["CodeHo"] ;
  $CodeSt = $_POST["CodeSt"] ;
  $DateHeure = $_POST["DateHeure"] ;
  $Destination = $_POST["Destination"] ;
  $NumPasseport = $_POST["NumPasseport"] ;

  
 
  $q = "UPDATE vol  SET IdAvion= '$IdAvion',
		     CodeHo = '$CodeHo',
		    CodeSt  = '$CodeSt',
		    DateHeure  = '$DateHeure',
			  Destination  = '$Destination',
			    NumPasseport = '$NumPasseport'
			WHERE IdVol  = '$id' " ;


 if ($idcon->query($q) === TRUE) {
    echo "La modification à été correctement effectuée";
} else {
    echo "Erreur: " . $q . "<br>" . $idcon->error;
}

?>