<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Liste des Vols </title>
<link rel="stylesheet"href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" href="style5.css" type="text/css">
<script language="javascript" type="text/javascript" src="commun.js"></script>

</head>
<body>


 <?php
require_once('connexion.php');
$requet = "select * FROM vol order by IdVol" ;
$res= mysqli_query($idcon, $requet);
$nb=mysqli_num_rows($res);
$i=0;
?> 

<center>
<br/><h1 class="TITRE1">Liste des Vols </h1><br/>
<div align="center">
<table>
<tr>
<td colspan="5" align="center" valign="top">
<table  class="table table-striped table-bordered">
<tr>
<td width="20" class="entete_tableau"></td>                    
<td width="80" class="entete_tableau">IdAvion</td>
<td width="140" class="entete_tableau">CodeHo</td>
<td width="140" class="entete_tableau">CodeSt</td>
<td width="200" class="entete_tableau">DateHeure</td>
<td width="120" class="entete_tableau">Destinantion</td>
<td width="120" class="entete_tableau">NumPassepor</td>
<td width="120" class="entete_tableau">IdVol</td>

</tr>
<?php
while($ligne=mysqli_fetch_array($res))
{
	$i++;
?>
<tr>
<td class="corps_tableau"><div align="center">

</div></td>
<td class="corps_tableau"><div align="center">
<?php print $ligne[0]; ?>
<input type="hidden" name="IdAvion <?php print $i; ?>" value="<?php print $ligne[0];?>"/>
</div></td>
<td class="corps_tableau"><?php print $ligne[1]; ?>
<input type="hidden" name="CodeHo <?php print $i; ?>" value="<?php print $ligne[1];?>"/>
</td>
<td class="corps_tableau"><?php print $ligne[2]; ?>
<input name="CodeSt<?php print $i;?>" type="hidden" value="<?php print $ligne[2];?>"/>
</td>
<td class="corps_tableau"> <?php print $ligne[3]; ?>
<input name="DateHeure<?php print $i;?>" type="hidden" value="<?php print $ligne[3];?>"/></td>
<td class="corps_tableau"><?php print $ligne[4]; ?>
<input name="Destinantion<?php print $i;?>" type="hidden" value="<?php print $ligne[4];?>"/>
</td>
<td class="corps_tableau"><?php print $ligne[5]; ?>
<input name="MatPilote<?php print $i;?>" type="hidden" value="<?php print $ligne[5];?>"/>
</td>
<td class="corps_tableau"><?php print $ligne[6]; ?>
<input name="NumPasseport<?php print $i;?>" type="hidden" value="<?php print $ligne[6];?>"/>
</td>


</tr>
<?php
	} // fin while
?>
</table>
</td>
</tr>
</table>
</div>
</center>
</form>
<?php
mysqli_close($idcon);
?>
</table>
</body>
</body>
</html>