<?php
session_start();
require '../config/config.php';
if (isset($_SESSION['timkey']))
{
	$id=$_GET['id'];

	if(mysql_query("delete from student where student_id='$id'"))
	{
		header("location:../instructors/student_records.php?msg=succesfully_deleted");
		$_SESSION["success"]='true';
	}
	else
	{
		header("location:../instructors/student_records.php?Action Failed");
		$_SESSION["success"]='false';		
	}
}

?>