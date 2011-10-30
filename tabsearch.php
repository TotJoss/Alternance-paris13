<?php

function dptsearch(){
	$dpt='\'%'.$_GET['dpt'].'%\'';
	$bdd = new PDO('mysql:host=localhost;dbname=alternance', 'root', '');
	$reponse = $bdd->query("SELECT * FROM etudiant WHERE `codepostal` like $dpt ");
	$repTab = $reponse->fetchAll();
	if (empty($repTab))
	{
	echo '<SCRIPT language=\"Javascript\"> alert(\'aucun étudiant trouvé dans ce département\')</SCRIPT> ';
	}
	
	else {
	foreach ($repTab as $valTab)
	{	
	echo "$dpt";
	echo "
	<tr class ='ligne'>
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
dptsearch();
?>
