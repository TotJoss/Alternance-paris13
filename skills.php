<?php

$bdd = new PDO('mysql:host=localhost;dbname=alternance', 'root', '');
	$reponse = $bdd->query("SELECT * FROM competence");
	$repTab = $reponse->fetchAll();
	foreach ($repTab as $valTab)
{	
	echo "<option>$valTab[type]</option>";
}
?>