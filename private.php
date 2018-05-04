<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
$user = $_SESSION['username'];
require 'connect.php';
// $stmt = $conn->query("SELECT id, username from user where ");
echo "user in sessione: <b>".$user."</b><br />";
echo "id sessione:<b> ".session_id()."</b><br /><br />";
}
else {
  alert('Devi prima fare il login!');
  header("location: login.php");
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Private</title>
  </head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
---------------------
<form action="upload_song.php" method="post" enctype="multipart/form-data">
    Select song to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="text" name="name" value="">nome della canzone <br>
    <input type="text" name="descrizione" value="">descrizione della canzone
    <input type="submit" value="Upload Song" name="submit">
</form>
---------------------<br>
<button type="button" name="button"><a href="index.php">Home</a></button>
<button type="button" name="button"><a href="logout.php">logout</a> </button>

</body>
</html>
