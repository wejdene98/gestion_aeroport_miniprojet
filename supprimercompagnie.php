<html>
    <body>
        <?php  include ("connexion.php") ?>
       <?php
       
		 if(isset($_POST['IdCo']))
		$id=$_POST['IdCo'];
	else
		$id="";

	
        $request="delete from compagnie where IdCo ='$id'";
        $ok=mysqli_query($idcon,$request);
        if ($ok==FALSE)
        echo "Probleme de suppression <br/>";
        else 
        echo "Suppression efectuee avec succes <br/>";
        ?>
        <?php  include ("deconnexion.php") ?>
    </body>

</html>