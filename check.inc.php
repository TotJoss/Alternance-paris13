<?php
function VerifierAdresseMail($adresse){ 
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=collection', 'root', '');
		
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}

   $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
   if(preg_match($Syntaxe,$adresse)) {
   	$query = $bdd->query("SELECT mail FROM `collection`.`users` WHERE mail = '$adresse'");
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
		$bdd = new PDO('mysql:host=localhost;dbname=collection', 'root', '');
		
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

   	//verifie que pseudo et mail ne sont pas déja pris
	$query = $bdd->query("SELECT pseudo FROM `collection`.`users` WHERE pseudo = '$name'");
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

function mailInscription($adresse,$name){
	  // Le message
     $message = "Bonjour $name\nMerci de votre inscription à MIB collector \n";

     // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
     $message = wordwrap($message, 70);

     // Envoi du mail
     mail('$adresse', 'inscription MIB collector', $message);
}

function insererBd(){
		try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=collection', 'root', '');
		
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}


	/*insertion dans users*/
	$reqParam1='INSERT INTO `collection`.`users` VALUES (:pseudo, :mail, :pass);';
	$stmt1 = $bdd->prepare($reqParam1);
	$stmt1 -> bindValue(':pseudo',$_POST['nom']);	
	$stmt1 -> bindValue(':mail',$_POST['mail']);
	$pass=sha1($mdp  = $_POST['mdp']);
	$stmt1 -> bindValue(':pass',$pass);
	$stmt1->execute();
}
?>