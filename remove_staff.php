<?php
ob_start();
session_start();

$id = $_POST['id'];

$conn = mysql_connect('localhost', 'root', 'ashg123');
mysql_select_db('db_project', $conn);

$query = "SELECT * FROM staff_details WHERE id = '$id';";
$result = mysql_query($query);

if(mysql_num_rows($result) == 0)
{
	echo 'Wrong StaffId!';
}

else
{

	$sql = "DELETE FROM staff_details WHERE id='$id' ;";
	$result = mysql_query($sql);
	
	echo "Deleted Staff";
}
?>
<html><head><title>Removed Staff</title></head><body><br /><a href="./supervisor.php">Home</a></body></html>
