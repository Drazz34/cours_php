<?php
$personnes = array(
    'mdupond' => array('prenom' => 'Martin', 'nom' => 'Dupond', 'age' => 25, 'ville' => 'Paris'),
    'jm' => array('prenom' => 'Jean', 'nom' => 'Martin', 'age' => 20, 'ville' => 'Villetaneuse'),
    'toto' => array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay'),
    'arn' => array('prenom' => 'Arnaud', 'nom' => 'Dupond', 'age' => 33, 'ville' => 'Paris'),
    'email' => array('prenom' => 'Emilie', 'nom' => 'Ailta', 'age' => 46, 'ville' => 'Villetaneuse'),
    'dask' => array('prenom' => 'Damien', 'nom' => 'Askier', 'age' => 7, 'ville' => 'Villetaneuse')
);

$pseudo = $_GET["pseudo"];

$info = null;
$pseudo = filter_input(INPUT_GET, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS);



if (isset($personnes[$pseudo])) {
    $info = $personnes[$pseudo];
}

if ($info === null) {
    echo "Désolé, votre pseudonyme n’apparaît pas dans la liste.";
} else {
    echo "Pseudo: " . $pseudo . "<br>";
    echo "Prénom: " . $info['prenom'] . "<br>";
    echo "Nom: " . $info['nom'] . "<br>";
    echo "Age: " . $info['age'] . "<br>";
    echo "Ville: " . $info['ville'] . "<br>";
}
