<?php

include "poule.php";
include "chat.php";
include "chien.php";

abstract class Animal
{
    abstract public function parler();
    abstract public function mange();
    abstract public function marche();
}

function animal($saisie) {
    echo $saisie -> parler();
    echo "<br>";
    echo $saisie -> mange();
    echo "<br>";
    echo $saisie -> marche();
    echo "<br><br>";  
}

$poule = new Poule;
$chien = new Chien;
$chat = new Chat;

animal($poule);

// $poule = new Poule;
// echo $poule -> parler();
// echo $poule -> mange();
// echo $poule -> marche();

