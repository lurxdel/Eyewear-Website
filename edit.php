<?php
	include('conn.php');
	
	$id=$_GET['id'];

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

	
	mysqli_query($conn,"update buyers set fname='$fname', mname='$mname', lname='$lname', region='$region', province='$province', city='$city', brgy='$brgy', street='$street' product_name='$product_name', product_desc='$product_desc', qty='$qty', price='$price', total='$total' where user_id='$id'");
	header('location:data.php');

?>