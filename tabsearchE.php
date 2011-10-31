<?php

function dptsearch(){

	$dpt='\'%'.$_GET['dpt'].'%\'';
	
	if (empty($_GET['dpt']))
	{
	echo '<SCRIPT language=\"Javascript\"> Il faut rentrer une valeur(\'VIDE\')</SCRIPT> ';
	}
	
	else {
	
	require 'connect.php';
	$reponse = $bdd->query("SELECT * FROM entreprise WHERE `codepostal` like $dpt ");
	$repTab = $reponse->fetchAll();
	if (empty($repTab))
	{
	echo '<SCRIPT language=\"Javascript\"> alert(\'aucune entreprise trouvé \')</SCRIPT> ';
	}
	
	foreach ($repTab as $valTab)
		{	
	echo "
	<tr>
	<td>$valTab[nom]</td>
	<td>$valTab[observations]</td>	
	<td>$valTab[rue]</td>
	<td>$valTab[ville]</td>
	<td>$valTab[codepostal]</td>
	<td>$valTab[telephone]</td>
	<td>$valTab[mail]</td>
	</tr>";


		}
	}



dptsearch();

?>
