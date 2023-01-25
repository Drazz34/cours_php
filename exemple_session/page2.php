<?php 
include('session.php');
?>
<!DOCTYPE html>
    <html>  
  <head> 
    <meta charset="utf-8" /> 
    <title>Page 2</title>
  </head> 
  <body> 
    <div> 
    <b>Page 2 - <?php echo $actuel; ?></b><br /> 
    <?php echo $message; ?><br /> 
    <!-- lien vers les autres pages --> 
    <p><a href="<?php echo 'page1.php'; ?>">Page 1</a></p> 
    <p><a href="<?php echo 'destroy.php'; ?>">Destruction de la session</a></p>
    </div> 
  </body> 
</html>