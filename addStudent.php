<?php
require_once "header.html";
echo '<form method="post" action="upload.php" id="formSaisie">

	<fieldset id="inscription">
	
		<legend>Tout les champs sont obligatoires</legend>
		
			civilité:<input type="text" name="civilité"/><br />
			prénom:<input type="text" name="prenom"/><br />
			nom:<input type="text" name="nom"/><br />
			nationalité:<input type="text" name="nationalite"/>	<br />
			mail:<input type="text" name="mail"/><br />
			telephone:<input type="text" name="tel"/><br />
			rue:<input type="text" name="rue"/>	<br />
			code postal :<input type="text" name="cp"/>	<br />
			ville:<input type="text" name="ville"/>	<br />
			date de naissance (aaaa-mm-jj):<input type="text" name="birth"/>	<br />
			observations:<textarea name="observation"></textarea><br />.
			<p>
			<input type="submit" name="boutonSoumet" value="valider les infos"  />
			<input type="reset" name="boutonSoumet" value="reset"/>
			</p>
		</form>
		
	</fieldset>

	
	';
	
require_once "footer.html";
?>