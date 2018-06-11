<!DOCTYPE HTML>
<html>
	<head>
		<title>Private 3</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src='script.js' type='text/javascript'></script>

	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1>Area Personale</h1>
								<p>Gestisci il tuo account</p>
							</div>

						<!-- Nav -->
							<?php include 'navbar.php'; ?>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Il Progetto</div>
					<div id="main" class="container">
						<div class="row 150%">
							<div class="8u 12u(mobile)">

								<!-- Content -->
									<div id="content">
										<article class="box post">
											<header class="style1">
												<h2><?php
												if (session_status() == PHP_SESSION_NONE) {
													session_start();
													$user = $_SESSION['username'];
													require 'connect.php';
													echo "Benvenuto <b>".strtoupper($user)."</b><br />"; //strtoupper rende la tringa in maiuscolo
												}
												else {
											 		echo "Devi prima fare il login!";
													header("location: login.php");
												}
												?></h2>
											</header>
											<a href="#" class="image featured">
												<img src="images/pic01.jpg" alt="user image" />
											</a>
											<!-- upload immagine profilo -->

												<u>UPLOAD IMMAGINE PROFILO</u>
												<span class="form">
												<form action="upload.php" method="post" enctype="multipart/form-data">
													Select user-image to upload:
													<input type="file" name="fileToUpload" id="fileToUpload">
													<input type="submit" value="Upload Image" name="submit">
												</form>
												</span>
												-------------------

<br>

											<u>UPLOAD CANZONE</u>
												<span class="form">
												<form action="upload_song.php" method="post" enctype="multipart/form-data">
												    Select song to upload:
												    <input type="file" name="fileToUpload" id="fileToUpload"><br>
												    <input type="text" name="name" value="">nome della canzone <br>
												    <input type="text" name="descrizione" value="">descrizione della canzone
												    <input type="submit" value="Upload Song" name="submit">
												</form>
												</span>


											<p>
												<button type="button" name="button"><a href="index.php">Home</a></button>
												<button type="button" name="button"><a href="logout.php">logout</a> </button>
											</p>
											
											<p>
												<h1>My Songs</h1>
												<script>
												function myFunction(el) {
												    var myWindow = window.open("description.php?id='"+el.value+"'", "Description", "width=500,height=300");
												}
												</script>

												<?php
												echo "<table border 1px black>";
												foreach ($conn->query("SELECT Songs.ID, Songs.Name, user.username FROM user INNER JOIN Songs ON Songs.ID_U = user.id WHERE user.username = '".$user."'") as $row){
												  $z=$row['Name'];
												  echo "<tr><td style='padding: 10px' id='".$z."'>";
												  echo "<a href='song.php?id=".$row['ID']."'style=color:black>".$row['Name']."</a>";
												  echo "</td>	<td style='padding: 10px'>";
												  echo "<span class='delete' id='del_".$row['ID']."'style=color:red>Delete</span>";
												  echo "</td>	<td style='padding: 10px'>";
												  echo "<button onclick=myFunction(this) value=".$row['ID'].">Modifica Descrizione</button>";
												  echo "</td> </tr>";
												}
												echo "</table>";

												 ?></p>
										</article>
									</div>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Sidebar -->
									<?php include 'sidebar.php'; ?>
						 </div>
					 </div>
					</div>
				</div>

			<!-- Footer -->
				<?php include 'footer.php'; ?>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
