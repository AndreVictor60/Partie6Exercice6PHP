<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 6 Exercice 4</title>
  </head>
  <body>
    <a href='index.php?batiment=12&salle=101'>Localisation</a>
    <?php
      if (isset($_GET['batiment']) AND isset($_GET['salle']))
      {
        echo 'Elle se situe au batiment ' . $_GET['batiment'] . ' et a la salle ' . $_GET['salle'];
      }
     ?>
  </body>
</html>
