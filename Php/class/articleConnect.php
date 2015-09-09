<?php 

class articleConnect{

					private $_articleConnect = null;
					private $_host = "localhost";
					private $_login = "root";
					private $_password = "";
					private $_dbname = "sitedevoyage";
					
					function __construct()
					{
						$this->_articleConnect = new PDO("mysql:host=".$this->_host.";dbname=".$this->_dbname."", $this->_login, $this->_password);
						
					}

				function getResume($title)
					{
					try{
						$values =  array(
									'title'=> $title
								);

						$req = $this->_articleConnect->prepare("SELECT Resume, contenue FROM article  WHERE titre =:title");
						$req->execute(
							$values
							);
							
							$response = $req->fetch();
							return $response["contenue"];
						
						}catch(\EXCEPTION $e){
							echo $e->getMessage();
						}
					}
					
					function getContent($title)
					{
					try{
						$values =  array(
									'title'=> $title
								);

						$req = $this->_articleConnect->prepare("SELECT Content FROM article  WHERE titre =:title");
						$req->execute(
							$values
							);
							
							$response = $req->fetch();
							return $response["Content"];
						
						}catch(\EXCEPTION $e){
							echo $e->getMessage();
						}
					}
					
					function getImg($title)
					{
					try{
						$values =  array(
									'title'=> $title
								);

						$req = $this->_articleConnect->prepare("SELECT Resume FROM article  WHERE titre =:title");
						$req->execute(
							$values
							);
							
							$response = $req->fetch();
							echo $response["Resume"];
						
						}catch(\EXCEPTION $e){
							echo $e->getMessage();
						}
					}
				}
	?>