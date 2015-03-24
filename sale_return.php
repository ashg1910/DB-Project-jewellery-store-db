<?php
	ob_start();
	session_start();

	$bill_number = $_POST['bill_number'];
	$item_id = $_POST['item_id'];
	$problem = $_POST['problem'];

	$con = mysql_connect('localhost', 'root', 'ashg123');
	mysql_select_db('db_project', $con);

	$bill_number = mysql_real_escape_string($bill_number);
	$item_id = mysql_real_escape_string($item_id);
	$query = "SELECT Item_id, bill_number FROM sales_details WHERE Item_id = '$item_id' and bill_number = '$bill_number';";
	$result = mysql_query($query);

	if(mysql_num_rows($result) == 0)
	{
		echo 'Wrong input!';
	}	
	else
	{
		//$saleData = mysql_fetch_array($result, MYSQL_ASSOC);
		$query = "SELECT customer_id FROM billing_details WHERE bill_no = '$bill_number';";
		$result = mysql_query($query);
		$billData = mysql_fetch_array($result, MYSQL_ASSOC);
		$customer_phone = $billData['customer_id'];

		$query = "SELECT Category, Quantity FROM item_details WHERE Id = '$item_id';";
		$result = mysql_query($query);
		$itemData = mysql_fetch_array($result, MYSQL_ASSOC);
		$category = $itemData['Category'];
		$quantity = $itemData['Quantity'] + 1;
		
		$query = "UPDATE item_details SET Quantity = $quantity;";
		$result = mysql_query($query);

		$query = "SELECT Net FROM weight_details WHERE item_code = '$item_id';";
                $result = mysql_query($query);
                $weightData = mysql_fetch_array($result, MYSQL_ASSOC);
                $net_weight = $weightData['Net'];

		$query = "SELECT rate FROM commodity_rate WHERE type = '$category';";
		$result = mysql_query($query);
		$rateData = mysql_fetch_array($result, MYSQL_ASSOC);
		$rate = $rateData['rate'];

		$query = "SELECT Name, balance FROM customer WHERE Phone = '$customer_phone';";
		$result = mysql_query($query);

		$balanceData = mysql_fetch_array($result, MYSQL_ASSOC);
		$balance = $balanceData['balance'];
		$add = $net_weight * $rate;
		$balance = $balance + $add;

		$query = "UPDATE customer SET balance = $balance WHERE Phone=$customer_phone;";
		$result = mysql_query($query);

		$query = "INSERT INTO sales_return (bill_number, item_id, description) VALUES ('$bill_number', '$item_id', '$problem');";
		$result = mysql_query($query);

		echo "Balance of Rs. $add added to your account";
	}
?>
<html><head><title>Sale_returned</title></head><body><br /><a href="./cashier.php">Home</a></body></html>
