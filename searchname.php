<?php

function dptsearch(){
	$name='\'%'.$_GET['name'].'%\'';
	
	if (empty($_GET['name']))
	{
	echo '<SCRIPT language=\"Javascript\"> alert(\'Vous n\'avez rien entré\')</SCRIPT> ';
	}
	
	else{
	require 'connect.php';
	$rep = $bdd->query("SELECT * FROM etudiant WHERE `nom` like $name ");
	$rep = $rep->fetchAll();
	if (empty($rep))
	{
	echo '<SCRIPT language=\"Javascript\"> alert(\'aucun étudiant trouvé\')</SCRIPT> ';
	}
	
	else {
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

	}
	
}
dptsearch();
?>
