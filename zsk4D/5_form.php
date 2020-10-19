<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz - dane</title>
  </head>
  <body>
    <h4>Formularz</h4>
    <form action="./_form/5_form_data.php" method="get">
      <input type="text" name="name" placeholder="Imię"><br><br>
      <input type="text" name="surname" placeholder="Nazwisko"><br><br>
      <input type="radio" name="color" value="r">Czerwony
      <input type="radio" name="color" value="g">Zielony
      <input type="radio" name="color" value="b" checked>Niebieski<br><br>
      <input type="submit" value="Zatwierdź dane">
      <input type="text" name="city" placeholder="Miasto">
    </form>
  </body>
</html>
