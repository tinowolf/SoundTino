<!-- <!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Private</title>
  </head>
  <body>
      <form class="" action="upload.php" method="post">upload images
        <input type="checkbox" name="up" value="">
        <input type="file" name="aud" value=""><br>
        <input type="submit" name="" value="submit">
      </form>
    </form>
  </body>
</html> -->


<?php
// session_start();
// require 'connect.php';
// $user = $_SESSION['username'];
// $uploads_dir = 'Users/'.$user;
//     if (!file_exists($uploads_dir)) {
//       mkdir($uploads_dir, 0777, true);
//     }
//
//     $statement = $PDO->prepare('SELECT ID FROM user WHERE username= :user ';'INSERT INTO Percorso (ID, ID_U, path) VALUES (NULL, 50, $uploads_dir)';
//     $statement->bindParam(':user', $n, PDO::PARAM_STR);
//     $statement->execute();
//
//     $n = $_POST['name'];
//     $statement = $PDO->prepare('SELECT * FROM people WHERE name = :name');
//     $statement->bindParam(':name', $n, PDO::PARAM_STR);
//     $statement->execute();
//     while($row = $statement->fetch() ){
//         echo var_dump($row);
//         }

?>


<?php session_start();
$user = $_SESSION['username'];
echo "user in sessione: <b>".$user."</b><br />";
echo "id sessione:<b> ".session_id()."</b><br /><br />"; ?>


<!DOCTYPE html>
<html>
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
