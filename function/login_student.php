
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
	$result=mysql_query("select * from student where username='$user' AND password=sha1('$pass')")or die (mysql_error());
	$count=mysql_num_rows($result);
	$row = mysql_fetch_assoc($result);

	if($row['logging']==$logging)
	{
		echo "<script type='text/javascript'>
		alert('Someone currently using this account!');
		window.location='../userslogin.php';
		</script>";
	}
	else
	{
	
		if ($count > 0)
		{	
		
			session_regenerate_id();
			session_start();

			$id=$row['student_id'];
			$fname=$row['firstname'];
			$lname=$row['lastname'];
			$_SESSION['timkey']=$row['student_id'];
			$_SESSION['level']=$row['level'];
			$_SESSION['name']=$row['firstname'];
			$_SESSION['lastname']=$row['lastname'];
			$_SESSION['course']=$row['course'];
			$_SESSION['section']=$row['section'];
			$_SESSION['year']=$row['year'];

			session_write_close();
		if(mysql_query("update student set logging='$logging' where student_id ='$id' "))
		{
			if($_SESSION['timkey']==$row['student_id'])
			{
				header("location:../students/myprofile.php");
				exit();
			}
			else
			{
				$_SESSION["validate"]='false';
				header("location:../userlogin.php");
				
			}
		}
		else
		{
			echo "<script type='text/javascript'>
				alert('There was a problem accessing to your account!');
				window.location='../userslogin.php';
				</script>";
		}
	}
	else
		{
				$_SESSION["validate"]='false';
				header("location:../userslogin.php");
		}

}
}
	else
		{
				$_SESSION["validate"]='false';
				header("location:../userslogin.php");
				
		}

?>