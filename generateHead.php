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
				
			case "destination":
				echo '<link rel="stylesheet" href="css/Destination.css" />';
				include("Header.php");
				break;
				
			case "articleDestination":
				echo '<link rel="stylesheet" href="css/articleDestination.css" />';
				
				include("Header.php");
				break;
						
		}
	
	}

}