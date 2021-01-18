<?php
       
		require_once('connexion.php');
  
		 if(isset($_POST['CodeSt']))
		$m=$_POST['CodeSt'];
	else
		$m="";
	
	if(isset($_POST['NomSt']))
		$n=$_POST['NomSt'];
	else
		$n="";
			
	if(isset($_POST['PrenomSt']))
		$p=$_POST['PrenomSt'];
	else
		$p="";
	

	$q="insert into steward (CodeSt,NomSt,PrenomSt) values('$m', '$n', '$p')"; 	
			

		
	if ($idcon->query($q) === TRUE) {
    echo "insertion a été effectuée";
} else {
    echo "Erreur: " . $q . "<br>" . $idcon->error;
}


       
?>