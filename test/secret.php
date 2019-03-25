<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès</title>
    </head>
    <body>
        <?php
            if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "koala") // Si le mot de passe est bon
            {
                // On affiche les codes
        ?>
            <h1>Voici les codes d'accès :</h1>
            <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
            
            <p>
            Cette page est réservée au personnel autorisé. <br />
            N'oubliez pas de la visiter régulièrement, les codes d'accès sont changés régulièrement.<br />
            Merci de votre visite.
            </p>
            <?php include ("retour_index.php"); ?>
        <?php
            }
            else // Sinon, on affiche un message d'erreur
            {
            echo '<p>Mot de passe incorrect</p>';
            include ("tracking.php");
            include ("retour_index.php");
            }   
        ?>
    </body>
</html>
