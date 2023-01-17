<html>

<head>
    <meta charset="utf-8" />
    <title>Saisie</title>
</head>

<body>
    <form action="saisie.php" method="post">
        <div>
            Nom :
            <input type="text" name="saisie[nom]" value="" size="20" maxlength="20" />
            Mot de passe :
            <input type="password" name="saisie[mot_de_passe]" value="" size="20" maxlength="20" />
            <br />Sexe :
            <input type="radio" name="saisie[sexe]" value="M" /> Masculin
            <input type="radio" name="saisie[sexe]" value="F" /> Féminin
            <input type="radio" name="saisie[sexe]" value="?" checked="checked" /> Ne sait pas
            <br />Photo :
            <input type="fle" name="saisie[photo]" size="50" />
            <br />Couleurs préférées :
            <input type="checkbox" name="saisie[couleurs][bleu]" />Bleu
            <input type="checkbox" name="saisie[couleurs][blanc]" />Blanc
            <input type="checkbox" name="saisie[couleurs][rouge]" />Rouge
            <input type="checkbox" name="saisie[couleurs][nesaitpas]" checked="checked" />Ne sait pas
            <br />Langue :
            <select name="saisie[langue]">
                <option value="E">Espagnol</option>
                <option value="F" selected="selected">Francais</option>
                <option value="I">Italien</option> *
            </select>
            <br />Fruits préférés :<br />
            <select name="saisie[fruits][]" multiple="multiple" size="8">
                <option value="A">Abricots</option>
                <option value="C">Cerises</option>
                <option value="F">Fraises</option>
                <option value="P">Pêches</option>
                <option value="?" selected="selected">
                    Ne sait pas</option>
            </select>
            <br />Commentaire :<br />
            <textarea name="saisie[commentaire]" rows="4" cols="50"></textarea>
            <br />
            <input type="hidden" name="saisie[invisible]" value="123" />
            <br />
            <input type="submit" name="soumettre" value="OK" />
            <input type="image" name="valider" alt="valider" src="valider.gif" />
            <input type="reset" name="effacer" value="Effacer" />
            <input type="button" name="action" value="Ne fait rien" />
        </div>
    </form>
</body>

</html>