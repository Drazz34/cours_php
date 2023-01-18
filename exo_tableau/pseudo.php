<?php

include_once "mon_tableau.php";

// session en php avec cookie pour récuperer le tableau sans avoir à le recopier du fichier tableau.php
// ou le transformer en json avec un lien ?

// $pseudo = $_GET["pseudo"];
$pseudo_form = $_POST["pseudo"];

// var_dump($_POST);
// print_r($_POST);

$info = null;
// $pseudo = filter_input(INPUT_GET, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS);
$pseudo_form = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS);


// if (isset($personnes[$pseudo]) && !empty($_GET)) {
//     $info = $personnes[$pseudo];
// }

if (isset($personnes[$pseudo_form]) && !empty($_POST)) {
    $info = $personnes[$pseudo_form];
}

if ($info == null) {
    echo "Désolé, votre pseudonyme n’apparaît pas dans la liste.";
} else {
    echo "Pseudo: " . $pseudo_form . "<br>";
    echo "Prénom: " . $info['prenom'] . "<br>";
    echo "Nom: " . $info['nom'] . "<br>";
    echo "Age: " . $info['age'] . "<br>";
    echo "Ville: " . $info['ville'] . "<br>";
}

// if ($info == null) {
//     echo "Désolé, votre pseudonyme n’apparaît pas dans la liste.";
// } else {
//     echo "Pseudo: " . $pseudo . "<br>";
//     echo "Prénom: " . $info['prenom'] . "<br>";
//     echo "Nom: " . $info['nom'] . "<br>";
//     echo "Age: " . $info['age'] . "<br>";
//     echo "Ville: " . $info['ville'] . "<br>";
// }