<form action="saisie_exo.php" method="post">
    <label> Nom : </label>
    <input type="text" name="nom" size="20" maxlength="20" />
    <br>
    <label> Mot de passe : </label>
    <input type="password" name="mot_de_passe" size="20" maxlength="20" />
    <br>
    <label>Sexe :</label>
    <input type="radio" name="sexe" value="M" />Masculin
    <input type="radio" name="sexe" value="F" />Féminin
    <input type="radio" name="sexe" value="?" checked="checked" />Ne sait pas
    <br />
    <label>Photo :</label>
    <input type="file" name="photo" size="50" />
    <br>
    <label>Couleurs préférées :</label>
    <input type="checkbox" name="couleurs[bleu]" />Bleu
    <input type="checkbox" name="couleurs[blanc]" />Blanc
    <input type="checkbox" name="couleurs[rouge]" />Rouge
    <input type="checkbox" name="couleurs[nesaitpas]" checked="checked" />Ne sait pas
    <br>
    <label>Langue :</label>
    <select name="langue">
        <option value="E">Espagnol</option>
        <option value="F" selected="selected">Francais</option>
        <option value="I">Italien</option>
    </select>
    <br>
    <label>Fruits préférés :</label>
    <br>
    <select name="fruits[]" multiple="multiple" size="8">
        <option value="A">Abricots</option>
        <option value="C">Cerises</option>
        <option value="F">Fraises</option>
        <option value="P">Pêches</option>
        <option value="?" selected="selected">Ne sait pas</ option>
    </select>
    <br>
    <label>Commentaire :</label>
    <br>
    <textarea name="commentaire" rows="4" cols="50"></textarea>
    <br>
    <input type="hidden" name="invisible" value="123" />
    <br>
    <input type="submit" name="soumettre" value="OK" />
    <input type="image" name="valider" alt="valider" src="valider.gif" />
    <input type="reset" name="effacer" value="Effacer" />
    <input type="button" name="action" value="Ne fait rien" />
</form>