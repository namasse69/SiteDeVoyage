<?php

	 include ("class/DbConnect.php");

	 $db = new dbConnect();
	 
	 $db->GetUserByMail($_POST['mail'],$_POST['pass']);

?>