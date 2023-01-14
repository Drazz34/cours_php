<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

// exercice 1

$notes = array(
    "maths" => [15, 17, 12],
    "français" => [14, 11],
    "sport" => [16, 18, 10],
    "anglais" => [13, 19]
);

// var_dump($notes);

// fonction qui affiche le contenu du tableau dans un texte

// function affiche($notes) {
//     echo "Les notes de Paul sont : <br>";
//     foreach ($notes as $matiere => $note) {
//         $note_str = implode(", ", $note);
//         echo $note_str . " en " . $matiere . ".<br>";

//         // for ($i = 0; $i <= count($notes[i])-1; $i++) { 
//         //     if ($i == count($notes)-1)
//         // "et" + $matiere        // }
//     }
// }

function affiche($notes)
{
    echo "Les notes de Paul sont : <br>";

    foreach ($notes as $matiere => $note) {   // boucle pour les clés
        foreach ($note as $key => $value) {   // boucle pour les valeurs
            if ($key == 0) {
                echo $value;
            } elseif ($key > 0 && $key < count($note) - 1) {
                echo ", $value";
            } elseif ($key == count($note) - 1) {
                echo " et $value";
            }
        }
        echo " en $matiere.<br>";
    }
}

affiche($notes);

// var_dump(count($notes["français"]));

// replace derniere virgule par et

// fonction qui pour chaque matière calcule la moyenne

function moyenne($notes)
{
    echo "<br>";
    $moyennes = array();
    foreach ($notes as $matiere => $grades) // Si on ne met pas la key comme ici, c'est la valeur qui est prise en compte
    {
        $moyenne = array_sum($grades) / count($grades);
        $moyenne = round($moyenne, 1);
        $moyennes[$matiere] = $moyenne;

        // en une seule ligne : $moyennes[$matiere] = round(array_sum($grades) / count($grades), 1);

    }
    return $moyennes;
}

print_r(moyenne($notes));

$moyennes = moyenne($notes);
 
foreach ($moyennes as $matiere => $moyenne) {
  echo "La moyenne en $matiere est $moyenne.<br>";
}

// fonction qui calcule la moyenne de toutes les notes de l'année

// function moyenneTotale()
// {
//     foreach ($notes as $note => $value) {
        
//     }
// }

function moyenneTotale($notes) {
    $total_note = 0;
    $total_nbre_note = 0;
    foreach ($notes as $grades) {
      $total_note += array_sum($grades);
      $total_nbre_note += count($grades);
    }
    return $total_note / $total_nbre_note;
  }

  echo "<br>La moyenne totale de Paul cette année est : " . moyenneTotale($notes) . "/20<br><br>";

  // exercice 2

$json ='{"a" : "abeille", "b" : "banane", "c" : "chocolat", "d" : "dauphin", "e" : "ecole"}';
$array = json_decode($json, true);
print_r($array);

echo "<br>";

function is_existe(array $arr, string $valeur)
{
    return in_array($valeur, $arr);
};

var_dump(is_existe($array, "dauphin"));
var_dump(is_existe($array, "requin"));

echo "<br>";

?>

<table border style="border-collapse: collapse;">

<?php
foreach ($array as $lettre => $mot) :
?>
    <tr>

        <td><?= $lettre; ?></td>
        <td><?= strtolower($mot); ?></td>
        <td><?= strtoupper($mot); ?></td>
        <td><?= ucfirst($mot); ?></td>
        <td><?= strlen($mot); ?></td>

    </tr>
<?php endforeach ?>

</table>

<?php

echo "<br>";

// exercice 3

//fonction qui transforme une URL en un tableau associatif

function foo1($url)
{
    $replace = str_replace(array("https://", "http://", "/"), " ", $url);
    $array1 = explode(" ", $replace);
    array_shift($array1);
    array_pop($array1);
    return $array1;
}

$url = "https://darkcity.fr/blog/2015/08/16/bac-a-sable-php/";

$array1 = foo1($url);

print_r($array1);

echo "<br><br>";


// fonction qui précise si chaque élément du tableau contient un nombre ou non


function foo2(array $array) : array
{
    $array2 = array();

    foreach ($array as $value) {
        if (is_numeric($value))
        {
            $array2[$value] = "int<br>";
        }
        else
        {
            $array2[$value] = "string<br>";
        }
    }

    return $array2;
}

$array2 = foo2($array1);

print_r($array2);

echo "<br><br>";

// fonction qui classe les éléments selon s'ils sont des nombres ou non.

function foo3(array $array) : array
{
    $array3 = array();

    foreach ($array as $key => $value) {
        if (is_numeric($key))
        {
            $array3['int'][] = $key;
        }
        else
        {
            $array3['string'][] = $key;
        }
    }
    
    return $array3;
}

$array3 = foo3($array2);

print_r($array3);