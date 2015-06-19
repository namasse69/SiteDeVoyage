<?php
$host = "localhost";
$login = "root";
$password = "";
$dbname = "voyage";

try 
	{
		$c= new PDO ("mysql:host =$host; dbname = $dbname",$login, $password);
		echo "connection établie <br/>";
	 } catch (PDOException $e)
	 
	 {
		echo "erreur :".$e->getMessage();
	}

?>