
<?php
require '../config/config.php';	
	function tim($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
			
		}
		return mysql_real_escape_string($str);
	}

if (isset($_POST['login'])) {
	$user=tim($_POST['username']);
	$pass=tim($_POST['password']);
	$logging= 'USED';
	$result=mysql_query("select * from users where username='$user' AND password=sha1('$pass')")or die (mysql_error());
	$count=mysql_num_rows($result);
	$row = mysql_fetch_assoc($result);
	if($row['logging']==$logging)
	{
/*		echo "<script type='text/javascript'>
		alert('Your account was not successfully log-out. Please logout your account first!');
		window.location='../admin/login_users.php';
		</script>";*/
		header("location:../administrator/myprofile.php?log-out your account");
		$_SESSION["success"]='true';
	}
	else
	{

	if ($count > 0)
		{	
			session_regenerate_id();
			session_start();
			
			$id=$row['id'];
			$level=$row['level'];
			$fname=$row['firstname'];
			$lname=$row['lastname'];
			$_SESSION['timkey']=$row['id'];
			$_SESSION['level']=$row['level'];
		
			session_write_close();
		//$_SESSION['username']=$row['username'];
		//$_SESSION['firstname']=$row['firstname'];
		//$_SESSION['lastname']=$row['lastname'];
		if(mysql_query("update users set logging='$logging' where id ='$id' "))
		{
			if($level=='ADMIN')
			{
				header("location:../administrator/myprofile.php");
				exit();
			}
			elseif ($level=='INSTRUCTOR')
			{
				header("location:../instructors/myprofile.php");
				exit();
			}

			else
			{
				header("location:../administrator/index.php");
				exit();	
			}
		}
	else
		{
			echo "<script type='text/javascript'>
				alert('There was a problem accessing to your account!');
				window.location='../administrator/index.php';
				</script>";
		}
	}

	else
		{
			echo "<script type='text/javascript'>
				window.location= '../administrator/index.php';
				alert('Invalid Data');
				</script>";
			//header("location:../admin/login_users.php");
		}
	}	
}
	else
		{
				header("location:../administrator/index.php");
				exit();
				$_SESSION["success"]='true';
		}

?>