<?php

$type='\'%'.$_GET['type'].'%\'';
require 'connecte.php';

	if($type === '\'%'.'etudiant'.'%\'')
	{
	
	$rep = $bdd->query("SELECT * FROM etudiant");
	$rep = $rep->fetchAll();


	foreach ($rep as $valTab)
		{	
	echo "
	<tr class='ligne'>
	<td>$valTab[civilite]</td>
	<td>$valTab[prenom]</td>
	<td>$valTab[nom]</td>
	<td>$valTab[datedenaissance]</td>
	<td>$valTab[id_entreprise]</td>
	<td>$valTab[observations]</td>	
	<td>$valTab[nationalite]</td>
	<td>$valTab[rue]</td>
	<td>$valTab[ville]</td>
	<td>$valTab[codepostal]</td>
	<td>$valTab[telephone]</td>
	<td>$valTab[mail]</td>
	<td>$valTab[statut]</td>
	<td><a href=''>A</a></td>
	<td><a href=''>D</a></td>
	</tr>";
		}
	

	}
	
	else 
	{
	$rep = $bdd->query("SELECT * FROM entreprise");
	$rep = $rep->fetchAll();


	foreach ($rep as $valTab)
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
?>