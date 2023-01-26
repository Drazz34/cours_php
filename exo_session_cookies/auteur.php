<?php

include_once "commun.inc.php";

// Récupérer l'identifiant de l'auteur à partir de l'URL
$auteur_id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

// Vérifier que l'identifiant de l'auteur est valide
if (is_int($auteur_id) && array_key_exists($auteur_id, $auteurs))
 { 
    // Récupérer le nom de l'auteur à partir de l'identifiant
    $auteur = $auteurs[$auteur_id];
    
    // Mémoriser le timestamp UNIX de dernière visite de l’auteur
    $_SESSION["visites"][$auteur_id] = time();

    // Trier le tableau des auteurs visités en ordre décroissant
    arsort($_SESSION["visites"]);

    // Conserver uniquement les trois premiers éléments du tableau des auteurs visités
    $_SESSION["visites"] = array_slice($_SESSION["visites"], 0, 3, TRUE);
}

// print_r($_SESSION["visites"]);