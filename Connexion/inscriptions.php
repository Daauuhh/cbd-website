<?php 
    require("header.php");
    require("../Dashboard/connexion.php");

    if(isset($POST['forminscription'])){
        if(!empty($_POST['pseudo']) 
        AND !empty($_POST['email']) 
        AND !empty($_POST['email2']) 
        AND !empty($_POST['mdp'])
        AND !empty($_POST['mdp2'])){
            echo "ok";
        } else {
            echo "non";
        }

    }

?>

<div align="Center">
        <h2>Inscriptions</h2>
        <br /><br /><br />

        <form method="POST" action="">

            <table>
                <tr>
                    <td align="right">
                        <label for="pseudo">
                        Pseudos :
                    <td>
                        <input type ="text" placeholder="Votre pseudo"
                        id ="pseudo" name="pseudo" /> 
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="email">
                        Email :</label>
                    </td>
                    <td>
                        <input type ="email" placeholder="Votre email"
                        id ="email" name="email" /> 
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="email2">
                        Confirmation du Email :</label>
                    </td>
                    <td>
                        <input type ="email" placeholder="Confirmez votre email"
                        id ="email2" name="email2" /> 
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mdp">
                        Mot de passe :</label>
                    </td>
                    <td>
                        <input type ="password" placeholder="Votre mot de passe"
                        id ="mdp" name="mdp" /> 
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="mdp2">
                        Confirmation du mdp :</label>
                    </td>
                    <td>
                        <input type ="password" placeholder="Confirmez votre mdp"
                        id ="mdp2" name="mdp2" /> 
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td align="right">
                    <input type="submit" name="forminscription" value="Je m'inscrit">
                    </td>
                </tr>
            </table>
        </form>
</div>


<?php 
    require("../Dashboard/footer.php");
?>