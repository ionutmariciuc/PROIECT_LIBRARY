<?php

include("connect.php");
session_start();
?>


<!DOCTYPE html>
<html>

<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
  <header style="height: 90px;">

    <div class="logo">
      <h1 style="color: white; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">BIBLIOTECA</h1>
    </div>

    <nav>
      <ul>
        <li><a href="index.php">ACASA</a></li>
        <li><a href="carti.php">CARTI</a></li>
        <li><a href="student_login.php">STUDENT-LOGIN</a></li>
        <li><a href="inregistrare.php">INREGISTRARE</a></li>
        <li><a href="admin_login.php">ADMIN-LOGIN</a></li>

      </ul>
    </nav>
  </header>
  <section>
    <div class="log_img">
      <br>
      <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">BIBLIOTECA</h1>
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">LOGIN </h1>

        <form name="login" action="" method="post">

          <div class="login">
            <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
            <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
            <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">
          </div>

          <p style="color: white; padding-left: 15px;">
            <br><br>

            <a style="color: white;" href="inregistrare.PHP">inregistrare</a>
          </p>
        </form>
      </div>
    </div>
  </section>
  <?php
 
  if (isset($_POST['submit'])) {
    $password = md5($_POST['password']);
    $var = 0;
    $res = mysqli_query($db, "SELECT *FROM student WHERE username='$_POST[username]'&&password='$password'");
    $var = mysqli_num_rows($res);
    if ($var == 0) {

  ?>
      <div class="alert alert-warning">
        <strong>COMBINATIE GRESITA</strong>
      </div <?php
          } else {
            $_SESSION['login_user'] = $_POST['username'];
            header("Location:index.php");
          }
        }
            ?> 
          <footer>

</footer>  
          </body>

</html>