<?php

require 'connecte.php';

function dptsearch(){
	$dpt='\'%'.$_GET['dpt'].'%\'';
	$bdd = new PDO('mysql:host=localhost;dbname=alternance', 'root', '');
	
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
