<?php


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gl', 'root', '');
	echo("\o/ connexion");
	$bdd->query("SET NAMES 'utf8'");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
 
?>