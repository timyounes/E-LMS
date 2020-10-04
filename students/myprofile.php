<?php
session_start();
require '../function/confirm.php';
require '../config/config.php';

if(isset($_GET['firstname']) && isset($_GET['id']) && isset($_GET['lastname']))
{
	$fname=$_GET['firstname'];
	$lname=$_GET['lastname'];
	$id=$_GET['student_id'];
}
$id1=$_SESSION['timkey'];
$query=mysql_query("select * from student where student_id='$id1' ");
if($num=mysql_num_rows($query)>0)
{
	$row=mysql_fetch_assoc($query);
	$firstname=$row['firstname'];
	$lastname=$row['lastname'];
	$image=$row['profilepic'];
	$username=$row['username'];
	$mobile=$row['mobile'];
	$email=$row['email'];
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
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-STORE">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-STORE">
<meta http-equiv="EXPIRES" content="0">
<meta charset="utf-8"/>
<title>E-LMS-CvSUIC | Admin Profile</title>
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
<link rel="stylesheet" type="text/css" href="../template/assets/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<link rel="stylesheet" type="text/css" href="../template/assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../template/assets/plugins/select2/select2-metronic.css"/>
<link rel="stylesheet" type="text/css" href="../template/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="../template/assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../template/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="../template/assets/css/pages/profile.css" rel="stylesheet" type="text/css"/>
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
		<a class="navbar-brand" href="myprofile.php">
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
			<!--li class="dropdown" id="header_notification_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
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
					<img alt="" src="images/profilepic/<?php echo $image; ?>" class="imgs" />
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
				<li class="tooltips active" data-container="body" data-placement="right" data-html="true" data-original-title="Manage your own account">
					<a href="myprofile.php">
						<i class="fa fa-user"></i>
						<span class="title">
							My Profile
						</span>
						<span class="selected">
						</span>
					</a>
				</li>

				<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="View Lessons">
					<a href="student_lessons.php">
						<i class="fa fa-book"></i>
						<span class="title">
							Lessons
						</span>
					</a>
				</li>
				<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="">
					<a href="javascript:;">
						<i class="fa fa-laptop"></i>
						<span class="title">
							Activity
						</span>
						<span class="arrow">
						</span>
					</a>

					<ul class="sub-menu">
						<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Introduction to Multimedia System and Adobe Flash">
							<a href="Activity1/activity1.php">
							<i class="fa fa-clipboard"></i>
								<span class="title">
									Activity 1
								</span>
							</a>
						</li>
						<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Adobe Flash Environment">
							<a href="Activity2/activity2.php">
							<i class="fa fa-clipboard"></i>
								<span class="title">
									Activity 2
								</span>
							</a>
						</li>
						<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Shape Tween">
							<a href="Activity3/activity3.php">
							<i class="fa fa-clipboard"></i>
								<span class="title">
									Activity 3
								</span>
							</a>
						</li>
						<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Masking">
							<a href="Activity4/activity4.php">
							<i class="fa fa-clipboard"></i>
								<span class="title">
									Activity 4
								</span>
							</a>
						</li>
						<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Motion Tween">
							<a href="Activity5/activity5.php">
							<i class="fa fa-clipboard"></i>
								<span class="title">
									Activity 5
								</span>
							</a>
						</li>
					</ul>
				
				</li>
				<li class=" tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Upload your activty">
					<a href="upload.php">
						<i class="fa fa-upload"></i>
						<span class="title">
							Upload Activity
						</span>
					</a>
				</li>
			<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="">
					<a href="javascript:;">
						<i class="fa fa-credit-card"></i>
						<span class="title">
							Take Quiz
						</span>
						<span class="arrow">
						</span>
						<span class="selected">
						</span>
					</a>
					<ul class="sub-menu">
						<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Take your quiz no. 1">
							<a href="quiz.php">
							<i class="fa fa-file-text"></i>
								<span class="title">
									Quiz No. 1
								</span>
							</a>
						</li>
						<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Take your quiz no. 2">
							<a href="quiz2.php">
							<i class="fa fa-file-text"></i>
								<span class="title">
									Quiz No. 2
								</span>
							</a>
						</li>
					</ul>
				</li>	
				<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="View Quiz Result">
					<a href="quiz_result.php">
						<i class="fa fa-file"></i>
						<span class="title">
							Quiz Result
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
					Your Profile <small></small>
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
							<a href="myprofile.php">
								My Profile
							</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row profile">
				<div class="col-md-12">
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">

							<li class="active">
								<a href="#tab_1_3" data-toggle="tab">
									 Account
								</a>
							</li>
							<!--li>
								<a href="#tab_1_4" data-toggle="tab">
									 Projects
								</a>
							</li>
							<li>
								<a href="#tab_1_6" data-toggle="tab">
									 Help
								</a>
							</li-->
						</ul>
						<div class="tab-content">
						
							<!--tab_1_2-->
							<div class="tab-pane active" id="tab_1_3">
								<div class="row profile-account">
									<div class="col-md-3">
										<ul class="ver-inline-menu tabbable margin-bottom-10">
												<li>
												<img src="images/profilepic/<?php echo $image; ?>" class="img-responsive" alt=""/></br>
											</li>
											<li class="active">
												<a data-toggle="tab" href="#tab_1-1">
													<i class="fa fa-cog"></i> Personal Information
												</a>
												<span class="after">
												</span>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_2-2">
													<i class="fa fa-picture-o"></i> Change Profile Picture
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#tab_3-3">
													<i class="fa fa-lock"></i> Change Password
												</a>
											</li>
											<!--li>
												<a data-toggle="tab" href="#tab_4-4">
													<i class="fa fa-eye"></i> Privacity Settings
												</a>
											</li-->
										</ul>
									</div>
									<div class="col-md-9">
										<div class="tab-content">
											<div id="tab_1-1" class="tab-pane active">
												<form action="../function/updateprofile_student.php" method="post" enctype="multipart/form-data" id="">
										<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
													<div class="form-group">
														<label class="control-label">First Name</label>
											<div class="input-icon right">
												<i class="fa"></i>
														<input type="text" class="form-control" name="firstname" value="<?php echo$firstname;?>" required />
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">Last Name</label>
											<div class="input-icon right">
												<i class="fa"></i>
														<input type="text" class="form-control" name="lastname" value="<?php echo$lastname;?>" required />
													</div>
													</div>
													<div class="form-group">
														<label class="control-label" >Mobile Number</label>
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="mobile" value="<?php echo$mobile;?>" />
											</div>
													</div>
													<div class="form-group">
														<label class="control-label">Email Address</label>
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="email" value="<?php echo$email;?>" required />
											</div>
													</div>
													<div class="form-group">
														<label class="control-label">Username</label>
											<div class="input-icon right">
												<i class="fa"></i>
														<input type="text" name="username" class="form-control" value="<?php echo$username;?>" required />
													</div>
													</div>
													<!--div class="form-group">
														<label class="control-label">About</label>
														<textarea class="form-control" rows="3" placeholder="We are KeenThemes!!!"></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">Website Url</label>
														<input type="text" placeholder="http://www.mywebsite.com" class="form-control"/>
													</div-->
													<div class="margin-top-10">
									<div class="col-md-offset-4 col-md-5">
									
										<button type="submit" class="btn green" name="save"><i class="fa fa-save"></i> Save Changes</button>
									</div>
													</div>
												</form>
											</div>
											<div id="tab_2-2" class="tab-pane">
												<form action="../function/changepic_student.php" method="post"  enctype="multipart/form-data">
													<div class="form-group" >
														<div class="fileinput fileinput-new col-md-offset-1 col-md-8" data-provides="fileinput">
															<div class="fileinput-new thumbnail col-md-offset-4" style="width: 200px; height: 150px;">
																<img src="images/profilepic/<?php echo $image;?>" width="100%" height="100%"/>
															</div>
								
															<div class="fileinput-preview fileinput-exists thumbnail1" style="max-width: 200px; max-height: 150px;">
															</div>
															<div class="margin-top-tim col-md-7 col-md-offset-3">
																<span class="btn blue btn-file">
																<i class="fa fa-plus"></i>
																	<span class="fileinput-new">
																		 Select image
																	</span>
																	
																	<span class="fileinput-exists">
																		 Change
																	</span>
																	<input type="file" name="propic" autocomplete="off" required />
																</span></br>
																</br><a href="#" class="btn red fileinput-exists col-md-5" data-dismiss="fileinput">
																	 Remove
																</a></br>										
																</br><button type="submit" class="btn green col-md-5"><i class="fa fa-save" name="change"></i> Save Changes</button>
							
															</div>
														</div>
													</div>
												</form>
											</div>
											<div id="tab_3-3" class="tab-pane">
												<form action="../function/changepass_student.php" id="" method="post">
										<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
													<div class="form-group">
														<label class="control-label">Current Password</label>
											<div class="input-icon right">
												<i class="fa"></i>
														<input type="password" class="form-control" name="oldpass" placeholder="Current Password" required />
													</div>
													</div>
													<div class="form-group">
														<label class="control-label">New Password</label>
											<div class="input-icon right">
												<i class="fa"></i>
														<input type="password" class="form-control" name="password" placeholder="New Password" required />
													</div>
													</div>
													<div class="form-group">
														<label class="control-label">Re-type New Password</label>
											<div class="input-icon right">
												<i class="fa"></i>
														<input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required />
													</div>
												</div>
													<div class="margin-top-20 col-md-offset-4 col-md-5">
													<button type="submit" class="btn green" name="save"><i class="fa fa-save"></i> Save Changes</button>
													</div>
												</form>
											</div>
											
												</form>
											</div>
										</div>
									</div>
									<!--end col-md-9-->
								</div>
							</div>
							<!--end tab-pane-->
							
							<!--end tab-pane-->
						</div>
					</div>
					<!--END TABS-->
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
<script type="text/javascript" src="../template/assets/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<script type="text/javascript" src="../template/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="../template/assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="../template/assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../template/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="../template/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="../template/assets/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../template/assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="../template/assets/plugins/bootstrap-markdown/lib/markdown.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../template/assets/scripts/core/app.js"></script>
<script src="../template/assets/scripts/custom/form-validation-admin.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   App.init();
   FormValidation.init();
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
<?php
if(isset($_SESSION["success"]))
{
	if($_SESSION["success"]=='true')
	{
		echo "<script type='text/javascript'>
			alert('Record updated succesfully');
		</script>";
		$_SESSION["success"]="";
	}
	else if($_SESSION["success"]=='not')
	{
		echo "<script type='text/javascript'>
			alert('Password Mismatch');
		</script>";
		$_SESSION["success"]="";
	}
	else if($_SESSION["success"]=='nott')
	{
		echo "<script type='text/javascript'>
			alert('Undifined Password');
		</script>";
		$_SESSION["success"]="";
	}
}
?>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>