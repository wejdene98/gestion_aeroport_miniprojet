<html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Modifier Hotesse</title>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css.css">
<meta name="Microsoft Theme" content="none">
</head>
   <body class="body-background">

 <?php 
	
require_once("connexion.php");

		$id  =$_GET["CodeHo"] ;

$requet="select * from hotesse where CodeHo = '$id'";

 $res=mysqli_query($idcon,$requet);
 if($result=mysqli_fetch_object($res))
 {
?> 

    <div class="container">
        <div class="row d-flex justify-content-center mx-auto">
            <div class="col-md-6 col-xs-6 div-style">
         <form name="f" method="POST" action="modifierhotesse2.php">
		  <div class="d-flex justify-content-center mx-auto main-label" >
                    <h3>Modifier Hotesse</h3>
                </div>
                <div class="form-group">
				    <input type="hidden" name="id" value="<?php echo($id) ;?>"> 
					Nom Hotesse:<input type="text" name="NomHo" value="<?php echo($result->NomHo);?>" class="form-control text-box"> 
					Prenom Hotesse:<input type="text" name="PrenomHo" value="<?php echo($result->PrenomHo);?>" class="form-control text-box">
					
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
