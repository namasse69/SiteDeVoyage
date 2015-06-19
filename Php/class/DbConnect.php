<?php 

class dbConnect{

	private $_dbConnect = null;
	private $_host = "localhost";
	private $_login = "root";
	private $_password = "";
	private $_dbname = "walley";
	
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

