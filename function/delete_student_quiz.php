<?php
session_start();
require '../config/config.php';
if (isset($_SESSION['timkey']))
{
	$id=$_GET['id'];

	if(mysql_query("delete from quiz_result where num_id='$id'"))
	{
		header("location:../instructors/student_quiz.php?msg=succesfully_deleted");
		$_SESSION["success"]='true';
	}
	else
	{
		header("location:../instructors/student_quiz.php?Action Failed");
		$_SESSION["success"]='false';		
	}
}


?>