<?php
require '../config/config.php';	
require 'filter.php';

if(isset($_POST['send']))
{
	$name=tim($_POST['name']);
	$email=tim($_POST['email']);
	$message=tim($_POST['message']);

	date_default_timezone_set('Asia/Manila');
	$day=date('l');
	$month=date('F');
	$daynum=date("d");
	$year=date('Y');
	$time = date('H:i:s A');
	$date=$day.", ".$month." ".$daynum.",".$year;

	if(mysql_query("insert into feedback(name, email, message, date, time) values('$name', '$email', '$message', '$date', '$time')"))
	{
        echo "<script type='text/javascript'>
        alert('Thank you for your feedback!');
        window.location= '../contact.php'
        </script>";
	}
	else
	{
		echo "<script type='text/javascript'>
        alert('There is an error during sending your feedback!');
        window.location= '../contact.php'
        </script>";
	}
}
?>