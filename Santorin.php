<?php

	session_start(); 
	include ("generateHead.php");
?>
<!DOCTYPE html>
<html>
    <head>
		<?php 
		$head = new generateHead();
		$head->generate("articleDestination");
		include ("php/article.php");
		?>
    </head>

    <body>
				<section>
					<div id="blocPage" >
					
						<div id="article" >
						
							<div id= "article 1" >
									<h1> Santorin </h1>
									<div id = "banniere">
										<img src="img/santorinBanniere.jpg" alt="Santorin" />
									</div>
									<div id = "description">
									<?php 
										$value = $db->getResume("Santorin");
										echo $value; ?>
									</div>
									<div id = "mustSee">
									
									<?php
										mysql_query("SET NAMES 'utf8'");
										$value = $db->getContent("Santorin");
										echo $value; ?>
									</div>
									<div id = "depense">
										<h2> Combien sa coute ? </h2>
										<p> blabla </p>
									</div>
									<div id = "conclusion">
									<h2> Alors Santorin sa vaut le coup ? </h2>
										<p> blabla </b>
									</div>
							</div>
							
							<div id= "article 2" >
							</div>
							
							<div id= "article 3" >
							</div>
							
							<div id= "article 3" >
							</div>
							
							<div id= "article 4" >
							</div>
								
						</p>	
						</div>
					</div>
				</section>		
				
		 <!--	<?php // include("Footer.php"); ?> -->
    </body>
</html>