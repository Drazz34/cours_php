<!-- PARTIE 1 -->

<?php

echo "PARTIE 1<br><br>";

// fonction qui additionne

function somme(int $a, int $b)
{
    echo $a + $b;
}

somme(12, 8);

// fonction indiquant la date d'aujourd'hui

// function dateAujourdHui($maDate) {
//     echo "<br>Aujourd'hui, nous sommes le <b>$maDate</b>.<br>";
// }

// dateAujourdHui("mardi 3 janvier 2023");

function maDate()
{
    $laDate = date("d.m.Y");
    echo "<br>Aujourd'hui, nous sommes le <b>$laDate</b>.<br>";
}

maDate();

// fonction indiquant le prix TTC

function prixTTC(int $prixHT, int $taux = 20)
{
    $prixTTC = $prixHT + ($prixHT * $taux / 100);
    echo "Le prix TTC est de : $prixTTC €.";
}

prixTTC(100, 10);

// fonction indiquant votre âge

function monAge($dateNaissance)
{
    $age = date_create($dateNaissance)->diff(date_create('today'))->y;
    echo "<br>Mon age : " . $age . " ans.<br>";
}

$dateNaissance = '1984-09-06';
monAge($dateNaissance);

// fonction indiquant le nombre de minutes avant la fin du cours

function tempsRestant()
{
    date_default_timezone_set('Europe/Paris');
    $maintenant = new DateTime();
    $finCours = new DateTime('17:00:00');
    $interval = $maintenant->diff($finCours);

    $minutes = $interval->h * 60 + $interval->i;

    echo "Il reste " . $minutes .  " minutes avant la fin du cours.";
}

tempsRestant();

// fonction indiquant le nombre de jours restants avant le week-end

function jourAvantWeekend()
{
    $aujourdhui = new DateTime();
    $weekend = new DateTime('next saturday');
    $interval = $aujourdhui->diff($weekend);

    echo "<br>Il reste " . $interval->format("%a jours avant le week-end.<br>");
}

jourAvantWeekend();

?>

<!-- PARTIE 2 -->

<?php

echo "<br>PARTIE 2<br><br>";

// fonction qui supprime les espaces d'une string

function supprEspace($phrase)
{
    return str_replace(" ", "", $phrase);
}

$phrase = "C'est ma phrase exemple pour supprimer    les espaces.";
echo supprEspace($phrase);

// fonction qui donne le signe astrologique d'une personne

function getZodiacSign($birthday)
{
    $date = new DateTime($birthday);
    $month = (int) $date->format('m');
    $day = (int) $date->format('d');

    $signe = "<br>Votre signe du zodiac est : ";

    if ($month == 3 && $day >= 21 || $month == 4 && $day <= 19) {
        return $signe . 'Bélier.';
    } elseif ($month == 4 && $day >= 20 || $month == 5 && $day <= 20) {
        return $signe . 'Taureau.';
    } elseif ($month == 5 && $day >= 21 || $month == 6 && $day <= 20) {
        return $signe . 'Gémeaux.';
    } elseif ($month == 6 && $day >= 21 || $month == 7 && $day <= 22) {
        return $signe . 'Cancer.';
    } elseif ($month == 7 && $day >= 23 || $month == 8 && $day <= 22) {
        return $signe . 'Lion.';
    } elseif ($month == 8 && $day >= 23 || $month == 9 && $day <= 22) {
        return $signe . 'Vierge.';
    } elseif ($month == 9 && $day >= 23 || $month == 10 && $day <= 21) {
        return $signe . 'Balance.';
    } elseif ($month == 10 && $day >= 22 || $month == 11 && $day <= 21) {
        return $signe . 'Scorpion.';
    } elseif ($month == 11 && $day >= 22 || $month == 12 && $day <= 19) {
        return $signe . 'Sagittaire.';
    } elseif ($month == 12 && $day >= 20 || $month == 1 && $day <= 18) {
        return $signe . 'Capricorne.';
    } elseif ($month == 1 && $day >= 19 || $month == 2 && $day <= 20) {
        return $signe . 'Verseau.';
    } elseif ($month == 2 && $day >= 21 || $month == 3 && $day <=20) {
        return $signe . 'Poisson.';
    }
}

$birthday = '1984-09-06';
echo getZodiacSign($birthday);

// fonction qui donne le plus grand nombre entre deux expressions numériques

function plusGrand (int $nombre1, int $nombre2) {
    if ($nombre1 == $nombre2) {
        echo "<br>Aucun des deux nombres n'est supérieur à l'autre, ils sont égaux.";
    } elseif ($nombre1 > $nombre2) {
        echo "<br>Le plus grand nombre est : " . $nombre1 . ".";
    } else {
        echo "<br>Le plus grand nombre est : " . $nombre2 . ".";
    }
}

$nombre1 = 17;
$nombre2 = 24;
plusGrand($nombre1, $nombre2);

// fonction qui retourne vrai si le nombre est pair, faux si impair.

function nombrePair (int $nombre) : string 
{
    $phrase = "Votre nombre est pair : ";
    if ($nombre %2 == 0) {
        return "<br>" . $phrase . "Vrai.";
    } else {
        return "<br>" . $phrase . "Faux.";
    }
}

$nombre = 24;
echo nombrePair($nombre);

// 3 façons d'afficher les résultats : echo, return et print_r();

?>