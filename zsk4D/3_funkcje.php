<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <h4>Dane użytkownika</h4>
    <form method="post">
      <input type="text" name="name" placeholder="Imię" autofocus><br><br>
      <input type="text" name="surname" placeholder="Nazwisko"><br><br>
      <input type="submit" value="Wyślij dane">
    </form>
    <?php
    if (!empty($POST['name']) && !empty($_POST['surname']))
    {
      require_once './2_function.php'
      echo '<hr>', show($_POST['name'], $_POST['surname']);
    }

     ?>
   </body>
</html>
