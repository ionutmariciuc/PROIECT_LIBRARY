<?php
include "connect.php";
session_start();

?>
<!DOCTYPE html>
<html>

<head>
	<title>Books</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="wrapper">
		<header>
			<div class="logo">
				<img src="images/9.png">
				<h1 style="color: white;">BIBLIOTECA</h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">ACASA</a></li>
					<li><a href="carti.php">CARTI</a></li>
					<li><a href="admin_login.php">ADMIN-LOGIN</a></li>
					<li><a href="imprumuturi_info.php">STATUS-IMPRUMUTURI</a></li>
					<li><a href="logout.php">LOGOUT</a></li>

			</nav>
		</header>
		<section>

			<div class="srch">
				<form class="navbar-form" method="post" name="form1">
					<input class="form-control" type="text" name="cid" placeholder="Introdu ID carte" required="">
					<button type="submit" name="submit1">IMPRUMUTA</button>

			</div>




			<h2>Lista Carti</h2>
			<?php

			$res = mysqli_query($db, "SELECT * FROM `carti` ORDER BY `carti`.`cid` ASC;");

			echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
			//Table header
			echo "<th>";
			echo "ID";
			echo "</th>";
			echo "<th>";
			echo "Nume Carte";
			echo "</th>";
			echo "<th>";
			echo "Nume autor";
			echo "</th>";
			echo "<th>";
			echo "Stoc";
			echo "</th>";

			echo "</tr>";

			while ($row = mysqli_fetch_assoc($res)) {
				echo "<tr>";
				echo "<td>";
				echo $row['cid'];
				echo "</td>";
				echo "<td>";
				echo $row['nume'];
				echo "</td>";
				echo "<td>";
				echo $row['autor'];
				echo "</td>";
				echo "<td>";
				echo $row['stoc'];
				echo "</td>";


				echo "</tr>";
			}

			echo "</table>";

			if (isset($_POST['submit1'])) {
				if (isset($_SESSION['login_user'])) {
					mysqli_query($db, "INSERT INTO  imprumuturi_carti Values('','$_SESSION[login_user]','$_POST[cid]');");
			?>
					<script type="text/javascript">
						alert("CARTE IMPRUMUTATA")
					</script>
				<?php
				} else {
				?>
					<script type="text/javascript">
						alert("TREBUIE SA FII LOGAT SA IMPRUMUTI!")
					</script>
			<?php
				}
			}
			?>
		</section>>

		<footer>
			
		</footer>
	</body>

</html>