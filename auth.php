<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	
function check_data($log, $pass){

	
	try {
	$bdd = new PDO("mysql:host=$hostname;dbname=alternance", $username, $password);
	}
	catch(PDOException $e) {
	echo $e->getMessage();
	}

	$mdp=sha1($pass);
   
   	$query = $bdd->prepare("SELECT id FROM `alternance.utilisateur`.`utilisateur` WHERE login = '$log' && mdp='$mdp'");
	$nb = $query->rowCount(); 
	if($nb=1){
		echo"Bienvenue</br>";
		return true;
	}
   	
   	else{
   		echo"Les informations rentrées ne sont pas valides</br>";
   		return false;
   	
	}
}

?>