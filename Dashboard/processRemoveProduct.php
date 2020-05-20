<?php

    require("connexion.php");
    if(isset($_POST['submit'])){

        $sql = "DELETE FROM product WHERE Id=$_POST[Id]";
        $exec = $bdd->exec($sql);

    if($exec){
        header('location: index.php');
    } else {
        echo 'Erreur lord de la supression de donnees';
    }



    }

?>