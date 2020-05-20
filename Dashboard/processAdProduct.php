<?php
    require('connexion.php');

    if(isset($_POST['submit'])){

        //get data
        $Name = $_POST['Name'];
        $Price = $_POST['Price'];
        $Weight = $_POST['Weight'];
        $Description = $_POST['Description'];
        $Category = $_POST['Category'];
        $Stock = $_POST['Stock'];
        $Thumbnail = file_get_contents ($_FILES['Thumbnail']['tmp_name']);

        // SQL Request
        $sql = "INSERT INTO `product`(`Name`, `Price`, `Weight`, `Description`, `Category`, `Stock`, `Thumbnail`) 
        VALUES (:Name,:Price,:Weight,:Description,:Category,:Stock,:Thumbnail)";

        $res = $bdd->prepare($sql);
        $exec = $res->execute(array(":Name"=>$Name,":Price"=>$Price,":Weight"=>$Weight,":Description"=>$Description,":Category"=>$Category,":Thumbnail"=>$Thumbnail,":Stock"=>$Stock));

        // CHECK IF DATA IS INSERT AND REDIRECT
        if($exec){
            header( 'location: index.php' );
        }else{
            echo 'error : Pas d\'integration de données';
        }
    }
?>