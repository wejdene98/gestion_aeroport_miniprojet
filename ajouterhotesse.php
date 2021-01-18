<?php
       
		require_once('connexion.php');
  
		 if(isset($_POST['CodeHo']))
		$m=$_POST['CodeHo'];
	else
		$m="";
	
	if(isset($_POST['NomHo']))
		$n=$_POST['NomHo'];
	else
		$n="";
			
	if(isset($_POST['PrenomHo']))
		$p=$_POST['PrenomHo'];
	else
		$p="";
	

	$q="insert into hotesse (CodeHo,NomHo,PrenomHo) values('$m', '$n', '$p')"; 	
			

		
	if ($idcon->query($q) === TRUE) {
    echo "insertion a été effectuée";
} else {
    echo "Erreur: " . $q . "<br>" . $idcon->error;
}


       
?>