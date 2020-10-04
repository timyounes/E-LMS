<?php
session_start();
require '../config/config.php';
if (isset($_SESSION['timkey']))
{
	$id=$_GET['id'];

	if(mysql_query("delete from users where id='$id'"))
	{
		header("location:../administrator/manageusers.php?msg=succesfully_deleted");
		$_SESSION["success"]='true';
	}
	else
	{
		header("location:../administrator/manageusers.php");
		$_SESSION["success"]='false';		
	}
}


?>