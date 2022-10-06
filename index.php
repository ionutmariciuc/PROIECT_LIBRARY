<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>
		BIBLIOTECA
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
	<div class="wrapper">
		<header>
			<div class="logo">
				<img src="images/9.png">

			</div>
			<?php

			if (isset($_SESSION['login_user'])) { ?>
				<nav class="topnav">
					<ul>
						<li><a href="index.php">ACASA</a></li>
						<li><a href="carti.php">CARTI</a></li>
						<li><a href="logout.php">LOGOUT</a></li>



					</ul>
				</nav>
			<?php
			} else if (isset($_SESSION['login_admin'])) { ?>
				<nav class="topnav">
					<ul>
						<li><a href="index.php">ACASA</a></li>
						<li><a href="carti.php">CARTI</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						<li><a href="inregistrare.php">INREGISTRARE</a></li>
						<li><a href="admin_login.php">ADMIN-LOGIN</a></li>
						<li><a href="inregistrare_admin.php">ADMIN-inregistrare</a></li>
						<li><a href="add_carte.php">ADAUGA-CARTE</a></li>



					</ul>
				</nav>
			<?php
			} else { ?>
				<nav class="topnav">
					<ul>


						<li><a href="index.php">ACASA</a></li>
						<li><a href="student_login.php">STUDENT-LOGIN</a></li>
						<li><a href="inregistrare.php">INREGISTRARE</a></li>
						<li><a href="inregistrare_admin.php">ADMIN-INREGISTRARE</a></li>
						<li><a href="admin_login.php">ADMIN-LOGIN</a></li>

					</ul>
				</nav>
			<?php
			}






			?>
			<div class="logo">
				<h1 style="color: white; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">BIBLIOTECA</h1>
			</div>


		</header>
		<section>
			<div class="sec_img">
				<br><br><br>
				<div class="box">
					<br><br><br><br>
					<h1 style="text-align: center; font-size: 35px;">BINE AI VENIT</h1><br><br>

				</div>
			</div>
		</section>
		<footer>

		</footer>
	</div>
</body>

</html>