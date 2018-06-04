<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
$user = $_SESSION['username'];
require 'connect.php';
echo "user in sessione: <b>".$user."</b><br />";
echo "id sessione:<b> ".session_id()."</b><br /><br />";
}
else {
  echo "Devi prima fare il login!";
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Private</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='script.js' type='text/javascript'></script>
  </head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select user-image to upload:
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


<h1>My Songs</h1>
<script>
function myFunction(el) {
    var myWindow = window.open("description.php?id='"+el.value+"'", "Description", "width=500,height=300");
}
</script>


<?php
echo "<table border 1px black>";
foreach ($conn->query("SELECT Songs.ID, Songs.Name, user.username FROM user RIGHT JOIN Songs ON Songs.ID_U = user.id WHERE user.username = '".$user."'") as $row){
  $z=$row['Name'];
  echo "<tr><td style='padding: 10px' id='".$z."'>";   // perchè prende solo il primo valore dopo lo spazio?
  echo "<a href='song.php?id=".$row['ID']."'style=color:black>".$row['Name']."</a>";
  echo "</td>	<td style='padding: 10px'>";
  echo "<span class='delete' id='del_".$row['ID']."'style=color:red>Delete</span>";
  echo "</td>	<td style='padding: 10px'>";
  echo "<button onclick=myFunction(this) value=".$row['ID']." >Modifica Descrizione</button>";
  echo "</td> </tr>";
}
echo "</table>";

 ?>


</body>
</html>
