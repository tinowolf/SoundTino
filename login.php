<?php
if (session_status() == PHP_SESSION_ACTIVE) {
  header('location: private.php');
}else {

  require_once('connect.php');
  if(isset($_POST) & !empty($_POST)){
    try {
        $sql = $conn->prepare("SELECT password FROM  user WHERE username=:username ");
        $sql->bindParam(':username', $username);

        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql->execute();
        $result=$sql->fetchAll();

      if(count($result)>0){
       if(password_verify($password ,$result[0]["password"])==true){
            session_start();
            $smsg = "Login in corso";
            sleep(1);
            header('location: private.php');
          }
        else {
          $fmsg = "User Login Failed";
        }
      }
      else {
        $fmsg = "User Login Failed";
      }
        $conn = null;
    }
    catch (PDOException $e) {
      $fmsg = "User Login Failed";
    }
  }
  $_POST['username'] = null;
  $_SESSION['username'] = $username;
}
?>
<!-- Fine area Login Php -->

<!DOCTYPE HTML>
<html>
	<head>
		<title>Login - SoundTino</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">

    <!--  script per lo scorrimento automatico della pagina  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
      scrollTop: $('#main').offset().top
    }, 1000);
    });
    </script>
    <!--  script per lo scorrimento automatico della pagina  -->

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
				<div class="wrapper style2">
					<div class="title">Login</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Entra in questo bellissimo posto<br class="mobile-hide" /></h2>
										<p>Inserisci le tue credenziali</p>
									</header>
									<form class="container" method="post">
          					<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
          					<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
										Username<input type="text" name="username" value="" required>
										Password<input type="password" name="password" value="" required> <br>
										<input type="submit" name="" value="Login"> <input type="button" name="" onclick="javascript:location.href='register.php'" value="Register">
									</form>
								</article>
								<div class="row 150%">
                  <?php
                  include 'connect.php';
                  foreach ($stmt = $conn->query("SELECT Img_path, username, description FROM user ORDER BY id DESC LIMIT 3")as $a) {
                    echo "<div class='4u 12u(mobile)'> <section class='box'><header> <h2>".$a['username']."</h2></header>";
                    echo "<a href=allSongs.php?u=".$a['username']." class='image featured'><img src='".$a['Img_path']."' alt='user image' /></a>";
                    echo "<p>".$a['description']."</p>";
                    echo "<a href='https://www.google.com/search?q=".$a['username']."' class='button style1'>More</a>";
                    echo "</section> </div>";
                  }
                   ?>
								</div>
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
