<?php
session_start();
require '../config/config.php';
if (isset($_SESSION['timkey']))
{
	$id=$_GET['id'];

	if(mysql_query("delete from feedback where id='$id'"))
	{
		header("location:../administrator/feedback.php?msg=succesfully_deleted");
		$_SESSION["success"]='true';
	}
	else
	{
		header("location:../administrator/feedback.php");
		$_SESSION["success"]='false';		
	}
}


?>