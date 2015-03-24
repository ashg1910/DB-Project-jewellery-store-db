<html>
	<head>
		<title>Supervisor</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- Optional: Include the jQuery library -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Optional: Incorporate the Bootstrap JavaScript plugins -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		<script>
			$(document).ready(function(){

				$("#item").click(function( event ) {
					event.preventDefault();
					$("#manage_item").show();
					$("#update_commodity_rate").hide();
					$("#manage_staff").hide();
					$("#credential").hide();
					$("#modify_item").hide();
					$("#add_item").hide();
					$("#remove_item").hide();
					$("#view_item").hide();	
					$("#add_modify_staff").hide();
					$("#remove_staff").hide();
					$("#view_staff").hide();
					$("#view_items").hide();
					$("#customer_details").hide();
					$("#view_staffs").hide();
				});

				$("#comm_rate").click(function( event ) {
					event.preventDefault();
					$("#update_commodity_rate").show();
					$("#manage_item").hide();
					$("#manage_staff").hide();
					$("#credential").hide();
					$("#modify_item").hide();
					$("#add_item").hide();
					$("#remove_item").hide();
					$("#view_item").hide();	
					$("#add_modify_staff").hide();
					$("#remove_staff").hide();
					$("#view_staff").hide();
					$("#view_items").hide();
					$("#customer_details").hide();
					$("#view_staffs").hide();
				});

				$("#staff").click(function( event ) {
					event.preventDefault();
					$("#manage_staff").show();
					$("#update_commodity_rate").hide();
					$("#manage_item").hide();
					$("#credential").hide();
					$("#modify_item").hide();
					$("#add_item").hide();
					$("#remove_item").hide();
					$("#view_item").hide();	
					$("#add_modify_staff").hide();
					$("#remove_staff").hide();
					$("#view_staff").hide();
					$("#customer_details").hide();
					$("#view_items").hide();
					$("#view_staffs").hide();
				});

				$("#cust").click(function( event ) {
					event.preventDefault();
					$("#customer_details").show();
					$("#update_commodity_rate").hide();
					$("#manage_staff").hide();
					$("#manage_item").hide();
					$("#credential").hide();
					$("#add_item").hide();
					$("#modify_item").hide();
					$("#remove_item").hide();
					$("#view_item").hide();
					$("#add_modify_staff").hide();
					$("#remove_staff").hide();
					$("#view_staff").hide();
					$("#view_items").hide();
					$("#view_staffs").hide();
				});

				$("#change").click(function( event ) {
					event.preventDefault();
					$("#credential").show();
					$("#update_commodity_rate").hide();
					$("#manage_staff").hide();
					$("#manage_item").hide();
					$("#add_item").hide();
					$("#modify_item").hide();
					$("#remove_item").hide();
					$("#view_item").hide();
					$("#add_modify_staff").hide();
					$("#remove_staff").hide();
					$("#view_staff").hide();
					$("#customer_details").hide();
					$("#view_items").hide();
					$("#view_staffs").hide();
				});

				$("#ad_item").click(function(event){
					event.preventDefault();
					$("#add_item").show();
					$("#modify_item").hide();
					$("#remove_item").hide();
					$("#view_item").hide();
					$("#customer_details").hide();
					$("#view_items").hide();
					$("#view_staffs").hide();
				});

				$("#mod_item").click(function(event){
					event.preventDefault();
					$("#modify_item").show();
					$("#add_item").hide();
					$("remove_item").hide();
					$("#view_item").hide();
					$("#customer_details").hide();
					$("#view_items").hide();
					$("#view_staffs").hide();
				});

				$("#rm_item").click(function(event){
					event.preventDefault();
					$("#remove_item").show();
					$("#add_modify_item").hide();
					$("#view_item").hide();
					$("#add_item").hide();
					$("#modify_item").hide();
					$("#customer_details").hide();
					$("#view_items").hide();
					$("#view_staffs").hide();

				});

				$("#views_item").click(function(event){
					event.preventDefault();
					$("#remove_item").hide();
					$("#add_item").hide();
					$("#modify_item").hide();
					$("#customer_details").hide();
					$("#view_items").show();
					$("#view_staffs").hide();
				});

				$("#mod_staff").click(function(event){
					event.preventDefault();
					$("#add_modify_staff").show();
					$("#remove_staff").hide();
					$("#view_staff").hide();
					$("#customer_details").hide();
					$("#view_items").hide();
					$("#view_staffs").hide();
				});

				$("#rm_staff").click(function(event){
					event.preventDefault();
					$("#remove_staff").show();
					$("#add_modify_staff").hide();
					$("#view_staff").hide();
					$("#customer_details").hide();
					$("#view_items").hide();
					$("#view_staffs").hide();
				});

				$("#views_staff").click(function(event){
					event.preventDefault();
					$("#view_staffs").show();
					$("#remove_staff").hide();
					$("#add_modify_staff").hide();
					$("#customer_details").hide();
					$("#view_items").hide();
				});

			});			  				

		</script>

		<style>
			#manage_item,#customer_details,#view_staffs,#view_items, #add_item,#modify_item, #remove_item, #update_commodity_rate, #manage_staff, #add_modify_staff, #remove_staff, #credential{
				display: none;
			}
		</style>

	</head>

	<body> 

		<!-- This is a Nav-bar -->
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav ">
				<li><a id="item" class="nav-link" href="">Manage Items</a></li>
				<li><a id="cust" class="nav-link current" href="">Customer Details</a></li>
				<li><a id="comm_rate" class="nav-link" href="">Update commodity rate</a></li>
				<li><a id="staff" class="nav-link" href="">Staff Details</a></li>
				<li><a id="change" class="nav-link" href="">Change Password</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
		  		<li><a href="./login.html">Logout</a></li>
			</ul>
		</div>
		<!-- Navbar ends here -->

		<!--Manage Items -->
		<div id="manage_item">
			<div class="row">
				<div class="col-md-1"></div>
				<div  class="col-md-1">
					<button id="ad_item" class="btn btn-primary btn-lg">Add Item</button>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-1">
					<button id="mod_item" class="btn btn-primary btn-lg">Modify Item</button>
				</div>
				<div class = "col-md-1"></div>
				<div  class = "col-md-1">
					<button id="rm_item" class="btn btn-primary btn-lg">Remove Item</button>
				</div>
				<div class="col-md-1"></div>
				<div  class = "col-md-1">
					<button id="views_item" class="btn btn-primary btn-lg">View Items</button>
				</div>
			</div>
		</div>	
		<!-- Manage Item End -->

		<!--  Add item-->
		<div id="add_item">
			<form class="form col-md-12 center-block" action="add.php" method="POST">
				<div class="form-group">
					<input class="form-control input-lg" name="Item_Id" required placeholder="Enter Item Id" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="Quantity" required placeholder="Enter Quantity" type="text">
				</div>
				<div class="form-group">
					<select name="Category" class="selecter_1">
						<option value="Gold">Gold</option>
						<option value="Silver">Silver</option>
						<option value="Diamond">Diamond</option>
					</select>
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="Gross_weight" required placeholder="Enter Gross weight" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="Reduction_weight" required placeholder="Enter reduction weight" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="Wastage" required placeholder="Enter wastage" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="Making_charge" required placeholder="Enter making charge" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="Description" required placeholder="Give description" type="text">
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-lg">Proceed</button>
				</div>
			</form>
		</div>
		<!-- Add item end -->

		<!--  Modify item-->
		<div id="modify_item">
			<form class="form col-md-12 center-block" action="modify.php" method="POST">
				<div class="form-group">
					<input class="form-control input-lg" name="Item_Id" required placeholder="Enter Item Id" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="Quantity" required placeholder="Enter Quantity" type="text">
				</div>
				<div class="form-group">
					<select name="Category" class="selecter_1">
						<option value="Gold">Gold</option>
						<option value="Silver">Silver</option>
						<option value="Diamond">Diamond</option>
					</select>
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="Gross_weight" required placeholder="Enter Gross weight" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="Reduction_weight" required placeholder="Enter reduction weight" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="Wastage" required placeholder="Enter wastage" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="Making_charge" required placeholder="Enter making charge" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="Description" required placeholder="Give description" type="text">
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-lg">Modify item</button>
				</div>
			</form>
		</div>
		<!-- modify item end -->

		<!-- Remove Item -->
		<div id="remove_item">
			<form class="form col-md-12 center-block" action="remove_item.php" method="POST">
				<div class="form-group">
					<input class="form-control input-lg" name="item_code" required placeholder="Enter Item Code" type="text">
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-lg">Proceed</button>
				</div>			    
			</form>
		</div>
		<!-- remove item end -->

		<!-- View Items -->
		<div id="view_items">
