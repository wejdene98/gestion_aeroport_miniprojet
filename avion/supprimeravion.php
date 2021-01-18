<html>
    <body>
        <?php  include ("connexion.php") ?>
       <?php
       
		 if(isset($_POST['IdAvion']))
		$id=$_POST['IdAvion'];
	else
		$id="";

	
        $request="delete from avion where IdAvion ='$id'";
        $ok=mysqli_query($idcon,$request);
        if ($ok==FALSE)
        echo "Probleme de suppression <br/>";
        else 
        echo "Suppression efectuee avec succes <br/>";
        ?>
        <?php  include ("deconnexion.php") ?>
    </body>

</html>