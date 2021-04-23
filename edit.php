<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <title>Edit.php</title>
     </head>
     <body>
          <form action="newedit.php" method="post">
               <input type="text" name="user" value="<?php echo $user; ?>">
                    <br>
               <input type="text" name="password" value="<?php echo $pass; ?>">
                    <br>
               <input type="submit" name="submit" value="Cambiar dades">
          </form>

          <?php

          //include "getuser.php";

          $conn = mysqli_connect("localhost", "root", "", "users");

          if ($conn->connect_error) {

               die("Connection failed: " . $conn->connect_error);
          }

          $sql_update = "UPDATE `users`

               SET

               user     = '$user',
               password = '$password'

               WHERE id = $id";



          ?>
     </body>
</html>
