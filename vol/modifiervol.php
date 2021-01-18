<html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Modifier vol</title>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css.css">
<meta name="Microsoft Theme" content="none">
</head>
   <body class="body-background">

 <?php 
	
require_once("connexion.php");

		$id  =$_GET["id"];

$requet="select * from vol where IdVol  = '$id'";

 $res=mysqli_query($idcon,$requet);
 if($result=mysqli_fetch_object($res))
 {
?> 

    <div class="container">
        <div class="row d-flex justify-content-center mx-auto">
            <div class="col-md-6 col-xs-6 div-style">
         <form name="f" method="POST" action="modifiervol2.php">
		  <div class="d-flex justify-content-center mx-auto main-label" >
                    <h3>Modifier vol</h3>
                </div>
                <div class="form-group">
				    Identificateur Vol:<input type="hidden" name="IdVol" value="<?php echo($id) ;?>"> 
					Identificateur Avion:<input type="text" name="IdAvion" value="<?php echo($result->IdAvion);?>" class="form-control text-box"> 
					Code Hotesse:<input type="text" name="CodeHo" value="<?php echo($result->CodeHo);?>" class="form-control text-box">
					Code steward:<input type="text" name="CodeSt" value="<?php echo($result->CodeSt);?>" class="form-control text-box">
					Date & Heure :<input type="datetime" name="DateHeure" value="<?php echo($result->DateHeure);?>" class="form-control text-box">
					Destination:<input type="text" name="Destination" value="<?php echo($result->Destination);?>" class="form-control text-box">
					Numero passeprot:<input type="text" name="NumPasseprt" value="<?php echo($result->NumPasseprt);?>" class="form-control text-box">
					
				</div>
                 <div class="form-group justify-content-center d-flex">
                    <button type="submit" class="btn btn-primary button-submit">Modifier</button>
					 <button type="reset" class="btn btn-primary button-submit">Annuler</button>
                </div>
	            </form>
				</div>
				</div>
	</div>

 <?php
  }//fin if 
  ?>
 </body>
</html>
