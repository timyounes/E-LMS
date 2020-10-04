<?php
session_start();
require '../config/config.php';	
require 'filter.php';
$id=$_SESSION['timkey'];
if(isset($_POST['save']))
{
	$firstname=tim($_POST['firstname']);
	$lastname=tim($_POST['lastname']);
	$mobile=tim($_POST['mobile']);
	$email=tim($_POST['email']);
	$username=tim($_POST['username']);
	
	
	
	if (mysql_query("update student set username='$username', firstname='$firstname', lastname='$lastname', mobile='$mobile', email='$email' where student_id='$id'"))
	{
		header("location:../students/myprofile.php?updated");
		$_SESSION["success"]='true';
	}
	else
	{
				echo "<script type='text/javascript'>
			alert('Error');
		</script>";
		header("location:../students/myprofile.php?updated");
	}
	
}
else
{
	//header("location:../timlogin.php");
}

?>