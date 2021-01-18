<html>
    <body>
        <?php  include ("connexion.php") ?>
       <?php
       
		 if(isset($_POST['CodeSt']))
		$id=$_POST['CodeSt'];
	else
		$id="";

	
        $request="delete from steward where CodeSt ='$id'";
        $ok=mysqli_query($idcon,$request);
        if ($ok==FALSE)
        echo "Probleme de suppression <br/>";
        else 
        echo "Suppression efectuee avec succes <br/>";
        ?>
        <?php  include ("deconnexion.php") ?>
    </body>

</html>