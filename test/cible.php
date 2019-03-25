
<p>Bonjour !</p>
<!-- Version 1 transforme les caractères du HTML pour les afficher. Version 2 les retire -->
<p>Version 1: Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo htmlspecialchars($_POST['user_name']); ?> !</p>
<p>Version 2: Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo strip_tags($_POST['user_name']); ?> !</p>

<div>
<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>
<p><?php include ("retour_index.php"); ?> </p>
<p> Bien que ça ne serve pas pour le moment, tu peux envoyer du texte par <a href="livre_d_or.php">là</a></p>
</div>