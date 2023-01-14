<!-- <var>5<sup>2</sup></var> -->

<?php

// PARTIE 1

echo "<ul>";
for ($i = 1; $i <= 30; $i++) {
    $carre = $i * $i;
    echo "<li>$i<sup>2</sup> = $carre</li>";
}
echo "</ul>";

// fonction produisant la même chose pour un nombre n

echo "<br>";

function carre($n)
{
    $resultat = $n * $n;
    return "$n<sup>2</sup> = $resultat";
}

for ($i = 1; $i <= 30; $i++) {
    echo carre($i) . '<br>';
}

echo "<br><br>";

// PARTIE 2

// Créer une table de multiplication

echo '<table style="border-collapse: collapse;">';

for ($i = 1; $i <= 9; $i++) { // création des lignes
    echo '<tr>';
    for ($j = 1; $j <= 9; $j++) { // création des cases de la ligne
        // couleur des lignes
        if ($i == 1 || $j == 1) {
            echo "<td style='width: 50px; height: 50px; text-align: center; border: 1px solid black; background-color: #D48030; font-weight: bold;'>";
        } else {
            if ($i % 2 == 0) {
                echo "<td style='width: 50px; height: 50px; text-align: center; border: 1px solid black; background-color: #EBD9C8;'>";
            } else {
                echo "<td style='width: 50px; height: 50px; text-align: center; border: 1px solid black; background-color: #BEA58E;'>";
            }
        }
        if ($i == 1 && $j == 1) {
            // la première case est vide
            echo "";
        } elseif ($i == $j) {
            // résultat des carrés en gras
            echo "<strong>" . $i * $j . "</strong>";
        } else {
            echo $i * $j;
        }

        echo '</td>';
    }
    echo '</tr>';
}

echo '</table>';
