<?php
$mysqli = new mysqli("localhost","root","","appem");

// Check connection
if ($mysqli -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>