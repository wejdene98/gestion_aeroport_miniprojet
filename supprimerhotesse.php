<html>
    <body>
        <?php  include ("connexion.php") ?>
       <?php
       
		 if(isset($_POST['CodeHo']))
		$id=$_POST['CodeHo'];
	else
		$id="";

	
        $request="delete from hotesse where CodeHo ='$id'";
        $ok=mysqli_query($idcon,$request);
        if ($ok==FALSE)
        echo "Probleme de suppression <br/>";
        else 
        echo "Suppression efectuee avec succes <br/>";
        ?>
        <?php  include ("deconnexion.php") ?>
    </body>

</html>