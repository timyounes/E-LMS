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

		$studentnumber=tim($_POST['studnumber']);
		$instructor=tim($_POST['instructor']);
		$course=tim($_POST['course']);
		$yearlevel=tim($_POST['year']);
		$section=tim($_POST['section']);
		$code=tim($_POST['vcode']);
		$logging='UNUSED';
		date_default_timezone_set('Asia/Manila');
		$day=date('l');
		$month=date('F');
		$daynum=date("d");
		$year=date('Y');
		$time = date('H:i:s A');
		$date=$day.", ".$month." ".$daynum.",".$year;

		if($course=="Select Your Course" || $year=="Select Year level" || $section=="Select Your Section" || $instructor=="Select Your Instructor's name")
		{
			header("location:../signup_student.php?Please complete all the information!");
		}
		else
		{
			$find=mysql_query("select * from student where email='$email' and student_id='$studentnumber' and verification_code='$code' and instructor_id='$instructor' ");
			$num=mysql_query("select * from student where username='$username' and student_id='$studentnumber'");
				if(mysql_num_rows($num)==0 && mysql_num_rows($find)>0)
				{
					if($password==$cpassword)
					{
						$password=sha1($password);
						$profilepic="avatar.jpg";
						$level="STUDENT";
						$status="UNACTIVE";
						$studnum=$studentnumber;
						$fullname=$firstname." ".$lastname;

						if(mysql_query("update student set username='$username', password ='$password', 
							fullname='$fullname', firstname='$firstname', lastname='$lastname', gender='$gender', 
							status='$status', mobile='$mobile', address='$address', profilepic='$profilepic',
							 course='$course', year='$yearlevel', section='$section', level='$level', logging='$logging' 
							 where email='$email' and student_id='$studentnumber' and verification_code='$code'"))
						{	
							$row=mysql_fetch_assoc($find);
							$instructor_id=$row['instructor_id'];
							$stat="UNVIEW";
							$message= $firstname." ".$lastname." has already sign-up as your student.";
							if(mysql_query("insert into notification_instructor (message, instructor_id, date, time, status) values('$message', '$instructor_id', '$date', '$time', '$stat')"))
								{
									if(mysql_query("insert into evaluation (instructor_id, student_id, activity1, activity2, activity3, activity4, activity5)values('$instructor_id', '$studentnumber', 'INACTIVE', 'INACTIVE', 'INACTIVE', 'INACTIVE', 'INACTIVE')"))
										{
											header("location:../signup_student.php?success");
										}
									else
									{
										header("location:../signup_student.php?Error");
									}
									
								}
							else
								{
									header("location:../signup_student.php?Error");
								}
						}
						else
						{
							header("location:../signup_student.php?Error@");
							
						}
				}
				else
				{
					header("location:../signup_student.php?password_mismatch!");
				}
				}
				else
				{
					header("location:../signup_student.php?username_or_studentnumber_exists_or_instructor_mismatch!");
				}	
		}



	}

?>