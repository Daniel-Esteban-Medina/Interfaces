<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <header class="site-footer">
   <h1>Este es mi footer.php </h1>
   </header>
   <?php 
      $args = array(
         'theme_location' => 'menu-principal2',
         'container' => 'nav',
         'container_class' => 'menu-principal2'
      );
      wp_nav_menu($args);
   ?>
</body>
</html>