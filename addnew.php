<?php
	include('conn.php');

	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$region=$_POST['region'];
	$province=$_POST['province'];
	$city=$_POST['city'];
	$brgy=$_POST['brgy'];
	$street=$_POST['street'];
	$product_name=$_POST['product_name'];
	$product_desc=$_POST['product_desc'];

	$qty=$_POST['qty'];
	$price=$_POST['price'];

	$total=$qty * $price;

	
	mysqli_query($conn,"insert into buyers (fname, mname, lname, region, province, city, brgy, street, product_name, product_desc, qty, price, total) values ( '$fname', '$mname' ,'$lname', '$region', '$province', '$city', '$brgy', '$street', '$product_name', '$product_desc', '$qty', '$price', '$total')");
	header('location:items.php');

?>