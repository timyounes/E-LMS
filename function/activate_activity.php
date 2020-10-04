<?php
session_start();
require '../config/config.php';
if (isset($_SESSION['timkey']))
{
	$id=$_GET['id'];
	$query=mysql_query("select * from evaluation where id='$id'") or die(mysql_error());
	if($num=mysql_num_rows($query)>0)
	{
		$row=mysql_fetch_assoc($query);
		if($row['activity1']=="INACTIVE")
		{

			if(mysql_query("update evaluation set activity1='ACTIVATED' where id='$id'"))
			{
				echo "<script type='text/javascript'>
				alert('ACTIVATED');
				window.location='../instructors/student_activities.php';
				</script>";
			}
			else
			{
			echo "<script type='text/javascript'>
			alert('Unsuccessfull process!');
			window.location='../instructors/student_activities.php';
			</script>";		
			}
		}
		elseif($row['activity2']=="INACTIVE")
		{

			if(mysql_query("update evaluation set activity2='ACTIVATED' where id='$id'"))
			{
				echo "<script type='text/javascript'>
				alert('ACTIVATED');
				window.location='../instructors/student_activities.php';
				</script>";
			}
			else
			{
			echo "<script type='text/javascript'>
			alert('Unsuccessfull process!');
			window.location='../instructors/student_activities.php';
			</script>";		
			}
		}
		elseif($row['activity3']=="INACTIVE")
		{

			if(mysql_query("update evaluation set activity3='ACTIVATED' where id='$id'"))
			{
				echo "<script type='text/javascript'>
				alert('ACTIVATED');
				window.location='../instructors/student_activities.php';
				</script>";
			}
			else
			{
			echo "<script type='text/javascript'>
			alert('Unsuccessfull process!');
			window.location='../instructors/student_activities.php';
			</script>";		
			}
		}
		elseif($row['activity4']=="INACTIVE")
		{

			if(mysql_query("update evaluation set activity4='ACTIVATED' where id='$id'"))
			{
				echo "<script type='text/javascript'>
				alert('ACTIVATED');
				window.location='../instructors/student_activities.php';
				</script>";
			}
			else
			{
			echo "<script type='text/javascript'>
			alert('Unsuccessfull process!');
			window.location='../instructors/student_activities.php';
			</script>";		
			}
		}
		elseif($row['activity5']=="INACTIVE")
		{

			if(mysql_query("update evaluation set activity5='ACTIVATED' where id='$id'"))
			{
				echo "<script type='text/javascript'>
				alert('ACTIVATED');
				window.location='../instructors/student_activities.php';
				</script>";
			}
			else
			{
			echo "<script type='text/javascript'>
			alert('Unsuccessfull process!');
			window.location='../instructors/student_activities.php';
			</script>";		
			}
		}
		else
		{
			echo "<script type='text/javascript'>
			alert('No data found!');
			window.location='../instructors/student_activities.php';
			</script>";		
			
		}
	}
	else
	{
		echo "<script type='text/javascript'>
		alert('No data found!');
		window.location='../instructors/student_activities.php';
		</script>";
	}
}


?>