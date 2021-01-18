<?php
  require_once("connexion.php");
 
  $id = $_POST["id"] ;

  $Nom= $_POST["Nom"] ;
  $Prenom= $_POST["Prenom"] ;
  $NumTel= $_POST["NumTel"] ;

  
 
  $q = "UPDATE voyageur  SET Nom = '$Nom' , Prenom = '$Prenom' , NumTel = '$NumTel' WHERE NumPasseport  = '$id' " ;


 if ($idcon->query($q) === TRUE) {
    echo "La modification à été correctement effectuée";
} else {
    echo "Erreur: " . $q . "<br>" . $idcon->error;
}

?>