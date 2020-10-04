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
<body class="page-header-fixed page-sidebar-closed">
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
				<!--a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-warning"></i>
					<span class="badge">
						 6
					</span>
				</a>
				<ul class="dropdown-menu extended notification">
					<li>
						<p>
							 You have 14 new notifications
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
									<span class="label label-icon label-success">
										<i class="fa fa-plus"></i>
									</span>
									 New user registered.
									<span class="time">
										 Just now
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="label label-icon label-danger">
										<i class="fa fa-bolt"></i>
									</span>
									 Server #12 overloaded.
									<span class="time">
										 15 mins
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="label label-icon label-warning">
										<i class="fa fa-bell-o"></i>
									</span>
									 Server #2 not responding.
									<span class="time">
										 22 mins
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="label label-icon label-info">
										<i class="fa fa-bullhorn"></i>
									</span>
									 Application error.
									<span class="time">
										 40 mins
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="label label-icon label-danger">
										<i class="fa fa-bolt"></i>
									</span>
									 Database overloaded 68%.
									<span class="time">
										 2 hrs
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="label label-icon label-danger">
										<i class="fa fa-bolt"></i>
									</span>
									 2 user IP blocked.
									<span class="time">
										 5 hrs
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="label label-icon label-warning">
										<i class="fa fa-bell-o"></i>
									</span>
									 Storage Server #4 not responding.
									<span class="time">
										 45 mins
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="label label-icon label-info">
										<i class="fa fa-bullhorn"></i>
									</span>
									 System Error.
									<span class="time">
										 55 mins
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="label label-icon label-danger">
										<i class="fa fa-bolt"></i>
									</span>
									 Database overloaded 68%.
									<span class="time">
										 2 hrs
									</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">
							 See all notifications <i class="m-icon-swapright"></i>
						</a>
					</li>
				</ul>
			</li>
			<!-- END NOTIFICATION DROPDOWN -->
			<!-- BEGIN INBOX DROPDOWN -->
			<!--li class="dropdown" id="header_inbox_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-envelope"></i>
					<span class="badge">
						 5
					</span>
				</a>
				<ul class="dropdown-menu extended inbox">
					<li>
						<p>
							 You have 12 new messages
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="inbox.html?a=view">
									<span class="photo">
										<img src="./assets/img/avatar2.jpg" alt=""/>
									</span>
									<span class="subject">
										<span class="from">
											 Lisa Wong
										</span>
										<span class="time">
											 Just Now
										</span>
									</span>
									<span class="message">
										 Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh...
									</span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
									<span class="photo">
										<img src="./assets/img/avatar3.jpg" alt=""/>
									</span>
									<span class="subject">
										<span class="from">
											 Richard Doe
										</span>
										<span class="time">
											 16 mins
										</span>
									</span>
									<span class="message">
										 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
									</span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
									<span class="photo">
										<img src="./assets/img/avatar1.jpg" alt=""/>
									</span>
									<span class="subject">
										<span class="from">
											 Bob Nilson
										</span>
										<span class="time">
											 2 hrs
										</span>
									</span>
									<span class="message">
										 Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh...
									</span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
									<span class="photo">
										<img src="./assets/img/avatar2.jpg" alt=""/>
									</span>
									<span class="subject">
										<span class="from">
											 Lisa Wong
										</span>
										<span class="time">
											 40 mins
										</span>
									</span>
									<span class="message">
										 Vivamus sed auctor 40% nibh congue nibh...
									</span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
									<span class="photo">
										<img src="./assets/img/avatar3.jpg" alt=""/>
									</span>
									<span class="subject">
										<span class="from">
											 Richard Doe
										</span>
										<span class="time">
											 46 mins
										</span>
									</span>
									<span class="message">
										 Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh...
									</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="inbox.html">
							 See all messages <i class="m-icon-swapright"></i>
						</a>
					</li>
				</ul>
			</li>
			<!-- END INBOX DROPDOWN -->
			<!-- BEGIN TODO DROPDOWN -->
			<!--li class="dropdown" id="header_task_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-tasks"></i>
					<span class="badge">
						 5
					</span>
				</a>
				<ul class="dropdown-menu extended tasks">
					<li>
						<p>
							 You have 12 pending tasks
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
									<span class="task">
										<span class="desc">
											 New release v1.2
										</span>
										<span class="percent">
											 30%
										</span>
									</span>
									<span class="progress">
										<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 40% Complete
											</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="task">
										<span class="desc">
											 Application deployment
										</span>
										<span class="percent">
											 65%
										</span>
									</span>
									<span class="progress progress-striped">
										<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 65% Complete
											</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="task">
										<span class="desc">
											 Mobile app release
										</span>
										<span class="percent">
											 98%
										</span>
									</span>
									<span class="progress">
										<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 98% Complete
											</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="task">
										<span class="desc">
											 Database migration
										</span>
										<span class="percent">
											 10%
										</span>
									</span>
									<span class="progress progress-striped">
										<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 10% Complete
											</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="task">
										<span class="desc">
											 Web server upgrade
										</span>
										<span class="percent">
											 58%
										</span>
									</span>
									<span class="progress progress-striped">
										<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 58% Complete
											</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="task">
										<span class="desc">
											 Mobile development
										</span>
										<span class="percent">
											 85%
										</span>
									</span>
									<span class="progress progress-striped">
										<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 85% Complete
											</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="task">
										<span class="desc">
											 New UI release
										</span>
										<span class="percent">
											 18%
										</span>
									</span>
									<span class="progress progress-striped">
										<span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
											<span class="sr-only">
												 18% Complete
											</span>
										</span>
									</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">
							 See all tasks <i class="m-icon-swapright"></i>
						</a>
					</li>
				</ul>
			</li>
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

					<!--li>
						<a href="inbox.html">
							<i class="fa fa-envelope"></i> My Inbox
							<span class="badge badge-danger">
								 3
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-tasks"></i> My Tasks
							<span class="badge badge-success">
								 7
							</span>
						</a>
					</li-->
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

				<li class="tooltips active" data-container="body" data-placement="right" data-html="true" data-original-title="View All Student Records">
					<a href="student_activities.php">
						<i class="glyphicon glyphicon-folder-open"></i>
						<span class="title">
							Students Activities
						</span>
						<span class="selected">
						</span>
					</a>
					</li>

