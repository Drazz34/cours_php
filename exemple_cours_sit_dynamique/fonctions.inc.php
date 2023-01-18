<?php

// Fonction permettant d'afcher des données dans un formulaire.
// Encoder tous les caractères HTML spéciaux.
function vers_formulaire($valeur) {
    return htmlentities($valeur,ENT_QUOTES,'UTF-8');
    }
    // Fonction permettant d'afcher des données dans une page.
    // Encoder tous les caractères HTML spéciaux.
    // Transformer les sauts de ligne en <br />.
    function vers_page($valeur) {
    return nl2br(htmlentities($valeur,ENT_QUOTES,'UTF-8'));
    }