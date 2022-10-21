<?php
session_start();
$conn = new mysqli("localhost","fad","Fad212224236","e_fad_db");

if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}else{
    $conn->set_charset("utf8");
}
?>