<p><h3>Zone de test - Livre d'Or</h3></p>

<p>
<textarea name="message" rows="8" cols="45">

Be Creative!
Ecris ce que tu veux ;)

</textarea>

</p>
<p> Multi-choix vers .... rien pour le moment ;)
<input type="checkbox" name="case" id="case_coche_1" checked="checked" /> <label for="case_coche_1">Choix n°1</label>
<input type="checkbox" name="case" id="case_coche_2" /> <label for="case_coche_2">Choix n°2</label>
<input type="checkbox" name="case" id="case_coche_3" /> <label for="case_coche_3">Choix n°3</label>
</p>
<p>
<select name="roll_menu">
    <option value="roll_left">Gauche</option>
    <option value="roll_right">Droite</option>
    <option value="roll_middle">Je sais pas!!!</option>
</select>
</p>

<p>
<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
    <p>
        Formulaire d'envoi de fichier :<br />
        <input type="file" name="monfichier" /><br />
        <input type="submit" value="Envoyer le fichier" />
        Uniquement un fichier jpg/jpeg , gif ou png
</form>
</p>