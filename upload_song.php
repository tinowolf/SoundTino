<?php
session_start();
$user = $_SESSION['username'];
$target_dir = "Users/".$user."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$songFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (!file_exists($target_dir)) {
       mkdir($target_dir, 0777, true);
     }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists. ";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {  //10 Mb max upload
    echo "Sorry, your file is too large. ";
    $uploadOk = 0;
}
// Allow certain file formats
if($songFileType != "wav" && $songFileType != "mp3" && $songFileType != "aac"
&& $songFileType != "m4a" ) {
    echo "Sorry, only WAV, mp3, aac & m4a files are allowed. ";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded. ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. ";

        include 'connect.php';
           $stmt = $conn->prepare("INSERT INTO Songs (ID, ID_U, Path, Name, Description) VALUES (NULL, (SELECT `id` FROM user WHERE `user`.`username` = :u), :tar, :n, :d)");
           $stmt->bindParam(':tar', $target_file);
           $stmt->bindParam(':n', $_POST['name']);
           $stmt->bindParam(':u', $user);
           $stmt->bindParam(':d', $_POST['descrizione']);

        $stmt->execute();
    } else {
        echo "Sorry, there was an error uploading your file. ";
    }
}

?>

<META http-equiv="refresh" content="3;URL=private.php">

<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload Song</title>
  </head>
  <body>

  </body>
</html>
