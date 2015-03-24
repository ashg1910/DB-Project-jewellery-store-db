<?php
	ob_start();
	session_start();

	$username = $_POST['username'];
	$password_old = $_POST['current_password'];
	$password_new = $_POST['new_password'];
	$password_new_confirm = $_POST['confirm_new_password'];

	$con = mysql_connect('localhost', 'root', 'ashg123');
	mysql_select_db('db_project', $con);

	$username = mysql_real_escape_string($username);
	$query = "SELECT uid, pwd FROM login WHERE uid = '$username';";
	$result = mysql_query($query);

	if(mysql_num_rows($result) == 0)
	{
		echo 'Username not found!!';
	}	
	else
	{
		$userData = mysql_fetch_array($result, MYSQL_ASSOC);
		$code = md5($password_old);

		if($code != $userData['pwd'])
		{
			echo 'Current Password Incorrect';
		}
		else
		{
			if($password_new != $password_new_confirm)
			{
				echo 'New password mismatch! Try Again';
			}
			else
			{
				$code = md5($password_new);
				$query = "UPDATE login SET pwd = '$code' WHERE uid = '$username';";
				$result = mysql_query($query);
				if(!$result)
				{
					echo 'MYSQL ERROR';
				}
				else
				{
					session_regenerate_id();
					$_SESSION['sess_username'] = $userData['username'];
					session_write_close();
					header("Location: $username.php");
				}
			}
		}
	}
?>
