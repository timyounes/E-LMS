<?php
	session_start();
	if(isset($_SESSION['timkey'])) {

		if($_SESSION['level']=='ADMIN')
		{
		
			header("location:administrator/myprofile.php");
			exit();
		}
		
		elseif($_SESSION['level']=='STUDENT')
		{
			header("location:students/myprofile.php");
			exit();
		}
		elseif($_SESSION['level']=='INSTRUCTOR')
		{
			header("location:instructors/myprofile.php");	
			exit();		
		}
		else
		{
			echo "<script type='text/javascript'>
			history.back();
			</script>";
			exit();
		}
	}
?>