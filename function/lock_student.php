<?php
session_start();
require '../function/confirm.php';
require '../config/config.php';
require 'filter.php';

if(isset($_GET['firstname']) && isset($_GET['id']) && isset($_GET['lastname']))
{
	$fname=$_GET['firstname'];
	$lname=$_GET['lastname'];
	$id=$_GET['id'];
}

$id1=$_SESSION['timkey'];

$querys=mysql_query("select * from student where student_id='$id1'") or die("Error");

if($nums=mysql_num_rows($querys)>0)
{
	$rows=mysql_fetch_assoc($querys);
	$firstname=$rows['firstname'];
	$lastname=$rows['lastname'];
	$email=$rows['email'];
	$image=$rows['profilepic'];
	$ids=$rows['student_id'];
}

?>
<?php
	if(isset($_POST['unlock']))
	{
		$password=sha1(tim($_POST['password']));
		$query=mysql_query("select * from student where password='$password' and student_id='$id1' ") or die(mysql_error());
		if($num=mysql_num_rows($query)>0)
		{
			$lock="UNACTIVE";
			if (mysql_query("update student set status='$lock' where student_id='$id1' "))
				{
					
					header("location:../students/index.php");
				}
			else
			{
				header("location:lock_student.php?User does not exist!");
			}
		}
		else
		{
			header("location:lock_student.php?Incorrect password!");
		}
	}
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>ILMS-CvSUIC | Lock Screen Page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../template/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="../template/assets/css/pages/lock.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="../icon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
<div class="page-lock">
	<div class="page-logo">
		<a class="brand" href="lock.php">
			<img src="../template/assets/img/cvsu_logo.png" alt="logo"/>
		</a>
	</div>
	<div class="page-body">
		<img class="page-lock-img" src="../students/images/profilepic/<?php echo $image;?>" alt="">

		<div class="page-lock-info">
			<h1><?php echo $firstname." ".$lastname;?></h1>
			<span class="email">
				 <?php echo $email;?>
			</span>
			<span class="locked">
				 Account is currently locked
			</span>
			<form class="form-inline" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
				<div class="input-group input-medium">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="password" class="form-control" placeholder="Password" name="password" required>
					<span class="input-group-btn">
						<button name="unlock" type="submit" class="btn blue icn-only tooltips" title="Unlock"><i class="fa fa-key"></i></button>
					</span>
				</div>
				<!-- /input-group -->
				<div class="relogin">
					<a href="../function/logout.php">
						 Not <?php echo $firstname." ".$lastname;?> ?
					</a>
				</div>
			</form>
		</div>
	</div>
	<div class="page-footer">
	<p class="center">
		  2014 &copy; ILMS - CvSUIC by: Adhan Timothy Younes and Bruce Owen Baliber.
	</p>
	</div>
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../template/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../template/assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="../template/assets/scripts/core/app.js"></script>
<script src="../template/assets/scripts/custom/lock.js"></script>
<script>
jQuery(document).ready(function() {    
   App.init();
   Lock.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>