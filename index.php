<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <title>Users app</title>
          <style media="screen">
               <?php include "index.css"; ?>
          </style>
     </head>

     <body>
          <h1>LOG IN</h1>

          <form class="" action="index.php" method="post">
               <label for="user">User</label>
               <input type="text" name="user" value="user1" placeholder="User">

               <label for="pass">Password</label>
               <input type="text" name="password" value="pass1" placeholder="Password">

               <input type="submit" name="submit" value="Log in">

               <div class="">
                    Nou a la pàgina web? <a href="signup.php">Registra't</a>
               </div>
          </form>

               <br>

          <?php
               # COMPROVAR QUE EL USUARIO EXISTE EN LA BASE DE DATOS

               $conn = new mysqli("localhost", "root", "", "users");

               if (isset($_POST["submit"])
               && !empty($_POST["user"])
               && !empty($_POST["password"])) {

                    $user = $_POST["user"];
                    $pass = $_POST["password"];

                    $sql = "SELECT `user`, `password`
                    FROM `users`
                    WHERE `user` = '". $user . "'
                    AND `password` = '" . $pass . "'";

                    $result = $conn->query($sql);

                    if($result->num_rows >= 1) {

                         //include "getuser.php";

                         header("Location: loged.php");

                    } else {

                         echo "Error: No s'ha trobat aquest usuari amb aquesta
                         contrasenya";
                    }
               }

               $sql2 = "SELECT * FROM `users`";

               $result2 = $conn->query($sql2);

                    echo "Usuaris i contrasenyes a la base de dades:";
                    echo "<br><br>";

               while ($row = $result2->fetch_assoc()) {

                    echo $row['user'] . " " . $row['password'] . "<br>";
               }

               $conn->close();
          ?>
     </body>
</html>
