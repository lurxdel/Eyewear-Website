<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","shopdata");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>