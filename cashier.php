<html>
	<head>
  	<title>Cashier</title>
 
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Optional: Include the jQuery library -->
	  <script src="./js/jquery.js"></script>
	  <!-- Optional: Incorporate the Bootstrap JavaScript plugins -->
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  	
  	<script>
    	$(document).ready(function(){
    		
    		$( "#cust" ).click(function( event ) {
					event.preventDefault();
					$( "#customer" ).show();
					$("#old_new").hide();
					$("#old").hide();
				  $("#new").hide();
				  $("#item_add").hide();
				  $("#main").hide();
				  $("#sale_return").hide();
				  $("#ex_item").hide();
				  $("#credential").hide();
				});

				$("#pur").click(function(event){
					event.preventDefault();
					$("#customer").hide();
					$("#old_new").show();
					$("#old").hide();
				  $("#new").hide();
				  $("#item_add").hide();
				  $("#main").hide();
				  $("#sale_return").hide();
				  $("#ex_item").hide();
				  $("#credential").hide();
				});

				$("#old_customer").click(function(event){
					event.preventDefault();
					$("#old").show();
					$("#item_add").show();
					$("#new").hide();
				});

				$("#new_customer").click(function(event){
					event.preventDefault();
					$("#new").show();
					$("#item_add").show();
					$("#old").hide();
				});	

				$("#ret").click(function(event){
					event.preventDefault();
					$("#sale_return").show();
					$("#customer").hide();
					$("#old_new").hide();
					$("#old").hide();
				  $("#new").hide();
				  $("#item_add").hide();
				  $("#main").hide();
				  $("#ex_item").hide();
				  $("#credential").hide();
				});	

				$("#exch").click(function(event){
					event.preventDefault();
					$("#sale_return").hide();
					$("#customer").hide();
					$("#old_new").hide();
					$("#old").hide();
				  $("#new").hide();
				  $("#item_add").hide();
				  $("#main").hide();
				  $("#ex_item").show();
				  $("#credential").hide();
				});	

				 $("#change").click(function(event){
					event.preventDefault();
					$("#sale_return").hide();
					$("#customer").hide();
					$("#old_new").hide();
					$("#old").hide();
				  $("#new").hide();
				  $("#item_add").hide();
				  $("#main").hide();
				  $("#ex_item").hide();
				  $("#credential").show();
				});

    	});
  	</script>
  
  	<style>
			#customer, #old_new, #old, #new, #item_add, #sale_return, #ex_item, #credential{
				display: none;
			}
  	</style>

</head>


<body>

	<!-- This is a Nav-bar -->
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav ">
      <li><a id="pur" class="nav-link" href="">Purchase</a></li>
      <li><a id="cust" class="nav-link current" href="">Customer Details</a></li>
      <li><a id="ret"class="nav-link" href="">Sales Return</a></li>
      <li><a id="exch"class="nav-link" href="">Exchange Item</a></li>
      <li><a id="change"class="nav-link" href="">Change Password</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./login.html">Logout</a></li>
    </ul>
  </div>
  <!-- Navbar ends here -->

  <!--A welcome note -->
  <div id="main">
    <div class="col-md-1">
    </div>
    <p>
      Welcome
    </p>
  </div>
  <!-- Welcome note ends here -->

  <!-- customer form is here -->
  <div id="customer">
    <form class="form col-md-12 center-block" action="customer_ask.php" method="POST">
      <div class="form-group">
        <input class="form-control input-lg" required placeholder="Enter Phone Number" name="phone" type="text">
      </div>
      <div class="form-group">
        <button class="btn btn-primary btn-lg">Show Details</button>
      </div>			    
    </form>
  </div>
  <!-- Customer form ends here -->

  <!-- Bill is here -->
  <div id="bill">
      <div id="old_new" class="row">
      	<div class="col-md-1"></div>
	<div class="col-md-1">
	  <a href="./purchase_item.php">Purchase Item</a>
	</div>
	<div class="col-md-1">
	  <a id="new_customer" href="">Add Customer</a>
	</div>
      </div>

   <!-- <div id="old">
      <form class="form col-md-12 center-block" action="buy_item.php" method="POST">
        <div class="form-group">
          <input class="form-control input-lg" name="phone" placeholder="Enter Customer Phone No." type="text">
        </div>
	<div class="form-group">
	  <button class="btn btn-primary btn-lg">Proceed to Adding Items</button>
	</div>
      </form>
    </div>-->
    <div id="new">
      <form class="form col-md-12 center-block" action="add_customer.php" method="POST">
	<div class="form-group">
          <input class="form-control input-lg" required name="name" placeholder="Customer Name" type="text">
        </div>
        <div class="form-group">
          <input class="form-control input-lg" required name="phone" placeholder="Customer Phone" type="text">
        </div>
        <div class="form-group">
          <input class="form-control input-lg" required name="address" placeholder="Customer Address" type="text">
        </div>
      	<div class="form-group">
          <button class="btn btn-primary btn-lg">Add Customer</button>
      	</div>
      </form>
    </div>
  </div>
  <!--Bill-end-->

  <div id="sale_return">
  	<form class="form col-md-12 center-block" action="sale_return.php" method="POST">
      <div class="form-group">
        <input class="form-control input-lg" required placeholder="Enter Bill No." name="bill_number" type="text">
      </div>
      <div class="form-group">
        <input class="form-control input-lg" required placeholder="Enter Item Id" name="item_id" type="text">
      </div>
      <div class="form-group">
        <input class="form-control input-lg" required placeholder="Enter Problem" name="problem" type="text">
      </div>
      <div class="form-group">
        <button class="btn btn-primary btn-lg">Proceed</button>
      </div>			    
    </form>
  </div>


  <div id="ex_item">
  	<form class="form col-md-12 center-block" action="exchange_item.php" method="POST">
      <div class="form-group">
		<select name="category" class="selecter_1">
			<option value="Gold">Gold</option>
			<option value="Silver">Silver</option>
			<option value="Diamond">Diamond</option>
		</select>
      </div>
      <div class="form-group">
        <input class="form-control input-lg" name="weight" required placeholder="Enter Weight" type="text">
      </div>
      <div class="form-group">
        <input class="form-control input-lg" name="purity" required placeholder="Enter Purity" type="text">
      </div>
      <div class="form-group">
        <input class="form-control input-lg" name="customer_phone" required placeholder="Enter Customer Phone" type="text">
      </div>
      <div class="form-group">
        <button class="btn btn-primary btn-lg">Proceed</button>
      </div>			    
    </form>
  </div>


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

</body>
</html>
