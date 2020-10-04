<?php
if(mysql_connect ("127.0.0.1","root",""))
{
	if(mysql_select_db ("eloms"))
	{

	}
	else
	{
		header("location:../error500.php");
		exit();
	}
}
else
{
	header("location:../error500.php");
	exit();
}

?>