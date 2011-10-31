<?php
$cat='entreprise';


echo "<h2 id='titre'>$cat</h2>\n";

echo '<table class="table1"><tr>
<th class="nom">nom</th>
<th class="divers">observations</th>
<th class="rue">rue</th>
<th class="ville">ville</th>
<th class="code">code postal</th>
<th class="téléphone">telephone</th>
<th class="mail">mail</th>
</tr>
';	

echo "</table>";

require_once 'footer.html';
?>

