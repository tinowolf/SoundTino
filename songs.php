<!DOCTYPE HTML>
<html>
	<head>
		<title>Songs - SoundTino</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>

	<body class="no-sidebar">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
  // Handler for .ready() called.
  $('html, body').animate({
      scrollTop: $('#main').offset().top
  }, 'slow');
});
    </script>

		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.php">SoundTino</a></h1>
								<p>The Best Place for Musicians</p>
							</div>

						<!-- Nav -->
							<?php include 'navbar.php'; ?>

					</div>
				</div>

			<!-- Main -->
				<div id="main" class="wrapper style2">
					<div class="title">Songs</div>
					<div class="container">

						<?php
						require 'connect.php';
						echo "<div class='wrapper style3' id='song'> <table class='container'>";
						foreach ($conn->query("SELECT Songs.ID, Songs.Name, user.username FROM user RIGHT JOIN Songs ON Songs.ID_U = user.id") as $row){
							$z=$row['Name'];
							echo "<tr><td style='padding: 10px' id='".$z."'>";   // perchè prende solo il primo valore dopo lo spazio?
							echo "<a href='song.php?id=".$row['ID']."'>".$row['Name']."</a>";
							echo "</td>	<td style='padding: 10px'>";
							echo "<a href='allSongs.php?u=".$row['username']."'>".$row['username']."</a>";
							echo "</td> </tr>";
						}
						echo "</table> </div>";
		 			?>

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
