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
					<li><a href="student_login.php">STUDENT-LOGIN</a></li>
					<li><a href="inregistrare.php">INREGISTRARE</a></li>
					<li><a href="admin_login.php">ADMIN-LOGIN</a></li>
					<li><a href="imprumuturi_info.php">STATUS CARTI</a></li>

			</nav>
		</header>
		<section>
			<h2>CARTILE IMPRUMUTATE</h2>
			<?php

			$res = mysqli_query($db, "SELECT * FROM `imprumuturi_carti` ");

			echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
			//Table header
			echo "<th>";
			echo "Username";
			echo "</th>";

			echo "<th>";
			echo "ID CARTE";
			echo "</th>";;

			echo "</tr>";

			while ($row = mysqli_fetch_assoc($res)) {
				echo "<tr>";
				echo "<td>";
				echo $row['username'];
				echo "</td>";

				echo "<td>";
				echo $row['cid'];
				echo "</td>";


				echo "</tr>";
			}
			echo "</table>";

			?>

	</div>

	</section>
</body>

</html>