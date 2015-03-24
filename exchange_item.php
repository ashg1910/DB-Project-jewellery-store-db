<?php
	ob_start();
	session_start();

	$category = $_POST['category'];
	$weight = $_POST['weight'];
	$purity = $_POST['purity'];
	$customer_phone = $_POST['customer_phone'];
	
	$con = mysql_connect('localhost', 'root', 'ashg123');
	mysql_select_db('db_project', $con);

	$query = "SELECT * FROM customer WHERE Phone = '$customer_phone';";
	$result = mysql_query($query);

	if(mysql_num_rows($result) == 0)
	{
		echo "Not a registered customer";
	}	
	else
	{
		$query = "SELECT rate FROM commodity_rate WHERE type = '$category';";
		$result = mysql_query($query);
		$rateData = mysql_fetch_array($result, MYSQL_ASSOC);
		$rate = $rateData['rate'];
		
		$query = "SELECT balance FROM customer WHERE Phone = '$customer_phone';";
		$result = mysql_query($query);
		$balanceData = mysql_fetch_array($result, MYSQL_ASSOC);
		$balance = $balanceData['balance'];
		$cost = ($weight * $rate * $purity)/100;
		$balance = $balance + $cost;

		$query = "UPDATE customer SET balance='$balance' WHERE Phone='$customer_phone';";
		$result = mysql_query($query);

		$query = "INSERT INTO exchange_item (category, weight, customer_id, purity, cost) VALUES ('$category', '$weight', '$customer_phone', '$purity', '$cost');";
		$result = mysql_query($query);

		echo "Balance of $cost added to your account. Total balance is $balance";
	}
?>
<html><head><title>Sale_returned</title></head><body><br/><a href="./cashier.php">Home</a></body></html>
