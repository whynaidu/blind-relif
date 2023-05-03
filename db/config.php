<?php
$conn=mysqli_connect("localhost","root","","blind_relif");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "connected";
?>