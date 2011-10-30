<?php

require_once "header.html";

if(true){
echo '<form method="post" action="modifUsr.php" id="formSaisie">
		<fieldset id="inscription">
		login:<input type="text" name="nom"/><br />
		mail:<input type="text" name="mail"/><br />
		Mot de passe :<input type="password" name="password1"/>	<br />
		Mot de passe (confirmation)*:<input type="password" name="password2"/><br />
		<p>statut:</p>
		<input type="radio"	name="statut" value="admin" />admin<br />
		<input type="radio"	checked="checked" name="statut" value="entreprise" />entreprise <br />
		<input type="radio"	 name="statut" value="corresponsable" />corresponsable<br />
		<input type="radio"	 name="statut" value="secretaire" />secrétaire administratif<br />
		<input type="radio"	 name="statut" value="recrutement" />responsable recrutement<br />
		</fieldset>
	</form>';
	}
	else {echo '
	<form method="post" action="modifUsr.php" id="formSaisie">
		<fieldset id="inscription">
		login:<input type="text" name="nom"/><br />
		mail:<input type="text" name="mail"/><br />
		Mot de passe :<input type="password" name="password1"/>	<br />
		Mot de passe (confirmation)*:<input type="password" name="password2"/><br />
		</fieldset>
	</form>';
	}
require_once "footer.html";
?>
