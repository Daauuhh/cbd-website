<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HCH CBD FRANCE</title>
	<link rel="stylesheet" type="text/css" href="src/css/main.css">
	<link rel="stylesheet" type="text/css" href="src/css/reset.css">
	<link rel="icon" type="image/pngn" href="src/images/icons/favicon.png"><!-- il faut un .ico -->
</head>
<body>

	<?php include('src/php/header.php'); ?>
	
	<section>
		<div id="login-body">
				<h1>S'identifier</h1>

				<form method="post" action="index.php">
					<input type="email" name="email" placeholder="Votre adresse email" required />
					<input type="password" name="password" placeholder="Mot de passe" required />
					<button type="submit">S'identifier</button>
					<label id="option"><input type="checkbox" name="auto" checked />Se souvenir de moi</label>
				</form>
			

				<p class="grey">Première visite sur HCH France ? <a href="inscription.php">Inscrivez-vous</a>.</p>
		</div>
	</section>

	<?php include('src/php/footer.php'); ?>
</body>
</html>