<?php
include "config.php";

$id = $_POST['ID'];

// Delete record
$query = "DELETE FROM Songs WHERE ID=".$id;
mysqli_query($con,$query);

echo 1;
