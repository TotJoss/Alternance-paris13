<?php
include('header.html');
require 'connecte.php';
$reponse = $bdd->query('SELECT * FROM `eleve`');
$repTab = $reponse->fetchAll();


echo"<p>pour afficher/supprimer uhne colonne, clqiuez sur son nom dans la liste</p>";

echo '<table class="table1"><tr>
<th class="id">id</th>
<th class="civilit�">civilit�</th>
<th class="pr�nom">pr�nom</th>
<th class="nom">nom</th>
<th class="date">date de naissance</th>
<th class="entreprise">entreprise</th>
<th class="divers">divers</th>
<th class="nationalit�">nationalit�</th>
<th class="rue">rue</th>
<th class="ville">ville</th>
<th class="code">code postal</th>
<th class="t�l�phone">t�l�phone</th>
<th class="mail">mail</th>
<th class="statut">statut</th></tr> </table>';

include('sidebar.html');

foreach ($repTab as $valTab)
{	
	echo '<tr>
	<td class="id">'.$valTab['id'] .'</td>
	<td class="civilit�">'.$valTab['civilit�'] .'</td>
	<td class="pr�nom">'.$valTab['pr�nom'] .'</td>
	<td class="nom">'.$valTab['nom'] .'</td>
	<td class="date">'.$valTab['date de naissance'] .'</td>
	<td class="entreprise">'.$valTab['entreprise'] .'</td>
	<td class="divers">'.$valTab['divers'] .'</td>
	<td class="nationalit�">'.$valTab['nationalit�'] .'</td>
	<td class="rue">'.$valTab['rue'] .'</td>
	<td class="ville">'.$valTab['ville'] .'</td>
	<td class="code">'.$valTab['code postal'] .'</td>
	<td class="t�l�phone">'.$valTab['t�l�phone'] .'</td>
	<td class="mail">'.$valTab['mail'] .'</td>
	<td  class="statut">'.$valTab['statut'] .'</td>
	</tr>';
}

include('footer.html');

?>