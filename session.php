<?php
// Ouvre une session
session_start();

// Stocke des informations dans la session
$_SESSION['user_id'] = 123;
$_SESSION['user_name'] = 'John Doe';

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
    <a href="session2.php">Page 2</a>
</body>

</html>