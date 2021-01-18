<html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Modifier Steward </title>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css.css">
<meta name="Microsoft Theme" content="none">
</head>
   <body class="body-background">

 <?php 
	
require_once("connexion.php");

		$id  =$_GET["CodeSt"] ;

$requet="select * from steward where CodeSt  = '$id'";

 $res=mysqli_query($idcon,$requet);
 if($result=mysqli_fetch_object($res))
 {
?> 

    <div class="container">
        <div class="row d-flex justify-content-center mx-auto">
            <div class="col-md-6 col-xs-6 div-style">
         <form name="f" method="POST" action="modifiersteward2.php">
		  <div class="d-flex justify-content-center mx-auto main-label" >
                    <h3>Modifier Steward</h3>
                </div>
                <div class="form-group">
				    <input type="hidden" name="id" value="<?php echo($id) ;?>"> 
					Nom Steward:<input type="text" name="NomSt" value="<?php echo($result->NomSt);?>" class="form-control text-box"> 
					Prenom Steward:<input type="text" name="PrenomSt" value="<?php echo($result->PrenomSt);?>" class="form-control text-box">
					
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
