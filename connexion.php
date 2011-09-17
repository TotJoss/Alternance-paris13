<?php

$pseudo = $_POST['nom'];
$mdp  = $_POST['mdp'];

function connecte($pseudo, $password){
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=collection', 'root', '');
		
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}
	$password=sha1($_POST['mdp']);

	$queryMail = $bdd->query("SELECT pseudo FROM `collection`.`users` WHERE pseudo = '$pseudo' AND password='$password'");
	
	$nbM = $queryMail->rowCount(); 
	$nbN = $queryName->rowCount(); 

	if($nbN==1){
		echo"pseudo valide</br>";
		if($nbM==1){
			echo"MDP valide</br>";
			echo"Bienvenue !";
		}
		else{echo "Mot de passe invalide";}
	}
	else{
		echo"$nbN";
		echo"$nbM";
		echo"EPIC FAIL !!!11 </br>";
	}


}

connecte($_POST['nom'],$_POST['mdp']);
?>