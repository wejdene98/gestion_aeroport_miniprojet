<?php
         
		require_once('connexion.php');
	if(isset($_POST["IdVol"]))
		$val  = $_POST["IdVol"] ;
	else
		$val="";
	$sql = "DELETE FROM vol WHERE IdVol='$val' " ;
	
	if ($idcon->query($sql) === TRUE) {
    echo "La suppression à été correctement effectuée";
} else {
    echo "Erreur: " . $sql . "<br>" . $idcon->error;
}


       
?>