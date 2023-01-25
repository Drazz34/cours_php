<?php
// Inclusion du fichier contenant les fonctions générales. 
include('Session.class.php');
$mySession = new Session();

// Initialisation des variables. 
$message = '';
// Traitement du formulaire. 
$formulaire_recu = filter_input(INPUT_POST, 'connexion');
if ($formulaire_recu == "Connexion") {
  // Récupérer les information saisies. 
  $identifiant = filter_input(INPUT_POST, 'identifiant');
  $mot_de_passe = filter_input(INPUT_POST, 'mot_de_passe');
  // Vérifier que l'utilisateur existe. 



  $_SESSION["id"] = $mySession->checkPassword($identifiant, $mot_de_passe);
  if ($_SESSION["id"])
  {
    echo "Bravo !!!";
  }



  
  // if ($mySession->utilisateur_existe($identifiant, $mot_de_passe)) {
  //    // L'utilisateur existe...
  //    // Ouvrir une session et enregistrer les données  de session.
  //    session_start();
  //    $_SESSION['date'] = date('\l\e d/m/Y à H:i:s');
  //    $_SESSION['identifiant'] = $identifiant;
    
  //    // Puis rediriger l'utilisateur vers la page d'accueil  
  //    header('location: accueil.php');
  //    exit;
  // } else {
  //   // L'utilisateur n'existe pas... 
  //   // Afficher un message et proposer de  
  //   // nouveau l'identification. 
  //   $message  = 'Identification incorrecte. ';
  //   $message .= 'Essayez de nouveau.';

  //   // Laisser le formulaire s'afficher de nouveau... 
  // }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Login</title>
</head>

<body>
  <form action="login.php" method="post">
    <table>
      <tr>
        <td style="text-align:right">Identifiant :</td>
        <td><input type="text" name="identifiant" value="" /></td>
      </tr>
      <tr>
        <td style="text-align:right">Mot de passe :</td>
        <td><input type="password" name="mot_de_passe" value="" /></td>
      </tr>
      <tr>
        <td></td>
        <td style="text-align:right"><input type="submit" name="connexion" value="Connexion" /></td>
      </tr>
    </table>
    <p><?php echo $message; ?></p>
  </form>

  <form action="signIn.php" method="POST">

    <label for="pseudo">Pseudo : </label>
    <input type="text" name="pseudo">
    <br>
    <label for="psw">Mot de passe : </label>
    <input type="password" name="psw">
    <br>
    <input type="submit" value="ok" name="ok">

  </form>

</body>

</html>