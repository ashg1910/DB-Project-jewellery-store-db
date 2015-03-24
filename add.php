<?php
ob_start();
session_start();

$item_id = $_POST['Item_Id'];
$quantity = $_POST['Quantity'];
$category = $_POST['Category'];
	$gross_weight = $_POST['Gross_weight'];
	$reduction_weight = $_POST['Reduction_weight'];
$wastage = $_POST['Wastage'];
$making_charge = $_POST['Making_charge'];
$description = $_POST['Description'];

$conn = mysql_connect('localhost', 'root', 'ashg123');
mysql_select_db('db_project', $conn);

$net_weight = $gross_weight - $reduction_weight;

$query = "INSERT INTO item_details (Id,Quantity,Category,short_description) VALUES ('$item_id','$quantity','$category','$description');"; 
$result = mysql_query($query);
$query = "INSERT INTO config_menu (item_code,making,wastage) VALUES ('$item_id','$making_charge','$wastage'); ";
$result = mysql_query($query);
$query = "INSERT INTO weight_details (Net,Gross,Reduction,item_code) VALUES ('$net_weight','$gross_weight','$reduction_weight','$item_id'); ";
$result = mysql_query($query);
echo 'Item Added';
  
?>
<html>
  <head><title>Item Added</title></head>
  <body>
  <br />
  <a href="./supervisor.php">Home</a>
  </body>
</html>
