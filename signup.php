<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <title>SIGN UP</title>
     </head>
     <body>
          <h1>SIGN UP FORM - REGISTRA'T</h1>

          <form class="" action="signup.php" method="post">
               <label for="user">User</label>
               <input type="text" name="user" value="user1" placeholder="User">

               <label for="pass">Password</label>
               <input type="password" name="pass" value="pass1" placeholder="Password">

               <input type="submit" name="submit" value="Sign in">
                    <br><br>
               <div class="">
                    <a href="index.php">Tornar a la pàgina principal</a>
               </div>
                    <br>
          </form>

          <?php

          $conn = new mysqli("localhost", "root", "", "users");

          $sql = "SELECT * FROM `users`";

          $result = $conn->query($sql);

          if (isset($_POST["submit"])
          && !empty($_POST["user"])
          && !empty($_POST["pass"])) {

               $user = $_POST["user"];
               $pass = $_POST["pass"];

               if (isset($user) && isset($pass)) {

                    $sql2 = "INSERT INTO `users` (user, password)
                    VALUES ('$user', '$pass')";

                    $result2 = $conn->query($sql2);

                    session_start();

                    $_SESSION["user"] = $user;
                    $_SESSION["pass"] = $pass;

                    header("Location: loged.php");
               }

          }

          if ($conn->connect_error) {

               die("Connection failed: " . $conn->connect_error);
          }

          $conn->close();

          ?>
     </body>
</html>
