<html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Modifier avion</title>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css.css">
<meta name="Microsoft Theme" content="none">
</head>
   <body class="body-background">

 <?php 
	
require_once("connexion.php");

		$id  =$_GET["IdAvion"] ;

$requet="select * from avion where IdAvion  = '$id'";

 $res=mysqli_query($idcon,$requet);
 if($result=mysqli_fetch_object($res))
 {
?> 

    <div class="container">
        <div class="row d-flex justify-content-center mx-auto">
            <div class="col-md-6 col-xs-6 div-style">
         <form name="f" method="POST" action="modifieravion2.php">
		  <div class="d-flex justify-content-center mx-auto main-label" >
                    <h3>Modifier avion</h3>
                </div>
                <div class="form-group">
				    <input type="hidden" name="id" value="<?php echo($id) ;?>"> 
					Marque:<input type="text" name="Marque" value="<?php echo($result->Marque);?>" class="form-control text-box"> 
					Nombre Place:<input type="text" name="NbrPlace" value="<?php echo($result->NbrPlace);?>" class="form-control text-box">
					
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
