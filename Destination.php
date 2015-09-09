<?php
	session_start(); 
	include ("generateHead.php");
?>
<!DOCTYPE html>
<html>
    <head>
	<?php 
		$head = new generateHead();
		$head->generate("destination");
		include ("php/article.php");
	?>
	</head>

    <body>
				<section>
					<div id="blocPage" >
					
						<div id="listeArticles">
						<h1> Les destinations </h1>
							<div id= "article 1" >
									<div id = "banniere">
										<img src="img/traitNoir.png" alt="" id="separation" />
										<h2> Santorin </h2>
										<a href="
										santorin.php"><img src="img/santorinBanniere.jpg" alt="Santorin" /></a>
									</div>
									<div id = "description">
										<?php 
										$value = $db->getResume("Santorin");
										echo $value; ?>
									</div>
							</div>
							<div id= "article 2" >
									<div id = "banniere">
										<img src="img/traitNoir.png" alt="" />
										<h2> Kuala Lumpur </h2>
										<img src="img/kualalumpurBanniere.jpg" alt="Kuala Lumpur" />
									</div>
									<div id = "description">
										<p> Ville mondiale, Kuala Lumpur a vu se développer de nombreux gratte-ciels dans son quartier d'affaires, dont les tours Petronas, qui furent les plus hautes du monde.</br></br>
									</div>
							</div>
							<div id= "article 3" >
									<div id = "banniere">
										<img src="img/traitNoir.png" alt="" />
										<h2> Vienne (Autriche) </h2>
										<img src="img/vienneBanniere.jpg" alt="Vienne" />
									</div>
									<div id = "description">
										<p>  Vienne (prononcé /vjɛn/ ; Wien [viːn ] en allemand Prononciation du titre dans sa version originale Écouter, Wean en austro-bavarois, Bécs en hongrois) est la capitale de l'Autriche. Elle est aussi Land (État fédéré), en allemand Bundesland Wien. Elle est située dans l'est du pays, et traversée par le Danube (Donau). Elle fut la capitale du Saint-Empire romain germanique </br></br>
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