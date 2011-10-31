<?php
function checkEtudiant($civilité, $prenom, $nom, $nationalite, $mail, $tel, $rue, $cp, $ville, $birth){
	if($civilité == "m" || $civilité == "mme"){
	
		if(strlen($prenom) <=30){
		
			if(strlen($nom)<=30){
			
				if($strlen($nationalite <= 30){
				
					$SyntaxeMail='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
					if(preg_match($SyntaxeMail,$mail)){
					
						$SyntaxeTel='#^0[1-9][0-9]{8}$#';
						if(preg_match(SyntaxeTel,$tel)){
						
							if(strlen($nom)<=50){
							
								$SyntaxeCP='#[0-9]{5}$#';
								if(preg_match($SyntaxeCP,$cp)){
								
									if(strlen($ville)<<30){
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
	else{
	return false;
	}
}



if (isset($_POST['civilité']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['nationalite']) && isset($_POST['mail']) && isset($_POST['tel']) && isset($_POST['rue']) && isset($_POST['cp']) && isset($_POST['ville']) && isset($_POST['birth']) && isset($_POST['observation']) && isset($_POST['cv'])){
	if (checkEtudiant($_POST['civilité'], $_POST['prenom'], $_POST['nom'], $_POST['nationalite'], $_POST['mail'], $_POST['tel'], $_POST['rue'], $_POST['cp'], $_POST['ville'], $_POST['birth']))
	{
	echo 'bravo';
	
	}
	else{
	echo 'certaines informations ne sont pas valides';
	}
	
}
?>