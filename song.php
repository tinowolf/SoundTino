<!DOCTYPE HTML>
<html>
	<head>
		<title>Songs</title>
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
					<?php require 'connect.php';
					$id = $_GET['id'];
					$sql = $conn->prepare("SELECT Name FROM Songs WHERE ID = :id");
					$sql->bindParam(':id', $id);
				  $sql->execute();
				  $z = $sql->fetch(PDO::FETCH_ASSOC);
				    echo "<div class='title'>".$z['Name']."</div>";
						?>
				 <!-- <div class="title">Song</div> titolo della canzone -->
					<div class="container">

						<?php session_start();
						require 'connect.php';
						echo "<div class='wrapper style3' id='song'> <table class='container'>";
						include 'wave2.php';
						echo "</table> ";
						$sqll = $conn->query("SELECT Description FROM Songs WHERE ID = '$id'");
						$x = $sqll->fetch(PDO::FETCH_ASSOC);
						echo "<p style = text-align:center>".$x['Description']."</p>";
						echo "</div>";
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
