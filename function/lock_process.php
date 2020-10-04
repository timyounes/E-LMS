<?php
	session_start();
	require 'confirm.php';
	require '../config/config.php';
	$id1=$_SESSION['timkey'];
	$lock="ACTIVE";

	if($_SESSION['level']=="ADMIN" || $_SESSION['level']=="INSTRUCTOR")
	{
		if (mysql_query("update users set status='$lock' where id='$id1' "))
		{
			header("location:lock.php");
		}
		else
		{
			echo mysql_error();
		}
	}
	else
	{
		if (mysql_query("update student set status='$lock' where student_id='$id1' "))
		{
			header("location:lock_student.php");
		}
		else
		{
			echo mysql_error();
		}
	}
?>