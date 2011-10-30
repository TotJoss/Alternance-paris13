<?php

function upload($nom, $prenom){
	$dossier = 'cv/';
	$fichier = basename($_FILES['cv']['name']);
	$taille_maxi = 100000;
	$taille = filesize($_FILES['cv']['tmp_name']);
	$extensions = array('.pdf');
	$extension = strrchr($_FILES['cv']['name'], '.'); 

	//Début des vérifications de sécurité...
	if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
	{
     return false;
	}
		if($taille>$taille_maxi)
	{
     return false;
	}
	if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
	{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['cv']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
        return true;
		
     }
     else //Sinon (la fonction renvoie FALSE).
     {
        return false;
     }
	}
	else
	{
     return false;
	}

function checkEtudiant($civilité, $prenom, $nom, $nationalite, $mail, $tel, $rue, $cp, $ville, $birth){
	if($civilité == "m" || $civilité == "mme"){
		if(strlen($prenom)=<30){
		
			if(strlen($nom)=<30){
			
				if($strlen($nationalite =< 30){
				
					$SyntaxeMail='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
					if(preg_match($SyntaxeMail,$mail)){
					
						$SyntaxeTel='#^0[1-9][0-9]{8}$#';
						if(preg_match(SyntaxeTel,$tel)){
						
							if(strlen($nom)=<50){
							
								$SyntaxeCP='#[0-9]{5}$#';
								if(preg_match($SyntaxeCP,$cp)){
								
									if(strlen($ville)=<30){
									$SyntaxeBirth = '#^\d{1,2}/\d{1,2}/\d{4}$#'
										if(preg_match($SyntaxeBirth,$birth)){
											return true;
											}	
										}
									
									}
								}
							}
						}
					}
				}
			}
		}
	}
return false;
}
?>