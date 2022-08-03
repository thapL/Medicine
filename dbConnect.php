<?php
$servername = "MKSP-NATTHAPHON";


// Create connection
$conn = mysqli_connect($servername);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

mysqli_query($servername,"SET NAMES'utf8");
?>