<?php
ob_start();
session_start();

$staff_Id = $_POST['staff_id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$department = $_POST['department'];

$conn = mysql_connect('localhost', 'root', 'ashg123');
mysql_select_db('db_project', $conn);

$query = "SELECT id FROM staff_details WHERE id='$staff_Id' ; ";
$result = mysql_query($query);

if(mysql_num_rows($result) == 0) // User not found. So, redirect to login_form again.
{
	$query = "INSERT INTO staff_details (id,Name,Phone,Address,Salary,Department) VALUES ('$staff_Id','$name','$phone','$address','$salary','$department');";
	$result = mysql_query($query);
}

else
{
	$sql = "UPDATE staff_details SET Name='$name' , Phone='$phone', Address='$address', Salary='$salary', Department='$department' WHERE id='$staff_Id';";
	$result = mysql_query($sql);
	
}

echo "Updated Staff $name";

?>
<html>
  <head>
    <title>Staff Update</title>
  </head>
  <body>
    <br />
    <a href="./supervisor.php">Home</a>
  </body>
</html>
