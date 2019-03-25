<?php
include ("setting_cookies.php");
include ("header.php");
include ("menu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page de test pour PHP</title>
</head>
<body>
<p id="aff_Player">
<script type="text/javascript">

function Player (name, score) {
    this.namePlayer = name;
    this.scorePlayer = score;
}
var joueur[0] = new Player ("Jean", 17);
var joueur[1] = new Player ("Paul", 14);
var joueur[2] = new Player ("Martin", 18);
var joueur[3] = new Player ("Antoine", 12);

</script>
<p>echo document.getElementById("aff_Player").innerHTML = echo "Participant n°:"+joueur.name[1];
</p>

</p>
<form method="post" action="cible.php">
    <p>Note ici ton pseudo:
    <input type="text" name="user_name" value="" />
    <input type="submit" value="Charge" />    
    </p>
</form>
<p>Entrer le mot de passe pour obtenir les codes d'accès:</p>

        <form action="secret.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>Cette page est réservée aux personnes autorisées uniquement!!!</p>

<?php
include ("footer.php");
?>
</body>
</html>