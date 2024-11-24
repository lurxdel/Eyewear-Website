<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from buyers where user_id='".$row['user_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Are you sure to delete <strong><?php echo ucwords($drow['fname'].' '.$row['lname']); ?></strong> from the list? This method cannot be undone.</center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['user_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from buyers where user_id='".$row['user_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['user_id']; ?>">
				<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" value="<?php echo $erow['qty']; ?>">
						</div>
					</div>
				<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="fname" class="form-control"  value="<?php echo $erow['fname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="mname" class="form-control"  value="<?php echo $erow['mname']; ?>"> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="lname" class="form-control"  value="<?php echo $erow['lname']; ?>"> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="region" class="form-control"  value="<?php echo $erow['region']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="province" class="form-control"  value="<?php echo $erow['province']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City/Municipality:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="city" class="form-control"  value="<?php echo $erow['city']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="brgy" class="form-control"  value="<?php echo $erow['brgy']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="street" class="form-control"  value="<?php echo $erow['street']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name" value="<?php echo $erow['product_name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc" value="<?php echo $erow['product_desc']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price" value="25.10">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->