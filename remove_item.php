<?php
ob_start();
session_start();

$item_id = $_POST['item_code'];

$conn = mysql_connect('localhost', 'root', 'ashg123');
mysql_select_db('db_project', $conn);

$query = "SELECT * FROM item_details WHERE Id = '$item_id';";
$result = mysql_query($query);

if(mysql_num_rows($result) == 0) 
{
	echo 'Wrong ItemId!';
}

else
{

	$sql = "DELETE FROM item_details WHERE Id='$item_id';";
	$result = mysql_query($sql);
	$sql = "DELETE FROM config_menu WHERE item_code='$item_id';";
	$result = mysql_query($sql);
	$sql = "DELETE FROM weight_details WHERE item_code='$item_id';";
	$result = mysql_query($sql);

	
   	echo "Item removed successfully";

}
?>
<html>
  <head><title>Item Removed</title></head>
  <body><br /><a href="supervisor.php">Home</a></body>
<html>
