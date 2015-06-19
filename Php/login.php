<?php

 include ("class/DbConnect.php");

 $db = new dbConnect();
 
 $db->GetUserByName($_GET['name'],$_GET['pass']);

?>