<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="View All Student Activities">
<a href="student_files.php">
<i class="fa fa-upload"></i>
<span class="title">
Uploaded Activities
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
				<!--li class="tooltips active" data-container="body" data-placement="right" data-html="true" data-original-title="">
					<a href="javascript:;">
						<i class="fa fa-users"></i>
						<span class="title">
							Manage Users
						</span>
						<span class="selected">
						</span>
						<span class="arrow open">
						</span>
					</a>
					<ul class="sub-menu">
						<li class="tooltips active" data-container="body" data-placement="right" data-html="true" data-original-title="View Instructors Record">
							<a href="manageusers.php">
							<i class="fa fa-list"></i>
								<span class="title">
									Instructors
								</span>
							</a>
						</li>
						<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="View Students Record">
							<a href="students.php">
							<i class="fa fa-list"></i>
								<span class="title">
									Students
								</span>
							</a>
						</li>
					</ul>
				</li-->
				<!--li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="View Lessons">
					<a href="">
						<i class="fa fa-book"></i>
						<span class="title">
							Lessons
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
					Student Records<small></small>
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
							<a href="student_activities.php">
								Student Activities
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
								<i class="fa fa-edit"></i>Student Activities
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
									 Photo
								</th>
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
									Activity 1
								</th>
								<th class='center'>
									 Activity 2
								</th>
								<th class='center'>
									 Activity 3
								</th>
								<th class='center'>
									 Activity 4
								</th>
								<th class='center'>
									 Activity 5
								</th>
								<th class='center'>
									 Action
								</th>
							</tr>
							</thead>
						<tbody>
			<?php

					$query=mysql_query("select evaluation.id, evaluation.activity1, evaluation.activity2, evaluation.activity3, 
						evaluation.activity4, evaluation.activity5, student.student_id, student.fullname, student.course, student.year,
						 student.section, student.profilepic from evaluation left join student on evaluation.student_id=student.student_id")or die(mysql_error());
					if($num=mysql_num_rows($query)>0)
					{
							
									while($rows=mysql_fetch_assoc($query))
									{
										$code=$rows['id'];

										?>
													<tr>
													<td class='center'>
													<img src="../students/images/profilepic/<?php echo $rows['profilepic'];?> " class='imgs'>
														</td>							
														<td class='center'>
															<?php echo $rows['student_id'];?>
														</td>
														<td class='center'>
															<?php echo $rows['fullname'];?>
														</td>
														<td class='center'>
															<?php echo $rows['course']." ".$rows['year']."-".$rows['section'];?>
														</td>
														<td class='center'>
															<?php 
															if($rows['activity1']=="INACTIVE")
															{
																?>
																<a href="../function/activate_activity.php?id=<?php echo $code;?>" class="btn blue tooltips" title="Activate"> 
																	<i class='glyphicon glyphicon-ok'></i></a>
															<?php
															}
															else
																echo  $rows['activity1'];
															?>
														</td>
														<td class='center'>
														<?php 
															if($rows['activity2']=="INACTIVE")
															{
																?>
																<a href="../function/activate_activity.php?id=<?php echo $code;?>" class="btn blue tooltips" title="Activate"> 
																	<i class='glyphicon glyphicon-ok'></i></a>
															<?php
															}
															else
																echo  $rows['activity2'];
															?>
														</td>
														<td class='center'>
														<?php 
															if($rows['activity3']=="INACTIVE")
															{
																?>
																<a href="../function/activate_activity.php?id=<?php echo $code;?>" class="btn blue tooltips" title="Activate"> 
																	<i class='glyphicon glyphicon-ok'></i></a>
															<?php
															}
															else
																echo  $rows['activity3'];
															?>
														</td>
														<td class='center'>
														<?php 
															if($rows['activity4']=="INACTIVE")
															{
																?>
																<a href="../function/activate_activity.php?id=<?php echo $code;?>" class="btn blue tooltips" title="Activate"> 
																	<i class='glyphicon glyphicon-ok'></i></a>
															<?php
															}
															else
																echo  $rows['activity4'];
															?>
														</td>
														<td class='center'>
														<?php 
															if($rows['activity5']=="INACTIVE")
															{
																?>
																<a href="../function/activate_activity.php?id=<?php echo $code;?>" class="btn blue tooltips" title="Activate"> 
																	<i class='glyphicon glyphicon-ok'></i></a>
															<?php
															}
															else
																echo  $rows['activity5'];
															?>
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
																	<a href="../function/delete_evaluation.php<?php echo '?id='.$code;?>" class="btn blue"> 
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
					<!--div class="portlet box blue" id="form_wizard_1">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> Create New Account For Instructor -
								<span class="step-title">
									 Step 1 of 3
								</span>
							</div>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
								</a>
								<!--a href="#portlet-config" data-toggle="modal" class="config">
								</a-->
								<!--a href="javascript:;" class="reload">
								</a>
								<!--a href="javascript:;" class="remove">
								</a-->
							<!--/div>
						</div>
						<div class="portlet-body form">
							<form action="" class="form-horizontal" id="submit_form" method="post">
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a href="#tab1" data-toggle="tab" class="step">
													<span class="number">
														 1
													</span>
													<span class="desc">
														<i class="fa fa-check"></i> Account Setup
													</span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
													<span class="number">
														 2
													</span>
													<span class="desc">
														<i class="fa fa-check"></i> Profile Setup
													</span>
												</a>
											</li>
											<!--li>
												<a href="#tab3" data-toggle="tab" class="step active">
													<span class="number">
														 3
													</span>
													<span class="desc">
														<i class="fa fa-check"></i> Billing Setup
													</span>
												</a>
											</li-->
											<!--li>
												<a href="#tab4" data-toggle="tab" class="step">
													<span class="number">
														 3
													</span>
													<span class="desc">
														<i class="fa fa-check"></i> Confirm
													</span>
												</a>
											</li>
										</ul>
										<div id="bar" class="progress progress-striped" role="progressbar">
											<div class="progress-bar progress-bar-success">
											</div>
										</div>
										<div class="tab-content">
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												You have some form errors. Please check below.
											</div>
											<div class="alert alert-success display-none">
												<button class="close" data-dismiss="alert"></button>
												Your form validation is successful!
											</div>
											<div class="tab-pane active" id="tab1">
												<h3 class="block">Provide your account details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Username
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="username"/>
														<span class="help-block">
															 Provide your username
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Password
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="password" class="form-control" name="password" id="submit_form_password"/>
														<span class="help-block">
															 Provide your password.
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Confirm Password
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="password" class="form-control" name="rpassword"/>
														<span class="help-block">
															 Confirm your password
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Email
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="email"/>
														<span class="help-block">
															 Provide your email address
														</span>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab2">
												<h3 class="block">Provide your profile details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Fullname
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="fullname"/>
														<span class="help-block">
															 Provide your fullname
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Mobile Number
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="phone"/>
														<span class="help-block">
															 Provide your mobile number
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<div class="radio-list">
															<label>
															<input type="radio" name="gender" value="M" data-title="Male"/>
															Male </label>
															<label>
															<input type="radio" name="gender" value="F" data-title="Female"/>
															Female </label>
														</div>
														<div id="form_gender_error">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Address
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="address"/>
														<span class="help-block">
															 Provide your street address
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City/Town
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="city"/>
														<span class="help-block">
															 Provide your city or town
														</span>
													</div>
												</div>
												

												<div class="form-group">
													<label class="control-label col-md-3">Remarks</label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="remarks"></textarea>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab3">
												<h3 class="block">Provide your billing and credit card details</h3>
												<div class="form-group">
													<label class="control-label col-md-3">Card Holder Name
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="card_name"/>
														<span class="help-block">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Card Number
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="card_number"/>
														<span class="help-block">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">CVC
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" placeholder="" class="form-control" name="card_cvc"/>
														<span class="help-block">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Expiration(MM/YYYY)
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<input type="text" placeholder="MM/YYYY" maxlength="7" class="form-control" name="card_expiry_date"/>
														<span class="help-block">
															 e.g 11/2020
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Payment Options
													<span class="required">
														 *
													</span>
													</label>
													<div class="col-md-4">
														<div class="checkbox-list">
															<label>
															<input type="checkbox" name="payment[]" value="1" data-title="Auto-Pay with this Credit Card."/> Auto-Pay with this Credit Card </label>
															<label>
															<input type="checkbox" name="payment[]" value="2" data-title="Email me monthly billing."/> Email me monthly billing </label>
														</div>
														<div id="form_payment_error">
														</div>
													</div>
												</div-->
											<!--/div>
											<div class="tab-pane" id="tab4">
												<h3 class="block">Confirm your account</h3>
												<h4 class="form-section">Account</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Username:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="username">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Email:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="email">
														</p>
													</div>
												</div>
												<h4 class="form-section">Profile</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Fullname:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="fullname">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="gender">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Mobile:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="phone">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Address:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="address">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City/Town:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="city">
														</p>
													</div>
												</div>
												<!--div class="form-group">
													<label class="control-label col-md-3">Country:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="country">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Remarks:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="remarks">
														</p>
													</div>
												</div>
												<h4 class="form-section">Billing</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Card Holder Name:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_name">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Card Number:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_number">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">CVC:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_cvc">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Expiration:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_expiry_date">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Payment Options:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="payment">
														</p>
													</div>
												</div-->
											<!--/div>
										</div>
									</div>
									<div class="form-actions fluid">
										<div class="row">
											<div class="col-md-12">
												<div class="col-md-offset-9 col-md-9">
													<a href="javascript:;" class="btn red button-previous">
														<i class="m-icon-swapleft"></i> Back
													</a>
													<a href="javascript:;" class="btn blue button-next">
														 Continue <i class="m-icon-swapright m-icon-white"></i>
													</a>
													<button type="submit" name="save" class="btn green button-submit">
														 Submit <i class="m-icon-swapright m-icon-white"></i></button>
													
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