<?php
session_start();
	require 'confirm.php';
	require '../config/config.php';
	$id1=$_SESSION['timkey'];
	$lock="UNACTIVE";
	$logging="UNUSED";

	if($_SESSION['level']=="ADMIN" || $_SESSION['level']=="INSTRUCTOR")
	{

		if (mysql_query("update users set status='$lock', logging='$logging' where id='$id1' "))
		{
			session_destroy();
			session_unset();
			header("location:../administrator/index.php");
		}
		else
		{
			echo mysql_error();
		}

	}
	else
	{
		if (mysql_query("update student set status='$lock', logging ='$logging' where student_id='$id1' "))
		{
			session_destroy();
			session_unset();
			header("location:../userslogin.php");
		}
		else
		{
			echo mysql_error();
		}
	}

?>