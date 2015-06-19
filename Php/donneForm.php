<?php

	 include ("class/DbConnect.php");

	$db = new dbConnect();
 
	$db->SetInscription($_POST['userName'],$_POST['userFirstname'], $_POST['userPseudo'],$_POST['userMail'],$_POST['userPass']);

?>

