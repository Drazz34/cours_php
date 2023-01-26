<!-- html liste lien texte nom auteur trouver une solution pr récup id avec get -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>

<body>

    <table border style="border-collapse: collapse;">
        <th style="background-color: greenyellow;">Auteurs</th>

        <?php

        session_start();

        include_once "commun.inc.php";


        foreach ($auteurs as $key => $auteur) {
        ?>

            <tr>
                <td><a href="accueil.php?id=<?= $key ?>"><?= $auteur ?></a></td>
            </tr>

        <?php
        }

        echo "</table><br>";

        include_once "auteur.php";

        if (isset($_SESSION["visites"])) {
            $auteurs_vus = "";
            foreach ($_SESSION["visites"] as $id => $timestamp) {
                $auteurs_vus .= $auteurs[$id] . " - ";
            }
            $auteurs_vus = rtrim($auteurs_vus, " - ");
            if (!empty($auteurs_vus)) {
                echo "Trois derniers auteurs consultés : " . $auteurs_vus;
            }
        }

        ?>

</body>

</html>