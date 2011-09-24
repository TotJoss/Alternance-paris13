<?php
include('header.html');
require 'connecte.php';
$reponse = $bdd->query('SELECT * FROM `eleve`');
$repTab = $reponse->fetchAll();

echo "<h1>élèves</h3>\n";

echo '<table class="table1"><tr><th class="id">id</th><th class="civilité">civilité</th><th class="prénom">prénom</th><th class="nom">nom</th><th class="date">date de naissance</th><th class="entreprise">entreprise</th><th class="divers">divers</th><th class="nationalité">nationalité</th><th class="rue">rue</th><th class="ville">ville</th><th class="code postal">code postal</th><th class="téléphone">téléphone</th><th class="mail">mail</th><th class="statut">statut</th></tr>';	
include('sidebar.html');
foreach ($repTab as $valTab)
{	
	echo '<tr>
	<td>'.$valTab['id'] .'</td>
	<td>'.$valTab['civilité'] .'</td>
	<td>'.$valTab['prénom'] .'</td>
	<td>'.$valTab['nom'] .'</td>
	<td>'.$valTab['date de naissance'] .'</td>
	<td>'.$valTab['entreprise'] .'</td>
	<td>'.$valTab['divers'] .'</td>
	<td>'.$valTab['nationalité'] .'</td>
	<td>'.$valTab['rue'] .'</td>
	<td>'.$valTab['ville'] .'</td>
	<td>'.$valTab['code postal'] .'</td>
	<td>'.$valTab['téléphone'] .'</td>
	<td>'.$valTab['mail'] .'</td>
	<td>'.$valTab['statut'] .'</td>
	</tr>';
}

include('footer.html');

?>