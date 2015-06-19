<?php 

class dbConnect{

	private $_dbConnect = null;
	private $host = "mysql.hostinger.fr";
	private $login = "u318139941_pasha";
	private $password = "Chrisol69";
	private $dbname = "u318139941_travl";
	
	function __construct()
	{
		$this->_dbConnect = new PDO("mysql:host=".$this->_host.";dbname=".$this->_dbname."", $this->_login, $this->_password);
	}
	
	
	/**
	 * 
	 */
	function getHost(){
		return $this->_host;
	}
	
	
	function setHost($host){
		return $this->_host = $host;
	}
	
	
	
	function GetUserByName($name, $pass)
	{
		$req = $this->_dbConnect->prepare ('SELECT * FROM utilisateur  WHERE name =:name');

		$req->execute(
			array(
					'name' => $name
				)
			);
			$response = $req->fetch();
			var_dump($req);
						
			if ($response){
						if ($response['pass'] == $pass)
						{
							echo "Bienvenue ".$response['name'];
							//header("Location: acceuil.php");
							
						}else{
							echo "Mauvais mot de passe";
						}
			}else{

				echo "mauvais identifiant";
			}
	}

}

