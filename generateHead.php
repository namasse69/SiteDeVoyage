<?php

class generateHead{

	function generateGlobal(){
		include ('views/head.php');
	}

	
	function generate($page){
		
		$this->generateGlobal();
		
		switch($page){
			case "home":
				include("Header.php");
				break;
			case "Login":
				echo "";
				break;
		}
	
	}

}