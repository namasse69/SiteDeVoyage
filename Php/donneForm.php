<?php
	include ("class/validation.php");
	
	$vald = new validation();
	$vald->validationInscription($_POST['userMail'],$_POST['userMailConfirm'],$_POST['userPass'],$_POST['userPassConfirm']);
?>

	