<!DOCTYPE HTML>
<html>
	<head>
		<title>SoundTino</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.php">SoundTino</a></h1>
								<p>The best place for musicians</p>
							</div>

						<!-- Nav -->
							<?php include 'navbar.php'; ?>

					</div>
				</div>

			<!-- Intro -->
				<div id="intro-wrapper" class="wrapper style1">
					<div class="title">Last Song</div>
					<section id="intro" class="container">
							<?php require 'connect.php';
							echo "<p class='style1'>Uploaded by: <a href='songs.php'>";
							foreach($stmt = $conn->query("SELECT username FROM user LEFT JOIN Songs ON Songs.ID_U = user.id ORDER BY Songs.ID DESC LIMIT 1") as $a){
								  echo $a['username'];
								}
								echo "</a> </p>";
								?>
							<?php include 'wave.php'; ?>

						<p class="style3">It's <strong>responsive</strong>, built on <strong>HTML5</strong> and <strong>CSS3</strong>, and released for
						free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0 license</a>, so use it for any of
						your personal or commercial projects &ndash; just be sure to credit us!</p>
						<ul class="actions">
							<li><a href="login.php" class="button style3 big">Entra</a></li>
						</ul>
					</section>
				</div>
			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">The Creator</div>
					<div id="main" class="container">

						<!-- Image -->
							<a href="#" class="image featured">
								<img src="images/pic01.jpg" alt="" />
							</a>

						<!-- Features -->
							<section id="features">
								<header class="style1">
									<h2>Perchè registrarsi?</h2>
									<p>motivare il cliente</p>
								</header>
								<div class="feature-list">
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-comment">Discussioni tra musicisti</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-refresh">Condividere idee</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-music">Nuove idee musicali</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-cog">Tempus sed pretium orci</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
								</div>
								<ul class="actions actions-centered">
									<li><a href="register.php" class="button style1 big">Inizia</a></li>
									<li><a href="right-sidebar.php" class="button style2 big">Info</a></li>
								</ul>
							</section>

					</div>
				</div>

			<!-- Highlights -->
				<div class="wrapper style3">
					<div class="title">Some Users</div>
					<div id="highlights" class="container">
						<div class="row 150%">
							<?php
							include 'connect.php';
							foreach ($stmt = $conn->query("SELECT Img_path, username, description FROM user ORDER BY RAND() DESC LIMIT 3")as $a) {
								echo "<div class='4u 12u(mobile)'> <section class='highlight'>";
								echo "<a href=allSongs.php?u=".$a['username']." class='image featured'><img src='".$a['Img_path']."' alt='user image' /></a>";
								echo "<h3><a href=allSongs.php?u=".$a['username'].">".$a['username']."</a></h3>";
								echo "<p>".$a['description']."</p>";
								echo "<ul class='actions'><li><a href=allSongs.php?u=".$a['username']." class='button style1'>Scopri Utente</a></li></ul>";
								echo "</section> </div>";
							}
							 ?>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<?php include 'footer.php'; ?>

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
