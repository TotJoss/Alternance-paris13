<?php

require_once "header.html";
include('check.inc.php');
$pseudo = $_POST['nom'];
$mail = $_POST['mail'];
$mdp  = $_POST['password1'];
$mdpCheck = $_POST['password2'];
$statut = $_POST['statut'];


$hostname = 'localhost';
$username = 'root';
$password = '';

try {
$bdd = new PDO("mysql:host=$hostname;dbname=web", $username, $password);
}
catch(PDOException $e) {
echo $e->getMessage();
}

$mdpValide=VerifierAdresseMail($mail);
$mailValide=verifierPseudo($pseudo);
$passwordValide=verifierMdp($mdp, $mdpCheck);

if($mdpValide==true && $mailValide==true && $passwordValide==true){
	insererBd($mail,$pseudo,$mdp,$statut);
	echo "<SCRIPT language=\"Javascript\"> alert(\'Inscription confirmé\')</SCRIPT> ";
	
}
else{
	echo " certaines informations sont incorrect <a href='addusers.php' title='formulaire d'inscription' >recommencer l'inscription</a> </br>";
}

 
require_once "footer.html";

?>