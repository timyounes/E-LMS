<?php
session_start();
require'../config/config.php';
require 'filter.php';

	if (isset($_POST['signup']))
	{
		$firstname=tim($_POST['firstname']);
		$lastname=tim($_POST['lastname']);
		$mobile=tim($_POST['mobile']);
		$gender=tim($_POST['gender']);
		$address=tim($_POST['address']);
		$email=tim($_POST['email']);
		$username=tim($_POST['username']);
		$password=tim($_POST['password']);
		$cpassword=tim($_POST['cpassword']);
		$code=tim($_POST['vcode']);
		$logging="UNUSED";
		date_default_timezone_set('Asia/Manila');
		$day=date('l');
		$month=date('F');
		$daynum=date("d");
		$year=date('Y');
		$time = date('H:i:s A');
		$date=$day.", ".$month." ".$daynum.",".$year;

		$num=mysql_query("select username from users where username='$username' and verification_code='$code'");
			if(mysql_num_rows($num)==0)
			{
				if($password==$cpassword)
				{
					$password=sha1($password);
					$profilepic="avatar.jpg";
					$level="INSTRUCTOR";
					$status="UNACTIVE";
					$fullname=$firstname." ".$lastname;
				if(mysql_query("update users set fullname= '$fullname', firstname='$firstname', lastname='$lastname', mobile='$mobile', 
					gender='$gender', address='$address', username='$username', password='$password', 
					profilepic='$profilepic', level='$level', status='$status', logging='$logging'
					where email='$email' and verification_code='$code'"))
				{
					$stat="UNVIEW";
					$message= $firstname." ".$lastname." has already sign-up as instructor.";
					if(mysql_query("insert into notification_admin (message, date, time, status) values('$message', '$date', '$time', '$stat')"))
						{
							header("location:../signup_instructor.php?success");
						}
					else
					{
						header("location:../signup_instructor.php?Error");
					}
					
				}
			}
			else
			{
				header("location:../signup_instructor.php?password_mismatch@");
			}
		}
		else
		{

			header("location:../signup_instructor.php?username_already_exist@");

		}

	}

?>