<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisie</title>
</head>

<body>

    <?php

    $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_SPECIAL_CHARS);
    $submit = filter_input(INPUT_POST, "Enregistrer", FILTER_SANITIZE_SPECIAL_CHARS);
    $auteur = $nom . " " . $prenom;

    ?>

    <form action="saisie.php" method="POST">

        <label for="nom">Nom : </label>
        <input type="text" name="nom" size="40">

        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" size="40">

        <br><br>

        <input type="submit" name="ok" value="Enregistrer">

    </form>

    <?php

    if (empty($nom) || empty($prenom)) {
        echo "Veuillez écrire votre nom et prénom";
    } else {
        echo $auteur;
    }

    ?>

</body>

</html>