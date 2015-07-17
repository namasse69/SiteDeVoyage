<?php

	class validation {
			
		function validationInscription($mail, $mailConfirm, $pass, $passConfirm)
		{
			if ($mail != $mailConfirm)
			{
				$_POST['modalConfirm'] = "L'adresse mail ne correspond pas a l'adresse de confirmation";
				
				include ("modalConfirm.php");
			}
			elseif ($pass != $passConfirm)
			{
				$_POST['modalConfirm'] =  "Le mot de pass ne correspond pas au mot de pass de confirmation";
				
					include ("modalConfirm.php");
			}
			else
			{
					include ("DbConnect.php");
					
					$db = new dbConnect();
					$db->SetInscription($_POST['userName'],$_POST['userFirstname'],$_POST['userPseudo'],$_POST['userMail'],$_POST['userPass']);
						
					header('Location: Accueil.php');
			}	
		}
	}
	?>