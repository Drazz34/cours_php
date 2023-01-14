<?php

include "Voiture.php";

$voiture = new Voiture;

$voiture->setNbPorte(2);

echo $voiture->getNbPorte();