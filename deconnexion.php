<html>
	<head> </head>
	<body>
		<?php 
			$idcon=mysqli_connect("localhost" ,"root", "");
			$okdec=mysqli_close($idcon);
			if($okdec)
				echo 'Déconnexion réussite <br/>';
			else
				echo 'Echec de la déconnexion <br/>';
		?>
	</body>
</html>