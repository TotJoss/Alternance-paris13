<?php
require_once "header.html";

$pseudo = $_POST['nom'];
$obs = $_POST['message'];
$mail = $_POST['mail'];
$cp  = $_POST['cp'];
$ville = $_POST['ville'];
$rue = $_POST['rue'];
$phone = $_POST['phone'];



	if(strlen($pseudo)<50){
	
		if(strlen($mail)<31){
		
			if(strlen($obs) <501){
	
				$SyntaxeMail='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
				if(preg_match($SyntaxeMail,$mail)){
					
					$SyntaxeTel='#^0[1-9][0-9]{8}$#';
					if(preg_match($SyntaxeTel,$phone)){
					
							$SyntaxeCP='#[0-9]{5}$#';
							if(preg_match($SyntaxeCP,$cp)){
								
								if(strlen($ville) < 31){	
								
									if(strlen($rue) < 31){
									
												try{
												require 'connect.php';		
												}
												catch(Exception $e)
												{
												die('Erreur : '.$e->getMessage());
												}

												/*insertion dans entreprise*/
												$reqParam1='INSERT INTO `alternance`.`entreprise` VALUES (NULL, :nom, :observations, :mail, :codepostal, :ville, :rue, :telephone);';
												$stmt1 = $bdd->prepare($reqParam1);
												$stmt1 -> bindValue(':nom',$_POST['nom']);	
												$stmt1 -> bindValue(':observations',$_POST['message']);
												$stmt1 -> bindValue(':mail',$_POST['mail']);
												$stmt1 -> bindValue(':codepostal',$_POST['cp']);
												$stmt1 -> bindValue(':ville',$_POST['ville']);
												$stmt1 -> bindValue(':rue',$_POST['rue']);
												$stmt1 -> bindValue(':telephone',$_POST['phone']);												
												$stmt1->execute();
												echo '<SCRIPT language=\"Javascript\"> alert(\'Insertion effectué\')</SCRIPT> ';
												header('Location: addcompany.php');   
												
											
									}	
								}
									
							}
						}						
					}
				}				
			}
		
		}
		else {
		echo "<script> alert(\' certaines infos sont incorrects \')</script>";
		}
	

 
require_once "footer.html";


?>