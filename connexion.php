<html>
	<head> </head>
	<body>
		<?php 
			$idcon=mysqli_connect("localhost" ,"root", "");
			if($idcon)
			{
				echo "connexion réussite <br/>";
				$okbd=mysqli_select_db($idcon ,"aéroport");
				if($okbd==true)
					echo "<br/>Base Correcte <br/>";
				else
					echo "<br/>Base incorrect <br/>";
			}
			else
				echo "Erreur de connexion avec le serveur:<br/>";
			?>
	</body>
</html>