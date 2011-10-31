<?php

try {
require 'connect.php';
}
catch(PDOException $e) {
echo $e->getMessage();
}

   $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
   if(preg_match($Syntaxe,$adresse)) {
   	$query = $bdd->prepare("SELECT mail FROM `utilisateur` WHERE mail = '$adresse'");
	$nb = $query->rowCount(); 
	if($nb>1){
		echo"mails déjà utilisé</br>";
		return false;
	}
   	
   	else{
   		echo"adresse mail valide</br>";
   		return true;
   	} 
   }
      
   else {
   		echo "mail invalide</br>";
   	return false; 
   }
     


?>
