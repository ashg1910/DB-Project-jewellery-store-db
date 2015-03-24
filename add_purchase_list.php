<?php
ob_start();
session_start();

$item_id = $_POST['item_id'];
$discount = $_POST['discount'];

$conn = mysql_connect('localhost', 'root', 'ashg123');
mysql_select_db('db_project', $conn);

$query = "SELECT * FROM item_details WHERE Id='$item_id';";
$result = mysql_query($query);

if(mysql_num_rows($result) == 0)
{
	echo "Item ID Not Found!";
}
else
{
	 $sql = "select * from item_details, config_menu, weight_details where config_menu.item_code=weight_details.item_code and weight_details.item_code=item_details.Id and item_details.Id = '$item_id';";
	 $result = mysql_query($sql);
	 $row = mysql_fetch_array($result, MYSQL_ASSOC);
	 
	 $short_description = $row['short_description'];
	 $category = $row['Category'];
	 $net = $row['Net'];
	 $gross = $row['Gross'];
	 $reduction = $row['Reduction'];
	 $making = $row['making'];
	 $wastage = $row['wastage'];
	 
	 $query = "select rate from commodity_rate where type = '$category';";
	 $result = mysql_query($query);
	 $rate_data = mysql_fetch_array($result, MYSQL_ASSOC);
	 $rate = $rate_data['rate'];

	 $price = (($net + $wastage)*$rate)+$making;
	 $discount = ($price * $discount)/100;
	 $price_discount = $price - $discount;


	 $query = "INSERT INTO bill_produce(item_code,short_description,category,net,gross,reduction,making,wastage,price,discount,price_discount) VALUES ('$item_id','$short_description','$category','$net','$gross','$reduction','$making','$wastage','$price','$discount','$price_discount');";
	 $result = mysql_query($query);

	 header("Location: purchase_item.php");

	 mysql_close($conn);
}
?>
