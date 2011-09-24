<?php


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=gl', 'root', '');
	echo("\o/ connexion");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
 
?>