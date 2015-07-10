<?php

	 include ("class/DbConnect.php");

	 $db = new dbConnect();
	 
	 $db->GetUserByName(isset($_POST['mail']),isset($_POST['pass']));

?>