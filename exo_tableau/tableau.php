<link rel="stylesheet" type="text/css" href="table.css">

<?php

// PARTIE 1

$personnes = array(
    'mdupond' => array('prenom' => 'Martin', 'nom' => 'Dupond', 'age' => 25, 'ville' => 'Paris'),
    'jm' => array('prenom' => 'Jean', 'nom' => 'Martin', 'age' => 20, 'ville' => 'Villetaneuse'),
    'toto' => array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay'),
    'arn' => array('prenom' => 'Arnaud', 'nom' => 'Dupond', 'age' => 33, 'ville' => 'Paris'),
    'email' => array('prenom' => 'Emilie', 'nom' => 'Ailta', 'age' => 46, 'ville' => 'Villetaneuse'),
    'dask' => array('prenom' => 'Damien', 'nom' => 'Askier', 'age' => 7, 'ville' => 'Villetaneuse')
);

// print_r(gettype(array_keys($personnes)[0]));

// Question 1

echo "Les clés du tableau sont : <br>";
foreach (array_keys($personnes) as $key) {
    echo $key . " de type " . gettype($key) . "<br>";
}

echo "<br><br>";

foreach ($personnes as $key => $value) {
    echo "<br>Dans le tableau " . $key . ":<br> ";
    foreach ($value as $key1 => $value1) {
        // echo "la clé est : " . $key1 . " et sa valeur est : " . gettype($value1) . "<br>";
        echo "La valeur $value1 est de type " . gettype($value1) . ". <br>";
    }
}

// var_dump($personnes['toto']);

echo "<br>La valeur associée à la clé 'toto' est : ";
echo "<pre>";
print_r($personnes['toto']);
echo "</pre>";

echo "<br><br>";

// QUESTION 2

echo $personnes["arn"]["age"];
echo "<br>";
echo $personnes["toto"]["ville"];
echo "<br>";
echo "<pre>";
print_r($personnes["dask"]);
echo "</pre>";

echo "<br><br>";

// QUESTION 3

function monTableau($tableau)
{
    echo "<table>";
    echo "<tr><th>Prénom</th><th>Nom</th><th>Âge</th><th>Ville</th>";
    
    foreach ($tableau as $key => $value) {
        echo "<tr>";
        echo "<td>" . $value["prenom"] . "</td>";
        echo "<td>" . $value["nom"] . "</td>";
        echo "<td>" . $value["age"] . "</td>";
        echo "<td>" . $value["ville"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

monTableau($personnes);

echo "<br><br>";

// QUESTION 4

function maVille($tableau, $ville)
{
    echo "<table>";
    echo "<tr><th>Prénom</th><th>Nom</th><th>Âge</th><th>Ville</th>";
    
    foreach ($tableau as $key => $value) {
        if($value["ville"] == $ville)
        {
            echo "<tr>";
            echo "<td>".$value['prenom']."</td>";
            echo "<td>".$value['nom']."</td>";
            echo "<td>".$value['age']."</td>";
            echo "<td>".$value['ville']."</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
}

maVille($personnes, "Epinay");

echo "<br><br>";

// PARTIE 2

// QUESTION 1

?>

<a href="pseudo.php?pseudo=toto">Qui est Toto ?</a>