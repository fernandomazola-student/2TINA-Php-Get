
<?php

if(isset($_GET['enviar'])){
  $name = $_GET['name'];
  $nac1 = $_GET['nac1'];
  $nac2 = $_GET['nac2'];

  $resultado = ($nac1 + $nac2) / 2;

  echo "<div class='alert alert-success' role='alert'><strong>$name a sua média é: </strong>";
  echo $resultado;
  echo "</div>";



}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>


    <form class="col-md-6" action="desafio10.php" method="get">
      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label for="nac1">Nac 1</label>
        <input type="text" name="nac1" class="form-control">
      </div>

      <div class="form-group">
        <label for="name">Nac 2</label>
        <input type="text" name="nac2" class="form-control">
      </div>

      <input type="submit" name="enviar" value="Calcular média" class="btn btn-primary">
    </form>
  </body>
</html>
