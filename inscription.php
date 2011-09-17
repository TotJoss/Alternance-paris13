<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>base de données</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<body>

<?php
include('check.inc.php');
$pseudo = $_POST['nom'];
$mail = $_POST['mail'];
$mdp  = $_POST['mdp'];
$mdpCheck = $_POST['mdpCheck'];


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=collection', 'root', '');
	
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$mdpValide=VerifierAdresseMail($mail);
$mailValide=verifierPseudo($pseudo);
$passwordValide=verifierMdp($mdp, $mdpCheck);


if($mdpValide==true && $mailValide==true && $passwordValide==true){
	echo "confirmation de l'inscription</br>";
	//mailInscription($mail,$pseudo);
	echo " vous pouvez vous  <a href='connexion.html' title='formulaire connexion' >connecter</a> </br>";
	insererBd($mail,$pseudo,$mdp);
}
else{
	echo " certaines informations sont incorrect <a href='inscription.html' title='formulaire d'inscription' >recommencer l'inscription</a> </br>";
}

?>



</body>
 </html>