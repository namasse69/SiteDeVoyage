<?php 

class dbConnect{

	private $_dbConnect = null;
	private $host = "mysql.hostinger.fr";
	private $login = "u318139941_pasha";
	private $password = "Chrisol69";
	private $dbname = "u318139941_travl";
	
	function _construct()
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
	
	
	
	function GetUserByName($mail, $pass)
	{
	try{
		$values = array(
					'mail' => $mail,
				);
				
		$req = $this->_dbConnect->prepare ('SELECT * FROM utilisateur  WHERE userMail = :mail');
		$req->execute(
			$values
			);
			
			$response = $req->fetch();
			var_dump($req);
						
			if ($response){
						if ($response['userPass'] == $pass)
						{
							echo "Bienvenue ".$response['userName'];
							
						}else{
							echo "Mauvais mot de passe";
						}
			}else{

				echo "mauvais identifiant";
			}
	}catch(\EXCEPTION $e){
			echo $e->getMessage();
		}
	
	
	function SetInscription($userName, $userFirstname, $userPseudo, $userMail,  $userPass)
	{
	try{
		$values =  array(
					'name'=> $userName,
					'firstname'=> $userFirstname,
					'pseudo' => $userPseudo,
					'mail'=> $userMail,
					'pass'=> $userPass
				);
				
		$req = $this->_dbConnect->prepare("INSERT INTO `inscription` (`userName`, `userFirstname`,`userPseudo`, `userMail`, `userPass`) VALUES (:name, :firstname, :pseudo, :mail, :pass)");
		$req->execute(
			$values
			);
		$response = $req->fetch();
		
		var_dump($req);
		
		var_dump($values);
		
		}catch(\EXCEPTION $e){
			echo $e->getMessage();
		}
	}
}
}