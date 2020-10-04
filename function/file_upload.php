<?php
session_start();
require '../config/config.php';	
require 'filter.php';
$id=$_SESSION['timkey'];
	//date_default_timezone_set('Asia/Manila');
	$day=date('l');
	$month=date('F');
	$daynum=date("d");
	$year=date('Y');
	$time = date('H:i:s A');
	$date=$day.", ".$month." ".$daynum.",".$year;

$query=mysql_query("select * from student where student_id='$id' ");
if($num=mysql_num_rows($query)>0)
{
	$row=mysql_fetch_assoc($query);
	$name=$row['firstname'];
	$lastname=$row['lastname'];
	$course=$row['course'];
	$section=$row['section'];
	$year=$row['year'];
	$ins_id=$row['instructor_id'];
}
else
{
	header("location: ../index.php?Unauthorize_access!");
}

if (!isset($_FILES['files']['tmp_name']))
{
	 
	echo "<script type='text/javascript'>
				alert('Please select file');
				window.location='../students/upload.php';
				</script>";
	}
	else
	{
		$allowedExts = array("swf");
		$ImageName  = str_replace(' ','-',strtolower($_FILES['files']['name']));
		$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
		$ImageExt = str_replace('.','',$ImageExt);
		if(!in_array($ImageExt, $allowedExts))
    {
        echo "<script type='text/javascript'>
				alert('Please choose an swf file!');
				window.location='../students/upload.php';
				
				</script>";
    }
	else{
	
		$file=$_FILES['files']['tmp_name'];
		$image= addslashes(file_get_contents($_FILES['files']['tmp_name']));
		$image_name= addslashes($_FILES['files']['name']);
		$image_size= getimagesize($_FILES['files']['tmp_name']);

		if ($image_size==FALSE) 
		{
		
			echo "That's not an swf file!";
			
		}
		else
		{
			$thumb_dir = "../activity/";
			$img_dir = "../activity/";
			$res=mysql_query("select * from file_activity where activity='$image_name'") or die("Error");
			$row=mysql_fetch_assoc($res);
		if($num=mysql_num_rows($res)>0)
		{
				echo "<script type='text/javascript'>
		alert('File already exists');
		window.location='../students/upload.php';
	</script>";

		}
			else
				{

					$location=$_FILES["files"]["name"];
					move_uploaded_file($_FILES["files"]["tmp_name"],"../activity/" . $_FILES["files"]["name"]);

					mysql_query("insert into file_activity (student_id, instructor_id, name, course_section, activity, time, date) values ('$id', '$ins_id', '$name $lastname', '$course $year-$section', '$location', '$time', '$date')") or die ("Error");
					echo "<script type='text/javascript'>
						alert('File was uploaded successfully');
						window.location='../students/upload.php';
					</script>";
				}
		}
		}
		
	}

?>