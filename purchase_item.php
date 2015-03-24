<html>
  <head>
    <title>Purchase Items</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Optional: Include the jQuery library -->
    <script src="./js/jquery.js"></script>
    <!-- Optional: Incorporate the Bootstrap JavaScript plugins -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 

    <script>
      $(document).ready(function(){
        $("#bill").click(function(event){
	  event.preventDefault();
	  $("#customer_phone").show();
	  $("#item").css('display', 'none');
	});
      });
    </script>
    <style>
      #customer_phone{
	      display: none;
      }
    </style>
  </head>
  
  <body>
    
    <div id="item">
      <form class="form col-md-12 center-block" action="add_purchase_list.php" method="POST">
        <div class="form-group">
          <input class="form-control input-lg" required placeholder="Enter Item ID" name="item_id" type="text">
        </div>
        <div class="form-group">
          <input class="form-control input-lg" required placeholder="Enter Discount" name="discount" type="text">
        </div>
        <div class="form-group">
          <button class="btn btn-primary btn-lg">Add Item</button>
        </div>
      </form>
    </div>

    <div id="bill">
      <h1><a href="">Produce Bill</a></h1>
    </div>

    <div id="customer_phone">
      <form class="form center-block" action="bill.php" method="POST">
        <div class="form-group">
          <input class="form-control input-lg" required placeholder="Enter Customer Phone" name="customer_phone" type="text">
        </div>
        <div class="form-group">
          <button class="btn btn-primary btn-lg">Proceed</button>
        </div>
      </form>
    </div>

    <div>
    <?php
      $conn = mysql_connect('localhost', 'root', 'ashg123');
	if (!$conn) 
	{
		die('Could not connect: ' . mysql_error($conn));
	}

	mysql_select_db("db_project", $conn);

	$sql = "select * from bill_produce;";
	$result = mysql_query($sql);

	if(mysql_num_rows($result) == 0)
	{
		
	}
	else
	{
		$total = 0;
		echo "<table border='1'>
		<tr>
		<th>Item Id</th>
		<th>Short Description</th>
		<th>Category</th>
		<th>Net Weight</th>
		<th>Gross Weight</th>
		<th>Reduction Weight</th>
		<th>Making Charge</th>
		<th>Wastage</th>
		<th>Price</th>
		<th>Discount</th>
		<th>Price After Discount</th>
		</tr>";

		while($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
			$price_discount = $row['price_discount'];
			$total = $total + $price_discount;
			echo "<tr>";
			echo "<td>" . $row['item_code'] . "</td>";
			echo "<td>" . $row['short_description'] . "</td>";
			echo "<td>" . $row['category'] . "</td>";
			echo "<td>" . $row['net'] . "</td>";
			echo "<td>" . $row['gross']. "</td>";
			echo "<td>" . $row['reduction']. "</td>";
			echo "<td>" . $row['making'] . "</td>";
			echo "<td>" . $row['wastage'] . "</td>";
			echo "<td>" . $row['price'] . "</td>";
			echo "<td>" . $row['discount'] . "</td>";
			echo "<td>" . $row['price_discount'] . "</td>";
			echo "</tr>";

		}
		echo "</table>";
	}
	mysql_close($conn);

    ?>
    </div>
    <br></br>
    <h4><a href="./cashier.php">BACK TO HOME</a></h4>

  </body>
</html>
