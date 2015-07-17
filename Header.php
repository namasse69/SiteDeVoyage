<head>
<title>The monarch's travel </title>
</head>

<div id="bloc_header" >
		<header>
						<?php

						if (isset($_SESSION['prenom']))
						{
								include("Html/blocAccount.php");
						}
						else
						{
								include("Html/blocConnec.php");
						}
						?>
							 
						
		</header>			
		<div id="menu_principal">    
			<nav>
				<ul id="nav_principal">
					<li>
						<a href="Accueil.php"  id="accueil">Accueil</a>
					</li>
					
					<li>
						<a href="Destination.php"  id="destination"> Destination </a> 
					</li>
					
					<li>
						<a href="Materiel.php"  id="materiel">Matériels nécessaire</a>
					</li>
					
					<li>
						<a href="Media.php"  id="media">Média</a>
							<ul>
								<li><a href="#">Photos</a></li>
								<li><a href="#">Vidéos</a></li>	
							</ul>
					</li>
					
					<li>
						<a href="Boutique.php" id="boutique"> Boutique</a>
					</li>
					
					<li>
						<a href="Contact.php" id="contact"> Nous contacter</a>
					</li>
					
					<li>
						<a href="FaireUnDon.php" id="don"> Faire un don</a>
					</li>
				</ul>
			</nav>
		</div>
</div>

