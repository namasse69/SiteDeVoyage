<?php 

class dbConnect{

	private $_dbConnect = null;
	private $_host = "localhost";
	private $_login = "root";
	private $_password = "";
	private $_dbname = "sitedevoyage";
	
	function __construct()
	{
		$this->_dbConnect = new PDO("mysql:host=".$this->_host.";dbname=".$this->_dbname."", $this->_login, $this->_password);
	}
	
	
	function getHost(){
		return $this->_host;
	} 
	
	
	function setHost($host){
		return $this->_host = $host;
	}
	
	
	
	function GetUserByMail($Mail, $Pass)
	{
		$req = $this->_dbConnect->prepare ('SELECT * FROM utilisateur  WHERE userMail =:Mail');

		$req->execute(
			array(
					'Mail' => $Mail
				)
			);
			$response = $req->fetch();
						
			if ($response){
						if ($response['userPass'] == crypt($Pass,$Mail))
						{
							echo "Bienvenue ".$response['userFirstname']." ".$response['userName'];
							session_start();
							
							$_SESSION['prenom'] = $response['userFirstname'];
							$_SESSION['nom'] = $response['userName'];
						}else{
							echo "Mauvais mot de passe";
						}
			}else{

				echo "mauvais identifiant";
			}
	}
	
	function SetInscription($userName, $userFirstname, $userPseudo, $userMail,  $userPass)
	{
	try{
		$values =  array(
					'name'=> $userName,
					'firstname'=> $userFirstname,
					'pseudo'=> $userPseudo,
					'mail'=> $userMail,
					'pass'=>   crypt($userPass,$userMail)
				);

		$req = $this->_dbConnect->prepare("INSERT INTO utilisateur (`userName`, `userFirstname`,`userPseudo`, `userMail`, `userPass`) VALUES (:name, :firstname,:pseudo, :mail, :pass)");
		$req->execute(
			$values
			);
		

		
		$req2 = $this->_dbConnect->prepare ('SELECT * FROM utilisateur  WHERE userMail =:Mail');
		$req2->execute(
			array(
					'Mail' => $userMail
				)
			);
			$response = $req2->fetch();
			
		if ($response)
		{
		
		session_start();
		
		$_SESSION['prenom'] = $response['userFirstname'];
		$_SESSION['nom'] = $response['userName'];
		
		}


		
		
		}catch(\EXCEPTION $e){
			echo $e->getMessage();
		}
	}
}

