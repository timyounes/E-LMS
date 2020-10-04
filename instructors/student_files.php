<?php
session_start();
require '../function/confirm.php';
require '../config/config.php';

if($_SESSION['level']=='ADMIN')
{
header("location:../admin/index.php");
}
elseif($_SESSION['level']=='STUDENT')
{
header("location:../students/index.php");
}
if(isset($_GET['firstname']) && isset($_GET['id']) && isset($_GET['lastname']))
{
$fname=$_GET['firstname'];
$lname=$_GET['lastname'];
$id=$_GET['id'];
}
$id1=$_SESSION['timkey'];
$query=mysql_query("select * from users where id='$id1' ");
if($num=mysql_num_rows($query)>0)
{
$row=mysql_fetch_assoc($query);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$image=$row['profilepic'];
$status=$row['status'];

if($status=="ACTIVE")
{
header("location:../function/lock.php");
}
}
else
{
header("location: ../index.php?Unauthorize_access!");
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
<title>E-LMS-CvSUIC | Student Activities</title>
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
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../template/assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../template/assets/plugins/select2/select2-metronic.css"/>
<link rel="stylesheet" href="../template/assets/plugins/data-tables/DT_bootstrap.css"/>
<link href="../template/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="../template/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="../template/assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="../icon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
<!-- BEGIN TOP NAVIGATION BAR -->
<div class="header-inner">
<!-- BEGIN LOGO -->
<a class="navbar-brand" href="student_records.php">
<img src="../template/assets/img/cvsu_logo_small.png" alt="logo" class="img-responsive"/>
</a>
<!-- END LOGO -->
<!-- BEGIN RESPONSIVE MENU TOGGLER -->
<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<img src="../template/assets/img/menu-toggler.png" alt=""/>
</a>
<!-- END RESPONSIVE MENU TOGGLER -->
<!-- BEGIN TOP NAVIGATION MENU -->
<ul class="nav navbar-nav pull-right">
<!-- BEGIN NOTIFICATION DROPDOWN -->
<li class="dropdown" id="header_notification_bar">
<!-- END TODO DROPDOWN -->
<!-- BEGIN USER LOGIN DROPDOWN -->
<li class="dropdown user">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
<img alt="" class= "imgs" src="images/profilepic/<?php echo $image; ?>"/>
<span class="username">
<?php echo $firstname." ".$lastname;?>
</span>
<i class="fa fa-angle-down"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="myprofile.php">
<i class="fa fa-user"></i> My Profile
</a>
</li>


<li class="divider">
</li>
<li>
<a href="javascript:;" id="trigger_fullscreen">
<i class="fa fa-arrows"></i> Full Screen
</a>
</li>
<li>
<a href="../function/lock_process.php">
<i class="fa fa-lock"></i> Lock Screen
</a>
</li>
<li>
<a href="../function/logout.php">
<i class="fa fa-key"></i> Log Out
</a>
</li>
</ul>
</li>
<!-- END USER LOGIN DROPDOWN -->
</ul>
<!-- END TOP NAVIGATION MENU -->
</div>
<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
<div class="page-sidebar navbar-collapse collapse">
<!-- BEGIN SIDEBAR MENU -->
<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
<li class="sidebar-toggler-wrapper margin-bottom-20">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="sidebar-toggler hidden-phone">
</div>
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
</li>
<!--li class="sidebar-search-wrapper">
<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
<!--form class="sidebar-search" action="extra_search.html" method="POST">
<div class="form-container">
<div class="input-box">
<a href="javascript:;" class="remove">
</a>
<input type="text" placeholder="Search..."/>
<input type="button" class="submit" value=" "/>
</div>
</div>
</form>
<!-- END RESPONSIVE QUICK SEARCH FORM >
</li-->
<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Manage your own account">
<a href="myprofile.php">
<i class="fa fa-user"></i>
<span class="title">
My Profile
</span>
</a>
</li>
<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="View All Student Records">
<a href="student_records.php">
<i class="fa fa-list-alt"></i>
<span class="title">
Students Records
</span>
<span class="selected">
</span>
</a>
</li>

<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="View All Student Records">
<a href="student_activities.php">
<i class="glyphicon glyphicon-folder-open"></i>
<span class="title">
Students Activities
</span>
</a>
</li>

<li class="tooltips active" data-container="body" data-placement="right" data-html="true" data-original-title="View All Student Activities">
<a href="student_files.php">
<i class="fa fa-upload"></i>
<span class="title">
Uploaded Activities
</span>
<span class="selected">
</span>
</a>
</li>
<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="View Quiz Records">
<a href="student_quiz.php">
<i class="fa fa-file"></i>
<span class="title">
Student Quiz
</span>
</a>
</li>
<!-- END SIDEBAR MENU -->
</div>
</div>
<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<div class="page-content">
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h4 class="modal-title">Modal title</h4>
</div>
<div class="modal-body">
Widget settings form goes here
</div>
<div class="modal-footer">
<button type="button" class="btn blue">Save changes</button>
<button type="button" class="btn default" data-dismiss="modal">Close</button>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

<!-- BEGIN PAGE HEADER-->
<div class="row">
<div class="col-md-12">
<!-- BEGIN PAGE TITLE & BREADCRUMB-->
<h3 class="page-title">
Student Files<small></small>
</h3>
<ul class="page-breadcrumb breadcrumb">
<!--li class="btn-group">
<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
<span>
Actions
</span>
<i class="fa fa-angle-down"></i>
</button>
<ul class="dropdown-menu pull-right" role="menu">
<li>
<a href="#">
Action
</a>
</li>
<li>
<a href="#">
Another action
</a>
</li>
<li>
<a href="#">
Something else here
</a>
</li>
<li class="divider">
</li>
<li>
<a href="#">
Separated link
</a>
</li>
</ul>
</li-->
<li>
<a href="student_files.php">
Student Uploaded Activities
</a>
</li>
<!--li>
<a href="manageusers.php">
Instructors
</a>
</li-->
</ul>
<!-- END PAGE TITLE & BREADCRUMB-->
</div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
<div class="col-md-12">
<div class="portlet box blue">
<div class="portlet-title">
<div class="caption">
<i class="fa fa-edit"></i>Activities
</div>
<div class="tools">
<a href="javascript:;" class="collapse">
</a>
<!--a href="#portlet-config" data-toggle="modal" class="config">
</a-->
<!--a href="javascript:;" class="reload">
</a>
<!--a href="javascript:;" class="remove">
</a-->
</div>
</div>
<div class="portlet-body">
<div class="table-toolbar">
<div id="student-modal" class="modal fade" tabindex="-1">
</div>
<!--div class="btn-group pull-right">
<button class="btn red dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
</button>
<ul class="dropdown-menu pull-right">
<li>
<a href="#">
Print
</a>
</li>
<li>
<a href="#">
Save as PDF
</a>
</li>
<li>
<a href="#">
Export to Excel
</a>
</li>
</ul>
</div-->
</div>

<table class='table table-striped table-hover table-bordered' id='sample_editable_1'>
<thead>
<tr>
<th class='center'>
Student No.
</th>
<th class='center'>
Full Name
</th>
<th class='center'>
Course/Year/Section
</th>
<th class='center'>
Date Uploaded
</th>
<th class='center'>
Time Uploaded
</th>
<th class='center'>
Activity File
</th>

<th class='center'>
Action
</th>
</tr>
</thead>
<tbody>
<?php

$query=mysql_query("select * from file_activity where instructor_id='$id1'")or die(mysql_error());
if($num=mysql_num_rows($query)>0)
{

while($rows=mysql_fetch_assoc($query))
{
$code=$rows['id'];

?>
<tr>							
<td class='center'>
<?php echo $rows['student_id'];?>
</td>
<td class='center'>
<?php echo $rows['name'];?>
</td>
<td class='center'>
<?php echo $rows['course_section'];?>
</td>
<td class='center'>
<?php echo $rows['date'];?>
</td>
<td class='center'>
<?php echo $rows['time'];?>
</td>
<td class='center'>
<a href="#ids<?php echo $code;?>" data-toggle="modal" class="btn blue tooltips" title="View Activity"> 
	<i class='glyphicon glyphicon-eye-open'></i></a>
			<div id="ids<?php echo $code;?>" class="modal fade modal-scroll container" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-hidden="true">
				<div class="modal-body">
					<h4 class="center">
					Your Activity
					</h4>
			<embed src="../activity/<?php echo $rows['activity'];?>" width="100%" height="500px" wmode="" type="application/x-shockwave-flash"></embed>
				</div>
		<div class="modal-footer">
		<div class="col-md-4 col-md-offset-4">
			<button type="button" data-dismiss="modal" class="btn red"><i class='fa fa-times'></i> Back</button>
		</div>
		</div>
	</div>
</td>
<td class='center'>
<a href="#id<?php echo $code;?>" data-toggle="modal" class="btn red tooltips" title="Delete Student's data"> 
<i class='glyphicon glyphicon-trash'></i></a>
<div id="id<?php echo $code;?>" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-hidden="true">
	<div class="modal-body">
<h4 class="center">
 ARE YOU SURE YOU WANT TO DELETE THIS DATA?
</h4>
</div>
<div class="modal-footer">
<div class="col-md-6">
<button type="button" data-dismiss="modal" class="btn red"><i class='fa fa-times'></i> Cancel</button>
</div>
<div class="col-md-6">
<a href="../function/delete_studfile.php<?php echo '?id='.$code;?>" class="btn blue"> 
<i class='glyphicon glyphicon-trash'></i> Delete this student</a>
</div>	
</div>
</div>
</td>
</tr>

<?php
}
}

?>

</tbody>

</table>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div-->
</div>
</div>
<!-- END PAGE CONTENT-->
</div>
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
<div class="footer-inner">
2014 &copy; E - LIMS by: Adhan Timothy Younes and Bruce Owen Baliber.
</div>
<div class="footer-tools">
<span class="go-top">
<i class="fa fa-angle-up"></i>
</span>
</div>
</div>
<!-- END FOOTER -->
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
<script type="text/javascript" src="../template/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="../template/assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="../template/assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="../template/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="../template/assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../template/assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../template/assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="../template/assets/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../template/assets/scripts/core/app.js"></script>
<script src="../template/assets/scripts/custom/form-wizard.js"></script>
<script src="../template/assets/scripts/custom/table-editable-instructor.js"></script>
<script src="../template/assets/scripts/custom/extended-modals.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
// initiate layout and plugins
App.init();
FormWizard.init();
TableEditable.init();
UIExtendedModals.init();
});
</script>

<script>
$(window).bind('unload', function(){
$.ajax({
type: 'get',
async: false,
url: '../function/unload.php'

});
});
</script>
<!-- END JAVASCRIPTS -->
<?php
if(isset($_SESSION["success"]))
{
if($_SESSION["success"]=='true')
{
echo "<script type='text/javascript'>
alert('Data has been successfully deleted');
</script>";
$_SESSION["success"]="";
}
}
?>
</body>
<!-- END BODY -->
</html>