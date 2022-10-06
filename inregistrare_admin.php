<?php
include "connect.php";

?>

<!DOCTYPE html>
<html>

<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    section {
      margin-top: -20px;
    }
  </style>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">ACASA</a></li>
        <li><a href="student_login.php">STUDENT-LOGIN</a></li>
        <li><a href="admin_login.php">ADMIN-LOGIN</a></li>
        <li><a href="inregistrare.php">INREGISTRARE</a></li>
        <li><a href="inregistrare_admin.php">ADMIN-inregistrare</a></li>



      </ul>
    </nav>
  </header>

  <section>
    <div class="reg_img">

      <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> &nbsp &nbsp &nbsp BIBLIOTECA</h1>
        <h1 style="text-align: center; font-size: 25px;">INREGISTRARE ADMIN</h1>

        <form name="Registration" action="" method="post">

          <div class="login">

            <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
            <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>




            <input class="btn btn-default" type="submit" name="submit" value="register" style="color: black; width: 70px; height: 30px">
          </div>
        </form>

      </div>
    </div>
  </section>
  

  <?php

  if (isset($_POST['submit'])) {
    $count = 0;
    $sql = "SELECT username from `admin`";
    $res = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_assoc($res)) {
      if ($row['username'] == $_POST['username']) {
        $count = $count + 1;
      }
    }
    if ($count == 0) {
      $password = md5($_POST['password']);
      mysqli_query($db, "INSERT INTO `admin` VALUES( '', '$_POST[username]', '$password');");
  ?>
      <script type="text/javascript">
        alert("Registration successful");
      </script>
    <?php
    } else {

    ?>
      <script type="text/javascript">
        alert("The username already exist.");
      </script>
  <?php

    }
  }

  ?>

</body>

</html>