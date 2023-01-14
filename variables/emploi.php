<?php

    $somme = 2000;
    $metier = "l'informatique";
    $note = 11.5;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les variables en php</title>
</head>
<body>

    <h3>BONJOUR</h3>

    <p>Le salaire auquel j'aspire est de : <strong><?= $somme ?></strong> €. </p>
    <p>La branche dans laquelle je veux travailler est : <strong><?= $metier ?></strong>.</p>
    <p>Pour préciser, <strong><?= $metier ?> est mon dada</strong>.</p>
    <p>La note moyenne que j'ai obtenu au bac est <strong><?= $note ?></strong>.</p>
    
</body>
</html>