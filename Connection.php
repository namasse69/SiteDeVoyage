<?php
$host = "monarchtravel.com";
$login = "u442346591_pasha";
$password = "Chrisol69";
$dbname = "u442346591_travl";

try 
	{
		$c= new PDO ("mysql:host =$host; dbname = $dbname",$login, $password);
		echo "connection établie <br/>";
	 } catch (PDOException $e)
	 
	 {
		echo "erreur :".$e->getMessage();
	}

?>