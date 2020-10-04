<?php
session_start();
require '../config/config.php';	
require 'filter.php';
$id=$_SESSION['timkey'];
if(isset($_POST['save']))
{
	$oldpass=tim($_POST['oldpass']);
	$password=tim($_POST['password']);
	$cpass=tim($_POST['cpass']);
	$query=mysql_query("select * from users where id='$id' and password=sha1('$oldpass')") or die("Error");
	if ($num=mysql_num_rows($query)>0)
	{
			if($password==$cpass)
			{
				if(mysql_query("update users set password=sha1('$cpass') where id='$id'"))
				{
				header("location:../instructors/myprofile.php?password_updated");
				$_SESSION["success"]='true';
				}
			}
			
			else
			{
					header("location:../instructors/myprofile.php?password_mismatch");
					$_SESSION["success"]='not';
			}
	}
	else
	{
	header("location:../instructors/myprofile.php?undifined_password");
	$_SESSION["success"]='nott';
		}
}
else
{
	//header("location:../tim.php");
}

?>