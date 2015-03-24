<?php
ob_start();
session_start();

$commodity = $_POST['commodity'];
$rate = $_POST['rate'];

$conn = mysql_connect('localhost', 'root', 'ashg123');
mysql_select_db('db_project', $conn);

$query = "SELECT rate FROM commodity_rate WHERE type = '$commodity';";
$result = mysql_query($query);

if(mysql_num_rows($result) == 0) 
{
	$query = "INSERT INTO commodity_rate (type, rate) VALUES ('$commodity', '$rate');";
	$result = mysql_query($query);
}

else
{

	$sql = "UPDATE commodity_rate SET rate='$rate' WHERE type='$commodity';";
	$result = mysql_query($sql);

}

echo "$commodity rate updated";
?>
<html><head><title>Commodity Rate Updated</title></head><body><br /><a href="./supervisor.php">Home</a></body></html>
