<?php 
include('session.php');
?>

<!DOCTYPE html>  
<html>  
  <head> 
    <meta charset="utf-8" /> 
   <title>Page 1</title>
  </head> 
  <body> 
    <div> 
    <b>Page 1 - <?php echo $actuel; ?></b><br /> 
    <?php echo $message; ?><br /> 
    <!-- lien vers les autres pages  
         Utiliser notre fonction générique url() pour être  
         certain que l’identifiant de session est transmis  
         quelles que soient les conditions  --> 
    <p><a href="<?php echo 'page2.php'; ?>">Page 2</a></p>
    </div> 
  </body> 
</html>