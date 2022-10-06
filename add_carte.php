<?php
include "connect.php";
session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <title>Books</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">ACASA</a></li>
        <li><a href="carti.php">CARTI</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
        <li><a href="inregistrare.php">INREGISTRARE</a></li>
        <li><a href="admin_login.php">ADMIN-LOGIN</a></li>
        <li><a href="inregistrare_admin.php">ADMIN-inregistrare</a></li>
        <li><a href="add_carte.php">ADAUGA CARTE</a></li>

      </ul>
    </nav>
  </header>



  <div id="main">

    <div class="container" style="text-align: center;">
      <h2 style="color:black; font-family: Lucida Console; text-align: center"><b>Add New Books</b></h2>

      <form class="book" action="" method="post">


        <input type="text" name="nume" class="form-control" placeholder="Nume Carte" required=""><br>
        <input type="text" name="autor" class="form-control" placeholder="Nume Autor" required=""><br>
        <input type="text" name="stoc" class="form-control" placeholder="stoc" required=""><br>


        <button style="text-align: center;" class="btn btn-default" type="submit" name="submit">Adauga</button>
      </form>
    </div>
    <?php
    if (isset($_POST['submit'])) {
      if (isset($_SESSION['login_admin'])) {
        mysqli_query($db, "INSERT INTO carti VALUES ('', '$_POST[nume]', '$_POST[autor]', '$_POST[stoc]') ;");
    ?>
        <script type="text/javascript">
          alert("Book Added Successfully.");
        </script>

      <?php

      } else {
      ?>
        <script type="text/javascript">
          alert("You need to login first.");
        </script>
    <?php
      }
    }
    ?>
  </div>
</body>