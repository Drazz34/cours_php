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

<!-- <a href="pseudo.php?pseudo=toto">Qui est Toto ?</a> -->

<br><br>

<!-- QUESTION 2

Créer un formulaire permettant à l’utilisateur de saisir le pseudonyme à rechercher afin de faciliter la saisie pour l’utilisateur. -->

<form action="pseudo.php" method="post">

    <label for="pseudo">Pseudo : </label>
    <input type="text" name="pseudo" size="24" value="<?php if(isset($_POST["pseudo"])){echo $_POST["pseudo"];}?>">
    <input type="submit" name="envoie" value="Qui es-tu ?"></button>

</form>

<br><br>

<!--  Mettre ensuite directement le formulaire dans le script PHP créé précédemment afin de pouvoir effectuer facilement plusieurs recherches. -->