<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>formularz</title>
    </head>
    <body>
        <h3>Dane użytkownika</h3>
        <form method="get">
            <input type="text" name="surname"><br><br>
            <input type="submit" value="Zatwierdź"><hr>
        </form>
        <?php
            //isset()
            if (!empty($_GET['surname']))
            {
                $surname = $_GET['surname'];
                if(strlen(trim($_GET['surname'])))
                {
                    echo <<<TEXT
                    Nazwisko: $surname<br>
                    TEXT;
                    
                }
                else
                {
                    echo "Nie wprowadzaj tylko białych znaków";
                }
            }
            print_r($_GET);
            ?>
    </body>
</html>