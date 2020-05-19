<?php require('src/php/connexion.php'); 

    //LECTURE
    $requete = $bdd->query('SELECT * FROM product');
?>

    <table border>
    <tr>
        <th>Thumbnail</th>
        <th>Name</th>
        <th>Price</th>
        <th>Weight</th>
    </tr>
        
<?php
    while($donnees = $requete->fetch()) {

        echo'<tr>
                <td><img style="width:120px;height:auto";
                src="data:image/jpeg;base64,
                '.base64_encode($donnees['Thumbnail']).'"/></td> 
                </style>
                <td>'.$donnees['Name'].'</td>
                <td>'.$donnees['Price'].'</td>
                <td>'.$donnees['Weight'].'</td>
            </tr>';

        }
    echo '</table>';
    
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

    </body>
</html>