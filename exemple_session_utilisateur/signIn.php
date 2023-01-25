<?php

include('Session.class.php');
include('helper.php');

$pseudo = trim(filter_input(INPUT_POST, "pseudo"));
$psw = filter_input(INPUT_POST, "psw");

if (is_existe($pseudo) && is_existe($psw))
{
    $mySession = new session();
    echo $mySession->register($pseudo, $psw) ? "Opération réussie." : "Erreur.";
} 
else 
{
    echo "Vous n'avez pas rempli les champs pseudo et / ou password.";
}