<?php

function VerifierAdresseMail($adresse){ 
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
     
}

function verifierPseudo($name){
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=alternance', 'root', '');
		
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}

	if (strlen($name)<4){
		echo "pseudo trop court</br>";
		return false; 
	}

	elseif(strlen($name)>22){
		echo "pseudo trop long";
		return false; 
		}	
				
   else {

   	//verifie que pseudo n'est pas déja pris
	$query = $bdd->prepare("SELECT pseudo FROM `alternance`.`utilisateur` WHERE pseudo = '$name'");
	$query->execute();
	$count = $query->rowCount(); 

	if($count>1){
		echo"pseudo deja pris</br>";
		return false;
		
	}
	else{
		echo "pseudo valide</br>";
		return true; 
	}
  	 
 }
	
     
}

function verifierMdp($password, $passwordCheck){
	if($password == $passwordCheck)
	{echo "mot de passe correct</br>";
	return true;
	}
	else{
		echo "les mots de passe sont differents</br>";
		return false;
	}
}

function insererBd(){
		try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=alternance', 'root', '');
		
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}

	/*insertion dans utilisateur*/
	$reqParam1='INSERT INTO `alternance`.`utilisateur` VALUES (NULL, :login, :mail, :pass, :statut);';
	$stmt1 = $bdd->prepare($reqParam1);
	$stmt1 -> bindValue(':login',$_POST['nom']);	
	$stmt1 -> bindValue(':mail',$_POST['mail']);
	$pass=sha1($mdp  = $_POST['password1']);
	$stmt1 -> bindValue(':pass',$pass);
	$stmt1 -> bindValue(':statut',$_POST['statut']);
	$stmt1->execute();
}
?>