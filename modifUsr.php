<?php


	$hostname = 'localhost';
	$username = 'root';
	$password = '';

try {
$bdd = new PDO("mysql:host=$hostname;dbname=alternance", $username, $password);
}
catch(PDOException $e) {
echo $e->getMessage();
}

   $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
   if(preg_match($Syntaxe,$adresse)) {
   	$query = $bdd->prepare("SELECT mail FROM `alternance.utilisateur`.`utilisateur` WHERE mail = '$adresse'");
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
