<?php
require_once '../connbd.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body style="background-image:url('../img/1278235.jpg'); background-size:cover;">
<div class="container" style="width:50%;">
	<h1>Inscription</h1>
    <form method="post" action="inscri.php">
				<div >
					<label>Nom</label><br>
					<input type="text" placeholder="saisir votre nom"  name="nom" required> <br>
				

					
					<label>Email</label><br>
					<input type="email" placeholder="saisir votre Email" name="mail" required><br>
				
					
					<label>adresse</label><br>
					<input  placeholder="saisir votre adresse" name="adresse" required>
					</div>
					<div>  

					<label>Prenom</label><br>
					<input type="text" placeholder="saisir votre prenom" name="prenom" required><br>
								
                
					
					<label>Numéro de tel</label><br>
					<input type="tel" placeholder="saisir votre numéro" name="num" required><br>
				
					
					<label>Mot de passe</label><br>
					<input type="password" placeholder="saisir votre mot de passe" name="pass" required><br>
				
					</div>
					<input type="submit" value="s'inscrire" id="submit">
				
			
			</table>
</form>	
</div>
</body>
</html>