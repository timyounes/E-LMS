<?php
session_start();
require '../config/config.php';
if (isset($_SESSION['timkey']))
{
	$id=$_GET['id'];

	if(mysql_query("delete from evaluation where id='$id'"))
	{
			echo "<script type='text/javascript'>
			alert('Data was successfully deleted!');
			window.location='../instructors/student_activities.php';
			</script>";	
	}
	else
	{
			echo "<script type='text/javascript'>
			alert('Unable to delete this data!');
			window.location='../instructors/student_activities.php';
			</script>";			
	}
}


?>