<?php
include "config.php";

$id = $_POST['id'];

// Delete record
$query = "DELETE FROM Songs WHERE id=".$id;
mysqli_query($con,$query);

echo 1;
