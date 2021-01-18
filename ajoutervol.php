<?php
       
		require_once('connexion.php');
  
		 if(isset($_POST['IdAvion']))
		$m=$_POST['IdAvion'];
	else
		$m="";
	
	if(isset($_POST['CodeHo']))
		$n=$_POST['CodeHo'];
	else
		$n="";
			
	if(isset($_POST['CodeSt']))
		$p=$_POST['CodeSt'];
	else
		$p="";
	
	if(isset($_POST['NumPasseport']))
		$k=$_POST['NumPasseport'];
	else
		$k="";
	
	
	if(isset($_POST['DateHeure']))
		$i=$_POST['DateHeure'];
	else
		$i="";
	
	if(isset($_POST['IdVol']))
		$f=$_POST['IdVol'];
	else
		$f="";
	
	if(isset($_POST['Destination']))
		$j=$_POST['Destination'];
	else
		$j="";
	

	$q="insert into vol (IdAvion,CodeHo,CodeSt,NumPasseport,DateHeure,IdVol,Destination) values('$m', '$n', '$p','$k', '$i'
	,'$f','$j')"; 	
			

		
	if ($idcon->query($q) === TRUE) {
    echo "insertion a été effectuée";
} else {
    echo "Erreur: " . $q . "<br>" . $idcon->error;
}


       
?>