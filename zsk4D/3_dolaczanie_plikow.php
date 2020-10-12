<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Poczatek pliku</h1>
    <?php
    include './3_1.php';
    include_once './3_1.php';

    echo '<br>require:';
    require './3_1.php';
    require_once './3_1.php';
    ?>

    <h3>Koniec Pliku</h3>
  </body>
</html>
