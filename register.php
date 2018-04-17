<?php
session_start();
  require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
  try {
      $sql = $conn->prepare('INSERT INTO user (username, email, password) VALUES (:username, :email, :password)');
      $sql->bindParam(':username', $username);
      $sql->bindParam(':email', $email);
      $sql->bindParam(':password', $password);

      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
      $sql->execute();

      $smsg = "User Registartion Successfull";
      $conn = null;
      header('Location: private.php');

      $_SESSION['username'] = $username;
  }
  catch (PDOException $e) {
    $fmsg = "User Registartion Failed";
	}
}
    ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Register</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

      <!--  script per lo scorrimento automatico della pagina  -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
      $(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#main').offset().top
    }, 1000);  //slow può essere sostituito in millisecondi
  });
      </script>
<!--  script per lo scorrimento automatico della pagina  -->

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">SoundTino</a></h1>
								<p>The Best Place for Musicians</p>
							</div>

						<!-- Nav -->
							<?php include 'navbar.php'; ?>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Login</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Entra in questo bellissimo posto<br class="mobile-hide" /></h2>
										<p>Registrati nel sito</p>
									</header>
									<form class="container"  method="post">
										Username<input type="text" name="username" required>
										Email<input type="text" name="email" required>
                    Password <input type="password" name="password"required> <br>
										<input type="submit" name="" value="Register"> <input type="button" name="" onclick="javascript:location.href='login.php'" value="Login">
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
