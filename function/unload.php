<?php
	require '../config/config.php';
	session_start();
	$id=$_SESSION['timkey'];
	$level=$_SESSION['level'];

	if($level=="ADMIN" || $level=="INSTRUCTOR")
	{

		$query=mysql_query("select logging from users where id='$id'") or die ("Error");
		if($num=mysql_num_rows($query)>0)
		{
			$row=mysql_fetch_assoc($query);
			if($row['logging']=="USED")
			{
				$log="UNUSED";
				if(mysql_query("update users set logging='$log' where id='$id'"))
				{
					echo"update";
				}
			}
		}
	}
	elseif ($level=="STUDENT")
	{
		$query=mysql_query("select logging from student where student_id='$id'") or die ("Error");
		if($num=mysql_num_rows($query)>0)
		{
			$row=mysql_fetch_assoc($query);
			if($row['logging']=="USED")
			{
				$log="UNUSED";
				if(mysql_query("update student set logging='$log' where student_id='$id'"))
				{
					echo"update";
				}
			}
		}
	}


?>