<?php

	$conn = mysql_connect('localhost', 'root', 'ashg123');
	if (!$conn) 
	{
		die('Could not connect: ' . mysql_error($conn));
	}

	mysql_select_db("db_project", $conn);

	//$sql = "SELECT * FROM item_details;";
	$sql = "select * from item_details, config_menu, weight_details where config_menu.item_code=weight_details.item_code and weight_details.item_code=item_details.Id;";
	$result = mysql_query($sql);

	if(mysql_num_rows($result) == 0)
	{
		echo 'No Item Found!';
	}
	else
	{
		echo "<table border='1'>
		<tr>
		<th>Id</th>
		<th>Quantity</th>
		<th>Category</th>
		<th>Short Description</th>
		<th>Making</th>
		<th>Wastage</th>
		<th>Net</th>
		<th>Gross</th>
		<th>Reduction</th>
		</tr>";

		while($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
			echo "<tr>";
			echo "<td>" . $row['Id'] . "</td>";
			echo "<td>" . $row['Quantity'] . "</td>";
			echo "<td>" . $row['Category'] . "</td>";
			echo "<td>" . $row['short_description'] . "</td>";
			echo "<td>" . $row['making']. "</td>";
			echo "<td>" . $row['wastage']. "</td>";
			echo "<td>" . $row['Net'] . "</td>";
			echo "<td>" . $row['Gross'] . "</td>";
			echo "<td>" . $row['Reduction'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	mysql_close($conn);
?> 	
		</div>
		<!-- View Items End-->

		<!-- Update Commodity Rate -->
		<div id="update_commodity_rate">
			<form class="form col-md-12 center-block" action="change_commodity_rate.php" method="POST">

				<div class="form-group">
					<select name="commodity" class="selecter_1">
						<option value="Gold">Gold</option>
						<option value="Silver">Silver</option>
						<option value="Diamond">Diamond</option>
					</select>
				</div>

				<div class="form-group">
					<input class="form-control input-lg" required name="rate" placeholder="Enter Rate" type="text">
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-lg">Update Rate</button>
				</div>			    
			</form>
		</div>
		<!-- Update Commodity Rate End-->


		<!-- Manage Staff -->
		<div id="manage_staff">
			<div class="row">
				<div class="col-md-1"></div>
				<div id="mod_staff" class="col-md-1">
					<button class="btn btn-primary btn-lg">Add/Modify Staff</button>
				</div>
				<div class="col-md-2"></div>
				<div id="rm_staff" class = "col-md-1">
					<button class="btn btn-primary btn-lg">Remove Staff Member</button>
				</div>
				<div class="col-md-2"></div>
				<div id="views_staff" class="col-md-1">
					<button class="btn btn-primary btn-lg">View Staff Details</button>
				</div>
			</div>
		</div>
		<!-- Manage staff End -->

		<!--Staff Add-->
		<div id="add_modify_staff">
			<form class="form col-md-12 center-block" action="add_modify_staff.php" method="POST">
				<div class="form-group">
					<input class="form-control input-lg" required name="staff_id" placeholder="Enter Staff ID" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" required name="name" placeholder="Enter Staff Name" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" required name="phone" placeholder="Enter Phone No." type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" required name="address" placeholder="Enter Address" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" required name="salary" placeholder="Enter Salary" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" name="department" placeholder="Enter Department" type="text">
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-lg">Proceed</button>
				</div>			    
			</form>
		</div>
		<!--staff add-end-->

		<!--staff delete-->
		<div id="remove_staff">
			<form class="form col-md-12 center-block" action="remove_staff.php" method="POST">
				<div class="form-group">
					<input class="form-control input-lg" required name="id" placeholder="Enter Staff ID" type="text">
				</div>
			<div class="form-group">
				<button class="btn btn-primary btn-lg">Proceed</button>
			</div>			    
			</form>
		</div>
		<!--staff delete-end-->

		<!--view staff detail-->
		<div id="view_staffs">
<?php

	$conn = mysql_connect('localhost', 'root', 'ashg123');
	if (!$conn) 
	{
		die('Could not connect: ' . mysql_error($conn));
	}

	mysql_select_db("db_project", $conn);

	//$sql = "SELECT * FROM item_details;";
	$sql = "select * from staff_details;";
	$result = mysql_query($sql);

	if(mysql_num_rows($result) == 0)
	{
		echo 'No Item Found!';
	}
	else
	{
		echo "<table border='1'>
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Salary</th>
		<th>Department</th>
		</tr>";

		while($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Phone'] . "</td>";
			echo "<td>" . $row['Address'] . "</td>";
			echo "<td>" . $row['Salary']. "</td>";
			echo "<td>" . $row['Department']. "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	mysql_close($conn);
?> 	

		</div>

		<!--view-end-->

		<!--change username and password -->
		<div id="credential">
			<form class="form col-md-12 center-block" action="change_password.php" method="POST">
				<div class="form-group">
					<input class="form-control input-lg" required placeholder="Enter Username" name="username" type="text">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" required placeholder="Enter Current Password" name="current_password" type="password">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" required placeholder="Enter New Password" name="new_password" type="password">
				</div>
				<div class="form-group">
					<input class="form-control input-lg" required placeholder="Confirm New Password" name="confirm_new_password" type="password">
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-lg">Proceed</button>
				</div>			    
			</form>
		</div>
		<!--change username and password ends here -->  

		<!-- Customer details -->
		<div id="customer_details">
	<?php

	$conn = mysql_connect('localhost', 'root', 'ashg123');
	if (!$conn) 
	{
		die('Could not connect: ' . mysql_error($conn));
	}

	mysql_select_db("db_project", $conn);

	$sql = "SELECT * FROM customer;";
	$result = mysql_query($sql);

	if(mysql_num_rows($result) == 0)
	{
		echo 'Customer not found!';
	}
	else
	{
		echo "<table border='1'>
		<tr>
		<th>Name</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Day</th>
		<th>Month</th>
		<th>Year</th>
		<th>Balance</th>
		</tr>";

		while($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
			echo "<tr>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Phone'] . "</td>";
			echo "<td>" . $row['Address'] . "</td>";
			echo "<td>" . $row['day'] . "</td>";
			echo "<td>" . $row['month'] . "</td>";
			echo "<td>" . $row['year'] . "</td>";
			echo "<td>" . $row['balance'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	mysql_close($conn);
?> 		
		</div>

	</body>

</html>
