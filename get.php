<?php

print_r($_GET);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GET</title>
  </head>
  <body>
    <?php
      $id = 457;
      $button = "NÃO CLIQUE!!";
     ?>
    <a href="get.php?id=<?php echo $id;?>"><?php echo $button; ?></a>
  </body>
</html>
