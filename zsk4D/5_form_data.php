<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularz - dane</title>
  </head>
  <body>
    <h4>Dane pobrane z formularza</h4>
    <?php
    // echo '<pre>';
    // print_r($_GET);
    // echo '</pre>';
    // isset()
      if (!empty($_GET['name']) && !empty(['surname']))
      {
      $name = $_GET['name'];
      switch ($_GET['color']) {
        case 'r':
        $color = "Czerwony";
        break;
        case 'g':
        $color = "Zielony";
        break;
        case 'b':
        $color = "Niebieski";
        break;
        default:
          // code...
          break;
      }
      echo <<L
      Imię: $name<br>
      Nazwisko: $_GET[surname]<br>
      Kolor: $color<br>
      L;
    }
    else{
      // echo "Wypełnij wszystkie dane";
      // header('location: ../5_form.php');
      <script>
      history.back();
      </script>
    }
    if (!empty($_GET['city']){
      echo <<M
      Miasto: $city
      M;
    }
    else {
      header('location: ../5_form.php');
    }
     ?>
  </body>
</html>
