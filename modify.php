<?php
ob_start();
session_start();

$item_id = $_POST['Item_Id'];
$quantity = $_POST['Quantity'];
$category = $_POST['Category'];
$gross_weight = $_POST['Gross_weight'];
$reduction_weight = $_POST['Reduction_weight'];
$net_weight = $gross_weight - $reduction_weight;
$wastage = $_POST['Wastage'];
$making_charge = $_POST['Making_charge'];
$description = $_POST['Description'];


$conn = mysql_connect('localhost', 'root', 'ashg123');
mysql_select_db('db_project', $conn);

$query = "SELECT Quantity, Category, Id, short_description FROM item_details WHERE Id = '$item_id';";
$result = mysql_query($query);

if(mysql_num_rows($result) == 0) // User not found. So, redirect to login_form again.
{
	echo 'Wrong ItemId!';
}

else
{

	$sql = "UPDATE item_details SET Quantity='$quantity', Category='$category', short_description = '$description' WHERE Id='$item_id';";
	$result = mysql_query($sql);
	$sql2 = "UPDATE config_menu SET making='$making_charge',wastage='$wastage' WHERE item_code = '$item_id' ;";
    	$result = mysql_query($sql2);
	$sql3 = "UPDATE weight_details SET Net='$net_weight', Gross='$gross_weight',Reduction='$reduction_weight' WHERE item_code = '$item_id' ;";
    	$result = mysql_query($sql3);
		
    	echo "Item details modified";
	

}
?>
<html>
  <head><title>Item Modified</title></head>
  <body>
    <br />
    <a href="./supervisor.php">Home</a>
  </body>
</html>
