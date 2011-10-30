<?php
require_once 'checkStd';

if (isset($_POST['civilité']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['nationalite']) && isset($_POST['mail']) && isset($_POST['tel']) && isset($_POST['rue']) && isset($_POST['cp']) && isset($_POST['ville']) && isset($_POST['birth']) && isset($_POST['observation']) && isset($_POST['cv'])){
	if (checkEtudiant($_POST['civilité'], $_POST['prenom'], $_POST['nom'], $_POST['nationalite'], $_POST['mail'], $_POST['tel'], $_POST['rue'], $_POST['cp'], $_POST['ville'], $_POST['birth']))
	{
	upload($nom, $prenom);
	echo 'bravo';
	}
	else{
	echo 'certaines informations ne sont pas valides';
	}
	
}
?>