<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from buyers where user_id='$id'");
	header('location:data.php');

?>