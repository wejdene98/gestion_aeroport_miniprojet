<html>
    <body>
        <?php  include ("connexion.php") ?>
       <?php
       
		 if(isset($_POST['NumPasseport']))
		$id=$_POST['NumPasseport'];
	else
		$id="";

	
        $request="delete from voyageur where NumPasseport ='$id'";
        $ok=mysqli_query($idcon,$request);
        if ($ok==FALSE)
        echo "Probleme de suppression <br/>";
        else 
        echo "Suppression efectuee avec succes <br/>";
        ?>
        <?php  include ("deconnexion.php") ?>
    </body>

</html>