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
		<link rel="stylesheet" href="css/inscription.css" />		
		<!-- Bibliothèque JQUERY-->
		<script src="js/jquery-2.1.4.min.js" > </script>
		<script src="js/jquery.form.js" > </script>
		 <script src="http://malsup.github.com/jquery.form.js"></script> 
		<!-- Bootstrap script-->
		<script src="Bootstrap/bootstrap.min.js" ></script>
		
			<?php include("Header.php"); ?>
			
		<body>
		
		
			<?php include("php/donneForm.php"); ?>
			
			<div id="modal">
				<form id="myForm" action="PageInscription.php" method="post"> 
					<table id="formulaire">
						<tr> 
							<td> Nom: </td>
							<td><input type="text" name="userName" />  </td>
						</tr>
						
						<tr> 
							<td> Prenom: </td>
							<td> <input type="text" name="userFirstname" /> </td>
						</tr>
						
						<tr> 
							<td> Pseudo: </td>
							<td> <input type="text" name="userPseudo" /> </td>
						</tr>
						
						<tr> 
							<td> Mail: </td>
							<td> <input type="email" name="userMail" /> </td>
						</tr>
						
						<tr> 
							<td> Confirmation adresse mail: </td>
							<td> <input type="email" name="userMailConfirm" /> </td>
						</tr>
						
						<tr> 
							<td>Mot de passe: </td>
							<td> <input type="password" name="userPass" /> </td>
						</tr>
						
						<tr>
							<td> Confirmation mot de pass: </td>
							<td> <input type="password" name="userPassConfirm" /> </td>
						</tr>
						
						<tr> 
							<td colspan="2" > <input type="submit" value="Inscription !" /></td>
						</tr>
						
					</table>
				</form> 
			</div>
		</body>
</html>