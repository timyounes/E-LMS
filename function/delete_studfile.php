<?php
session_start();
require '../config/config.php';
if (isset($_SESSION['timkey']))
{
	$id=$_GET['id'];

	if(mysql_query("delete from file_activity where id='$id'"))
	{
		header("location:../instructors/student_files.php?msg=succesfully_deleted");
		$_SESSION["success"]='true';
	}
	else
	{
		header("location:../instructors/student_files.php?msg=Action_failed");
		$_SESSION["success"]='false';		
	}
}


?>