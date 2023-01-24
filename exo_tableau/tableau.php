<link rel="stylesheet" type="text/css" href="table.css">

<?php

include_once "mon_tableau.php";

// PARTIE 1

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

function monTableau(array $tableau)
{
    echo "<table>";
    echo "<tr><th>Prénom</th><th>Nom</th><th>Âge</th><th>Ville</th>";
    
    foreach ($tableau as $key => $values) {
        echo "<tr>";
        echo "<td>" . $values["prenom"] . "</td>";
        echo "<td>" . $values["nom"] . "</td>";
        echo "<td>" . $values["age"] . "</td>";
        echo "<td>" . $values["ville"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

monTableau($personnes);

echo "<br><br>";

// correction 

// function monTableau(array $tableau)
// {
//     foreach ($tableau as $key => $values) {
//         echo $key;
//         foreach ($values as $key2 => $value) {
//             echo $key2 . " " . $value;
//         }
//     }
// }

// QUESTION 4

function maVille(array $tableau, string $ville)
{
    echo "<table>";
    echo "<tr><th>Prénom</th><th>Nom</th><th>Âge</th><th>Ville</th>";
    
    foreach ($tableau as $key => $values) {
        if($values["ville"] == $ville)
        {
            echo "<tr>";
            echo "<td>".$values['prenom']."</td>";
            echo "<td>".$values['nom']."</td>";
            echo "<td>".$values['age']."</td>";
            echo "<td>".$values['ville']."</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
}

maVille($personnes, "Epinay");

echo "<br><br>";

// Correction

// function maVille(array $tableau, string $ville)
// {
//     foreach ($tableau as $key => $values) {
//         if($values["ville"] == $ville)
//         {
//             echo $key . " ";
//             foreach ($values as $key2 => $value) {
//                 echo $value;
//             }
//         }
//     }
// }

// Ou avec in_array($ville) dans le if, type booléen.

// PARTIE 2

// QUESTION 1

?>

<!-- <a href="pseudo.php?pseudo=toto">Qui est Toto ?</a> -->

<!-- Correction -->

<?php foreach ($personnes as $key => $values) : ?>
{
    <a href="pseudo.php?pseudo=<?= $key ?>"><?= $key ?></a>
    <?php endforeach; ?>
}

<br><br>

<?php

$pseudo = filter_input(INPUT_POST, "pseudo");

?>


<!-- QUESTION 2

Créer un formulaire permettant à l’utilisateur de saisir le pseudonyme à rechercher afin de faciliter la saisie pour l’utilisateur. -->

<form action="pseudo.php" method="POST">

    <label for="pseudo">Pseudo : </label>
    <input type="text" name="pseudo" size="24" value="<?php $pseudo ?>">
    <input type="submit" name="envoie" value="Qui es-tu ?">

</form>

<br><br>


<!--  Mettre ensuite directement le formulaire dans le script PHP créé précédemment afin de pouvoir effectuer facilement plusieurs recherches. -->