<!-- Add to Cart -->


    <!-- prod. 1 -->
    <div class="modal fade" id="addnew1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

				<img src="img/new2.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc" value="New no.1"  required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 2 -->
    <div class="modal fade" id="addnew2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/new2.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 3 -->
    <div class="modal fade" id="addnew3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/new3.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 4 -->
    <div class="modal fade" id="addnew4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/new4.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 5 -->
    <div class="modal fade" id="addnew5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/new5.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 6 -->
    <div class="modal fade" id="addnew6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/eyewear1.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 7 -->
    <div class="modal fade" id="addnew7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/eyewear2.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 8 -->
    <div class="modal fade" id="addnew8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/eyewear3.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 9 -->
    <div class="modal fade" id="addnew9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/eyewear4.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 10 -->
    <div class="modal fade" id="addnew10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/eyewear5.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>


    <!-- prod. 11 -->
    <div class="modal fade" id="addnew11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/sunglasses1.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 12 -->
    <div class="modal fade" id="addnew12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/sunglasses2.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 13 -->
    <div class="modal fade" id="addnew13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/sunglasses3.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 14 -->
    <div class="modal fade" id="addnew14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/sunglasses4.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 15 -->
    <div class="modal fade" id="addnew15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/sunglasses5.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 16 -->
    <div class="modal fade" id="addnew16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/streetwear1.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 17 -->
    <div class="modal fade" id="addnew17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/streetwear2.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 18 -->
    <div class="modal fade" id="addnew18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/streetwear3.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 19 -->
    <div class="modal fade" id="addnew19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/streetwear4.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 20 -->
    <div class="modal fade" id="addnew20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/streetwear5.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>


    <!-- prod. 21 -->
    <div class="modal fade" id="addnew21" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/bestseller1.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 22 -->
    <div class="modal fade" id="addnew22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/bestseller2.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 23 -->
    <div class="modal fade" id="addnew23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/bestseller3.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 24 -->
    <div class="modal fade" id="addnew24" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/bestseller4.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 25 -->
    <div class="modal fade" id="addnew25" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/bestseller5.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 26 -->
    <div class="modal fade" id="addnew26" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/onsale1.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 27 -->
    <div class="modal fade" id="addnew27" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/onsale2.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 28 -->
    <div class="modal fade" id="addnew28" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/onsale3.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 29 -->
    <div class="modal fade" id="addnew29" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/onsale4.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 30 -->
    <div class="modal fade" id="addnew30" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/onsale5.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>


    <!-- prod. 31 -->
    <div class="modal fade" id="addnew31" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/vibes1.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 32 -->
    <div class="modal fade" id="addnew32" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/vibes2.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 33 -->
    <div class="modal fade" id="addnew33" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/vibes3.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 34 -->
    <div class="modal fade" id="addnew34" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/vibes4.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 35 -->
    <div class="modal fade" id="addnew35" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/vibes5.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 36 -->
    <div class="modal fade" id="addnew36" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/cutesy1.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 37 -->
    <div class="modal fade" id="addnew37" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/cutesy2.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 38 -->
    <div class="modal fade" id="addnew38" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/cutesy3.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 39 -->
    <div class="modal fade" id="addnew39" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/cutesy4.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 40 -->
    <div class="modal fade" id="addnew40" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/cutesy5.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>


    <!-- prod. 41 -->
    <div class="modal fade" id="addnew41" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/artsy1.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 42 -->
    <div class="modal fade" id="addnew42" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/artsy2.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 43 -->
    <div class="modal fade" id="addnew43" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/artsy3.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 44 -->
    <div class="modal fade" id="addnew44" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/artsy4.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 45 -->
    <div class="modal fade" id="addnew45" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/artsy5.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 46 -->
    <div class="modal fade" id="addnew46" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/add1.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 47 -->
    <div class="modal fade" id="addnew47" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/add2.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 48 -->
    <div class="modal fade" id="addnew48" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/add3.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 49 -->
    <div class="modal fade" id="addnew49" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/add4.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>



	<!-- prod. 50 -->
    <div class="modal fade" id="addnew50" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add to Cart</h4></center>
                </div>
                <div class="modal-body" align="center">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">

					 <img src="img/add5.jpg" width="250px">
						<p style="color:red;">$25.10</p> 
						<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Quantity:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="qty" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Enter Quantity here.." required>
						</div>
					</div>
					<div style="height:20px;"></div>
                    <p align="center">INFORMATION</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="fname" placeholder="Enter your first name here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Middlename:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="mname" placeholder="Enter your middle name here.." required> 
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lname" placeholder="Enter your last name here.." required> 
						</div>
					</div>
					<div style="height:27px;"></div>
					<p align="center">ADDRESS</p>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="region" placeholder="Enter your region here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Province:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="province" placeholder="Enter your province here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">City:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="city" placeholder="Enter your city/municipality here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Barangay:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="brgy" placeholder="Enter your barangay here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
 					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="float: left; top:7px;">Street:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="street" placeholder="Enter your street/zone here.." required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product name here -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_name"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Product Desc -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="product_desc"   required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<!-- Price -->
						<div class="col-lg-10">
							<input type="hidden" class="form-control" name="price"  value="25.10" required>
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
