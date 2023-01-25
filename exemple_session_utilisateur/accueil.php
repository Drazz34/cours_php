<?php 
// Ouvrir/réactiver la session. 
session_start(); 
// Tester si la session est nouvelle (ouverte par  
// l'appel session_start() ci-dessus) ou ancienne (ouverte 
// par un appel antérieur à session_start()). 
// Le mieux est de tester si une de nos données de session 
// est déjà enregistrée. 
if (! isset($_SESSION['identifiant'])) { 
  // Donnée "identifiant" pas encore enregistrée : 
  // => l'utilisateur n'est pas connecté ; 
  // => le rediriger vers la page de login. 
  header('location: login.php'); 
  exit; 
} else { 
  // Donnée "identifiant" déjà enregistrée : 
  // => l'utilisateur est connecté. 
  // => récupérer les données de session utilisées dans  
  //    le script. 
  $date = $_SESSION ['date'];
  $identifiant= $_SESSION['identifiant']; 
  // Récupérer l'identifiant de la session (pour l'exemple). 
$session = session_id(); 
  // Préparer un message. 
  $message = "Session : $session - $identifiant - $date"; 
} 
// Détermination de la date et de l'heure actuelle (pas celle 
// de l'ouverture de la session). 
$actuel = 'Nous sommes le '.date('d/m/Y')
          .' ; il est '.date('H:i:s'); 
?>

<!DOCTYPE html>  
<html>  
  <head> 
    <meta charset="utf-8" /> 
    <title>Page 1</title>
  </head> 
  <body> 
    <div> 
      <b>Accueil - <?php echo $actuel; ?></b><br /> 
      <?php echo $message; ?><br /> 
      <p><a href="<?php echo('deconnexion.php'); ?>">Déconnexion</a></p>
    </div> 
  </body> 
</html>