<?php
// Ouvre une session
session_start();

// Affiche les informations stockées dans la session
echo 'Utilisateur : ' . $_SESSION['user_name'];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <a href="session.php">Retour</a>
</body>

</html>
