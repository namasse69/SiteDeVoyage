
<?php
$host = "mysql.hostinger.fr";
$login = "u318139941_pasha";
$password = "Chrisol69";
$dbname = "u318139941_travl";

try{
		$q = new PDO("mysql:host=".$host.";dbname=".$dbname."", $login, $password);
		echo "connexion reussie";
		
	}catch (PDOException $e)
	{
		echo "erreur".$e->getMessage();
	}
?>