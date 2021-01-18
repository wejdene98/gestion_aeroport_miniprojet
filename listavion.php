<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Liste des avions </title>
<link rel="stylesheet"href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" href="style5.css" type="text/css">
<script language="javascript" type="text/javascript" src="commun.js"></script>

</head>
<body>


 <?php
require_once('connexion.php');
$requet = "select * FROM avion order by IdAvion" ;
$res= mysqli_query($idcon, $requet);
$nb=mysqli_num_rows($res);
$i=0;
?> 

<center>
<br/><h1 class="TITRE1">Liste des avions </h1><br/>
<div align="center">
<table>
<tr>
<td colspan="5" align="center" valign="top">
<table  class="table table-striped table-bordered">
<tr>
<td width="20" class="entete_tableau"></td>                    
<td width="80" class="entete_tableau">IdAvion</td>
<td width="140" class="entete_tableau">Marque</td>
<td width="140" class="entete_tableau">NbrPlace</td>
<td width="70" colspan="2" class="entete_tableau">Actions</td>
</tr>
<?php
while($ligne=mysqli_fetch_array($res))
{
	$i++;
?>
<tr>
<td class="corps_tableau">
<div align="center">
</div>
</td>

<td class="corps_tableau">
<div align="center">
<?php print $ligne[0]; ?>
<input type="hidden" name="IdAvion <?php print $i; ?>" value="<?php print $ligne[0];?>"/>
</div>
</td>
<td class="corps_tableau"><?php print $ligne[1]; ?>
<input type="hidden" name="Marque <?php print $i; ?>" value="<?php print $ligne[1];?>"/>
</td>
<td class="corps_tableau"><?php print $ligne[2]; ?>
<input name="NbrPlace <?php print $i;?>" type="hidden" value="<?php print $ligne[2];?>"/>
</td>

<td class="corps_tableau">
<a href="modifieravion.php?IdAvion=<?php print $ligne[0]; ?>"><i class="fa fa-fw fa-edit"></i> Modifier</a>
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