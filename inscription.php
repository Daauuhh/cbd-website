<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HCH FRANCE</title>
	<link rel="stylesheet" type="text/css" href="src/css/main.css">
	<link rel="stylesheet" type="text/css" href="src/css/reset.css">
	
	<link rel="icon" type="image/pngn" href="src/images/icons/favicon.png"><!-- il faut un .ico -->
</head>
<body>

	<?php include('src/php/header.php'); ?>
	
	<section>
		<div id="login-body">
			<h1>S'inscrire</h1>

			<form method="post" action="inscription.php">
				<input type="email" name="email" placeholder="Votre adresse email" required />
				<input type="password" name="password" placeholder="Mot de passe" required />
				<input type="password" name="password_two" placeholder="Retapez votre mot de passe" required />
				<button type="submit">S'inscrire</button>
			</form>

			<p class="grey">Déjà sur HCH France ? <a href="index.php">Connectez-vous</a>.</p>
		</div>
	</section>

	<?php include('src/php/footer.php'); ?>
	
</body>
</html>