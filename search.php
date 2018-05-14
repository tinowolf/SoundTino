<!DOCTYPE HTML>
<html>
	<head>
		<title>Cerca</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>

	<script>
	function showHint(str) {
	    if (str.length == 0) {
	        document.getElementById("txtHint").innerHTML = "";
	        return;
	    } else {
	        var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("txtHint").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET", "getHint.php?q=" + str, true);
	        xmlhttp.send();
	    }
	}
	</script>

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
					<div class="title">Search</div>
					<div class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Cerca<br class="mobile-hide" /></h2>
										<p>Cerca la canzone</p>
									</header>

									<form class="container" method="GET">
          					<input type="text" name="" value="" onkeyup="showHint(this.value)"><br>
										<p>Suggestions: <span id="txtHint"></span></p>
									</form>
								</article>

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
