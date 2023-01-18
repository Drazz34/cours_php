<?php
// Inclusion du fchier qui contient les défnitions de nos
// fonctions générales.
include('fonctions.inc.php');
$nom = "";
// Tester si la page est appelée après validation du formulaire
if (isset($_POST['ok'])) {
    // Récupération de la valeur saisie dans le formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    // La valeur saisie est réafchée dans le formulaire et
    // dans la page...
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Saisie</title>
</head>

<body>
    <form action="saisie.php" method="post">
        <div>
            Nom :
            <input type="text" name="nom" value="<?= vers_formulaire($nom) ?>" />
            <input type="submit" name="ok" value="OK" /><br />
            <?= vers_page($nom) ?>
        </div>
    </form>
</body>

</html>