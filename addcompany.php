<?php

require_once "header.html";
echo '<form method="post" action="addcmp.php" id="formSaisie">
	<fieldset id="inscription">
		<legend>Tout les champs sont obligatoires</legend>
		nom:<input type="text" name="nom"/><br />
		mail:<input type="text" name="mail"/><br />		
		code postal:<input type="text" name="cp"/><br />
		ville:<input type="text" name="ville"/><br />
		rue:<input type="text" name="rue"/><br />
		téléphone:<input type="text" name="phone"/><br />
		observations<textarea rows="4" name="message" id="obs" cols="34"></textarea><br />



	<p>
	<input type="submit" name="boutonSoumet" value="valider les infos"  />
    <input type="reset" name="boutonSoumet" value="reset"/>
	</p>

	</form>';
require_once "footer.html";
?>
