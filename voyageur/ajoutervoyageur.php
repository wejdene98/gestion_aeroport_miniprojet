<?php
       
		require_once('connexion.php');
  
		 if(isset($_POST['NumPasseport']))
		$m=$_POST['NumPasseport'];
	else
		$m="";
	
	if(isset($_POST['Nom']))
		$n=$_POST['Nom'];
	else
		$n="";
			
	if(isset($_POST['Prenom']))
		$p=$_POST['Prenom'];
	else
		$p="";
	
	if(isset($_POST['NumTel']))
		$s=$_POST['NumTel'];
	else
		$s="";

	$q="insert into voyageur (NumPasseport,Nom,Prenom,NumTel) values('$m', '$n', '$p','$s')"; 	
			

		
	if ($idcon->query($q) === TRUE) {
    echo "insertion a été effectuée";
} else {
    echo "Erreur: " . $q . "<br>" . $idcon->error;
}


       
?>