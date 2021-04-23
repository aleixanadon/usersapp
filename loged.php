<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <title></title>
     </head>
     <body>
          <a href="edit.php">Editar compte</a>

          <?php
          session_start();

          echo "<br><br>";

          echo "Usuari " . $_SESSION["user"] . "<br>";
          echo "contrasenya " . $_SESSION["pass"] . "<br><br>";
          ?>

          <a href="die.php">Tancar la sessió</a>
     </body>
</html>
