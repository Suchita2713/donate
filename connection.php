<?php
$server="localhost";
$user="root";
$password="";
$db="donation";

$conn = new mysqli($server,$user,$password,$db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>