<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf8"/>
		<meta name="viewport" content="width = device-width" />		
		<!-- Boostrap Css -->
		<link rel="stylesheet" href="Bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" href="Bootstrap/bootstrap-theme.min.css" />
		<!-- CSS personnel -->
		<link rel="stylesheet" href="css/Accueil.css" />
		<link rel="stylesheet" href="css/Footer.css" />
		<link rel="stylesheet" href="css/base.css" />
		<link rel="stylesheet" href="css/FaireUnDon.css" />		
		<!-- Bibliothèque JQUERY-->
		<script src="js/jquery-2.1.4.min.js" > </script>
		<script src="js/jquery.form.js" > </script>
		 <script src="http://malsup.github.com/jquery.form.js"></script> 
		<!-- Bootstrap script-->
		<script src="Bootstrap/bootstrap.min.js" ></script>
		
			<?php include("Header.php"); ?>
			
		<body>
			<div id="modal">
				<h2> Fonctionnement économique du site </h2>
				<p>
					The monarch's travel n'a aucune régie publicitaire, aucune pub n'est donc visible sur le site. Le site repose seulement sur les dons des visiteurs ainsi que la vente a faible marge d'outils ou équipement utile au voyage. Hormis le matériel tous est gratuit. Tous le site est consultable par tous et sans restriction.
				</p>
				
				<h2> Pourquoi faire un don ? </h2>
				<p>
					Tous simplement pour maintenir la qualité du site. Nous essayons de maintenir un site utile et accessible a tous, mais cela nécessite quelque investissement entre autre l'hébergement. Vous faites un don avant tout pour que The monarch's travel puisse rester libre de toutes Pubs. Vous verrez ci-dessous un bouton de dons, le montant est libre.
				</p>
				<div id="Paypall" >
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_donations">
					<input type="hidden" name="business" value="gaetan.chapuis@laposte.net">
					<input type="hidden" name="lc" value="FR">
					<input type="hidden" name="item_name" value="The monarch's travel">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="currency_code" value="EUR">
					<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
					<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
					<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
			</div>
		</body>
</html>