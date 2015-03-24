<html>
  <head>
    <title>BILL</title>
  </head>
  <body>
<?php

	$customer_phone = $_POST['customer_phone'];

	$con = mysql_connect('localhost', 'root', 'ashg123');
	mysql_select_db('db_project', $con);

	$customer_phone = mysql_real_escape_string($customer_phone);
	$query = "SELECT balance FROM customer WHERE Phone = '$customer_phone';";
	$result = mysql_query($query);
	
	if(mysql_num_rows($result) == 0)
	{
		echo 'Customer Not Registered!';
	}	

	else
	{
		$total = 0;
		
		$customerData = mysql_fetch_array($result, MYSQL_ASSOC);
		$balance = $customerData['balance'];

		$query = "SELECT bill_no FROM billing_details ORDER BY bill_no DESC LIMIT 1;";
		$result = mysql_query($query);

		if(mysql_num_rows($result) == 0)
		{
			$bill_number = 1;
		}	
		else
		{
			$billData = mysql_fetch_array($result, MYSQL_ASSOC);
			$bill_number = $billData['bill_no'] + 1;
		}
		
		$query = "SELECT * FROM bill_produce;";
		$result = mysql_query($query);

		while($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
			$price_discount = $row['price_discount'];
			$item_code = $row['item_code'];
			$price = $row['price'];
			$discount = $row['discount'];
			$total = $total + $price_discount;

			$query = "SELECT Quantity FROM item_details;";
			$result = mysql_query($query);
			$itemData = mysql_fetch_array($result, MYSQL_ASSOC);
			$quantity = $itemData['Quantity'] - 1;

			$query = "UPDATE item_details SET Quantity = $quantity;";
			$result = mysql_query($query);

			$query = "INSERT INTO sales_details (Item_id,Price,Discount,bill_number) VALUES('$item_code','$price','$discount','$bill_number');";
			$result = mysql_query($query);

			$query = "DELETE FROM bill_produce WHERE item_code = '$item_code'; ";
			$result = mysql_query($query);
			
			$query = "SELECT * FROM bill_produce;";
			$result = mysql_query($query);
		}

		if($total > $balance)
		{
			$total = $total - $balance;
			$balance = 0;
		}
		else
		{
			$balance = $balance - $total;
			$total = 0;
		}
		$today = getdate();
		$day = $today['mday'];
		$month = $today['mon'];
		$year = $today['year'];

		$query = "INSERT INTO billing_details (day,month,year,amount,customer_id) VALUES ('$day','$month','$year','$total','$customer_phone');"; 
		$result = mysql_query($query);

		$query = "UPDATE customer SET balance='$balance',day='$day',month='$month',year='$year' WHERE Phone='$customer_phone';";
		$result = mysql_query($query);

		echo "<br>BILL NUMBER: " . $bill_number . "</br>";
		echo "<br>DATE: " . $day ."/". $month ."/". $year ."</br>";
		echo "<br>AMOUNT: " . $total . "</br>";
		echo "<br>BALANCE: " . $balance . "</br>";
	}
?>
    <br></br>
    <a href="./purchase_item.php">Make Another Purchase</a>
    <br></br>
    <a href="./cashier.php">Back to home</a>
  </body>
</html>
