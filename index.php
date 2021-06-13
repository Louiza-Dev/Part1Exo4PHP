<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Part1 - Exo5</title>
  </head>
  <body>
    <h1>Part1 - Exo5</h1>
    <?php
      $age = rand(1, 90);
      $genre = rand(1, 2);
      echo 'Age choisi: ', $age, '<br>';
      echo 'Genre choisi: ', $genre, '<br>';

      switch ($genre) {
          case 1:
              echo("Vous etes feminin,");
              if($age >= 18)
                echo ' et vous êtes majeur!';
              else
                echo ' et vous êtes mineur!';
              break;
          case 2:
              echo("Vous etes masculin,");
              if($age >= 18)
                echo ' et vous êtes majeur!';
              else
                echo ' et vous êtes mineur!';
              break;
      }
    ?>
  </body>
</html>
