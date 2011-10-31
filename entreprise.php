<?php

include_once "header.html";

echo '<form> ';

	echo '
	<p>département</p>
	<input type="text"
	size="5" maxlength="2"
	name="département" id="dpt" />
	<input type="button"
	value="département" name="departement" id="but" />
	<p>nom</p>
	<input type="text"
	size="32" maxlength="50"
	name="nom" id="idt" />	
	</form> <input type="button"
	value="nom" name="nom" id="nom" />	
	<input type="button" value="reset" name="reset" id="reset" />';

include_once "affichetabentreprise.php";


include_once "footer.html";
echo "<script src='searchE.js'> </script>";
?>
