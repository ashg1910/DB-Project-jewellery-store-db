<?php
	$q = $_POST['phone'];

	$conn = mysql_connect('localhost', 'root', 'ashg123');
	if (!$conn) 
	{
		die('Could not connect: ' . mysql_error($conn));
	}

	mysql_select_db("db_project", $conn);

	$sql = "SELECT * FROM customer WHERE Phone = '$q';";
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
<html><head><title>Customer Ask</title></head><body><br /><a href="./cashier.php">HOME</a></body></html>
