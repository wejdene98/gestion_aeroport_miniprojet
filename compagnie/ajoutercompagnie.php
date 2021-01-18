<?php
       
		require_once('connexion.php');
  
		 if(isset($_POST['IdCo']))
		$m=$_POST['IdCo'];
	else
		$m="";
	
	if(isset($_POST['NomCo']))
		$n=$_POST['NomCo'];
	else
		$n="";
	

	$q="insert into compagnie (IdCo,NomCo) values('$m', '$n')"; 	
			

		
	if ($idcon->query($q) === TRUE) {
    echo "insertion a été effectuée";
} else {
    echo "Erreur: " . $q . "<br>" . $idcon->error;
}


       
?>