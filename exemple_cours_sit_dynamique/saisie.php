 <?php

// $nom = $_GET["nom"];
// $prenom= $_GET["prenom"];

// var_dump($_GET["data"]);
// var_dump($_GET["chaine"]);


// Initialisation du tableau contenant les données.
// $donnees=array('nom' => 'Olivier & Xavier','David + Thomas');
// Construction de la chaîne de la requête :
// - sans préfixe.
// echo http_build_query($donnees).'<br />';
// - avec préfixe.
// echo http_build_query($donnees,'v_').'<br />';

// récuperer données formulaire

// if (isset($_POST['nom1']) && !empty($_POST)) {
//     echo $_POST['nom1'];
// } else {
//     echo "Nom inconnu";
// }

// var_dump($_POST["nom1"]);

// if (isset($_POST['nom2']) && !empty($_POST)) {
//     echo $_POST['nom2'];
// } else {
//     echo "Nom inconnu";
// }

// var_dump($_POST["nom2"]);

var_dump($_POST);



foreach ($_POST as $key => $value) {
    if(is_array($value))  // ou if(gettype($value) == "array")
    {
        foreach ($value as $key1 => $value1) {
            echo "$key1 = $value1 <br>";
        }
    } else 
    {
        echo "$key = $value <br>";
    }
}
