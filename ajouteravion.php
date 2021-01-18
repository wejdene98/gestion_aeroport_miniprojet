<?php
       
		require_once('connexion.php');
  
		 if(isset($_POST['IdAvion']))
		$m=$_POST['IdAvion'];
	else
		$m="";
	
	if(isset($_POST['Marque']))
		$n=$_POST['Marque'];
	else
		$n="";
			
	if(isset($_POST['NbrPlace']))
		$p=$_POST['NbrPlace'];
	else
		$p="";
	

	$q="insert into avion (IdAvion,Marque,NbrPlace) values('$m', '$n', '$p')"; 	
			

		
	if ($idcon->query($q) === TRUE) {
    echo "insertion a été effectuée";
} else {
    echo "Erreur: " . $q . "<br>" . $idcon->error;
}


       
?>