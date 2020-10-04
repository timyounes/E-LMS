<?php
	session_start();
	require'../config/config.php';
	require 'filter.php';
if (isset($_SESSION['timkey']))
{
	$day=date('l');
	$month=date('F');
	$daynum=date("d");
	$year=date('Y');
	$time = date('H:i:s A');
	$date=$day.", ".$month." ".$daynum.",".$year;
	$id=$_SESSION['timkey'];
	$ans1=strtoupper(tim($_POST['answer1']));
	$ans2=strtoupper(tim($_POST['answer2']));
	$ans3=strtoupper(tim($_POST['answer3']));
	$ans4=strtoupper(tim($_POST['answer4']));
	$ans5=strtoupper(tim($_POST['answer5']));
	$ans6=strtoupper(tim($_POST['answer6']));
	$ans7=strtoupper(tim($_POST['answer7']));
	$count=0;
	$query=mysql_query("select * from quiz where activity_type='QUIZ2'") or die (mysql_error());
	$num=mysql_num_rows($query);
	$row=mysql_fetch_assoc($query);
	$que=mysql_query("select * from student where student_id='$id'") or die (mysql_error());
	$rows=mysql_fetch_assoc($que);
	$instructor_id=$rows['instructor_id'];
	if($num>0)
	{
		if($row['answer']==$ans1)
		{
			$count=$count+1;
		}
		if($ans2=='LAYER' || $ans2=='layer')
		{
			$ans2="LAYERS";
			if($row['answer2']==$ans2)
			{
				$count=$count+1;
			}
		}

		if($row['answer3']==$ans3)
		{
			$count=$count+1;
		}
		if($row['answer4']==$ans4)
		{
			$count=$count+1;
		}
		if($row['answer5']==$ans5)
		{
			$count=$count+1;
		}
		if($ans6=='PANELS' || $ans6=='panels')
		{
			$ans6="PANEL";
			if($row['answer6']==$ans6)
			{
				$count=$count+1;
			}
		}

		if($row['answer7']==$ans7)
		{
			$count=$count+1;
		}
		if($count>=5)
		{
			$status="PASSED";
		}
		else
		{
			$status="FAILED";
		}
		
	}
	if(mysql_query("insert into quiz_result (student_id, type, status, points, num_question, date, time, instructor_id)values('$id', 'QUIZ2','$status','$count','7', '$date', '$time', '$instructor_id')"))
	{
		header("location:../students/quiz2.php?msg=$status");
		$_SESSION["success"]='true';
	}
	else
	{
		header("location:../students/quiz2.php");
		$_SESSION["success"]='false';		
	}
}

?>