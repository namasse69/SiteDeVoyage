<?php

 include ("class/DbConnect.php");

 $db = new dbConnect();
 
 $db->GetUserByName($_GET['Mail'],$_GET['Pass']);

?>