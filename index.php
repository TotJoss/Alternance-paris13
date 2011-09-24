<?php
include('header.html');
require 'connecte.php';
$reponse = $bdd->query('SELECT * FROM `eleve`');
$bdd->query("SET NAMES 'utf8'");
$repTab = $reponse->fetchAll();



echo"<p>pour afficher/supprimer une colonne, cliquez sur son nom dans la liste</p><br/>";
include('sidebar.html');

echo '<table class="table1"><tr><th class="id">id</th>
<th class="civilité">civilité</th>
<th class="prénom">prénom</th>
<th class="nom">nom</th>
<th class="date">date de naissance</th>
<th class="entreprise">entreprise</th>
<th class="divers">divers</th>
<th class="nationalité">nationalité</th>
<th class="rue">rue</th>
<th class="ville">ville</th>
<th class="code">code postal</th>
<th class="téléphone">telephone</th>
<th class="mail">mail</th>
<th class="statut">statut</th></tr>';

foreach ($repTab as $valTab)
{	
	echo '<tr>
	<td class="id">'.$valTab['id'] .'</td>
	<td class="civilité">'.$valTab['civilite'] .'</td>
	<td class="prénom">'.$valTab['prenom'] .'</td>
	<td class="nom">'.$valTab['nom'] .'</td>
	<td class="date">'.$valTab['date de naissance'] .'</td>
	<td class="entreprise">'.$valTab['entreprise'] .'</td>
	<td class="divers">'.$valTab['divers'] .'</td>
	<td class="nationalité">'.$valTab['nationalite'].'</td>
	<td class="rue">'.$valTab['rue'] .'</td>
	<td class="ville">'.$valTab['ville'] .'</td>
	<td class="code">'.$valTab['code postal'] .'</td>
	<td class="téléphone">'.$valTab['telephone'] .'</td>
	<td class="mail">'.$valTab['mail'] .'</td>
	<td  class="statut">'.$valTab['statut'] .'</td>
	</tr>';
}
echo "</table>";
include('footer.html');

?>