<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<title>My Purchase</title>
  <link rel="stylesheet" type="text/css" href="Bootstrap_files/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/interface.css">
</head>
<body>
  <div id="page">
	<img src="img/lured_z-logo.png" width="298px" height="48px">

  <div id="navigation">
		<a href="home.php">HOME</a>
		<a href="items.php">ITEMS</a>
		<a href="aboutus.php">ABOUT US</a>
		<a href="contact.php">CONTACT</a>
		<a class="active" href="data.php">MY PURCHASE</a>
		<a style="float: right;" href="logout.php">LOGOUT</a>
  </div>

  <div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:red"><center><strong> PURCHASE DATA </strong></center></span>	
		<div style="height:20px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
                <th>Firstname</th>
                <th>Middlename</th>
				<th>Lastname</th>
				<th>Region</th>
                <th>Province</th>
                <th>City</th>
                <th>Barangay</th>
                <th>Street</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"SELECT * FROM `buyers`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
                        <td><?php echo ucwords($row['fname']); ?></td>
                        <td><?php echo ucwords($row['mname']); ?></td>
						<td><?php echo ucwords($row['lname']); ?></td>
						<td><?php echo ucwords($row['region']); ?></td>
                        <td><?php echo ucwords($row['province']); ?></td>
                        <td><?php echo ucwords($row['city']); ?></td>
                        <td><?php echo ucwords($row['brgy']); ?></td>
                        <td><?php echo ucwords($row['street']); ?></td>
                        <td><?php echo ucwords($row['qty']); ?></td>
						<td><?php echo ucwords($row['price']); ?></td>
						<td><?php echo ucwords($row['total']); ?></td>
						<td>
							<a href="#edit<?php echo $row['user_id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
							<a href="#del<?php echo $row['user_id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
</div>
</div>
</div>
<div id="footer">
<font color="white">Copyright © 2022 <i>Lured'z Eyewear ®.<i> All Rights Reserved</font>

</div>
<script src="Bootstrap_files/libs/bootstrap/js/jquery.min.js"></script>
<script src="Bootstrap_files/libs/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>