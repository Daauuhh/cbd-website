<?php require('src/php/connection.php'); 

    if (isset($_POST['save'])){
        $requete = $bdd->prepare('INSERT INTO product(Name, Price, Weight')
        VALUES ('".$_POST["name"]."','".$_POST["price"]."','".$_POST["weight"]."');
    }
?>

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

    <form method="post"> 
    <label id="first"> Name</label><br/>
    <input type="text" name="Name"><br/>

    <label id="first">Price</label><br/>
    <input type="num" name="Price"><br/>

    <label id="first">Weight</label><br/>
    <input type="num" name="Weight"><br/>

    <button type="submit" name="save">save</button>
    <button type="submit" name="get">get</button>
    </form>

<!--<form action="dashboard.php" method="post">
    <p>Nom : <input type="text" name="nom" /></p>
    <p>Prix : <input type="num" name="prix" /></p>
    <p>Poids : <input type="num" name="poids" /></p>
    <p><input type="submit" value="OK"></p>
</form>-->

    </body>
</html>