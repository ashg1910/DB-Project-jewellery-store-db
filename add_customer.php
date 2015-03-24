<?php
ob_start();
session_start();

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$balance = 0;
$todayh = getdate();
$d = $todayh['mday'];
$m = $todayh['mon'];
$y = $todayh['year'];

$conn = mysql_connect('localhost', 'root', 'ashg123');
mysql_select_db('db_project', $conn);

$query = "INSERT INTO customer (Name, Phone, Address, balance, day, month, year) VALUES ('$name','$phone','$address','$balance','$d','$m','$y');"; 
$result = mysql_query($query);

echo 'Customer Added';
?>
<html>
  <head><title>Customer Added</title></head>
  <body><br /><a href="./cashier.php">Home</a></body>
</html>
