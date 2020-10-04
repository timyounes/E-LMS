<?php
session_start();
require '../function/confirm.php';
require '../config/config.php';
if($_SESSION['level']=='INSTRUCTOR')
{
		header("location:../instructors/index.php");
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
<title>E-LMS-CvSUIC | Feedback</title>
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
		<a class="navbar-brand" href="manageusers.php">
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
					<img alt="" class= "imgs" src="images/adminprofile/<?php echo $image; ?>"/>
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
				<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="">
					<a href="javascript:;">
						<i class="fa fa-users"></i>
						<span class="title">
							Manage Users
						</span>
						<span class="arrow">
						</span>
					</a>
					<ul class="sub-menu">
						<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="View Instructors Record">
							<a href="manageusers.php">
							<i class="fa fa-file-text"></i>
								<span class="title">
									Instructors
								</span>
							</a>
						</li>
						<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="View Students Record">
							<a href="students.php">
							<i class="fa fa-file-text"></i>
								<span class="title">
									Students
								</span>
							</a>
						</li>
					</ul>
				</li>

		<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="">
					<a href="javascript:;">
						<i class="fa fa-list-alt"></i>
						<span class="title">
							Manage Information
						</span>
						<span class="arrow">
						</span>
					</a>
					<ul class="sub-menu">
						<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Add new data">
							<a href="#" id="course" data-toggle="modal">
							<i class="fa fa-plus-square"></i>
								<span class="title">
									Add New Program
								</span>
							</a>
								<div id="course-modal" class="modal fade" tabindex="-1">
							</div>
						</li>
						<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Add new data">
							<a href="#" id="section" data-toggle="modal">
							<i class="fa fa-plus-square"></i>
								<span class="title">
									Add New Section
								</span>
							</a>
								<div id="section-modal" class="modal fade" tabindex="-1">
							</div>
						</li>
					</ul>
				</li>
				<li class="tooltips active" data-container="body" data-placement="right" data-html="true" data-original-title="Manage your own account">
					<a href="feedback.php">
						<i class="fa fa-comments"></i>
						<span class="title">
							Feedback
						</span>
						<span class="selected">
							
						</span>
					</a>
				</li>
				
				<!--li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Lessons Overview">
					<a href="javascript:;">
						<i class="fa fa-book"></i>
						<span class="title">
							Lessons
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="index_horizontal_menu.html">
								 Lesson 1
							</a>
						</li>

						<!--li>
							<a href="layout_sidebar_toggler_on_header.html">
								 Sidebar Toggler On Header
							</a>
						</li>
						<li>
							<a href="layout_sidebar_reversed.html">
								<span class="badge badge-roundless badge-success">
									new
								</span>
								Right Sidebar Page
							</a>
						</li>
						<li>
							<a href="layout_sidebar_fixed.html">
								 Sidebar Fixed Page
							</a>
						</li>
						<li>
							<a href="layout_sidebar_closed.html">
								 Sidebar Closed Page
							</a>
						</li>
						<li>
							<a href="layout_ajax.html">
								 Content Loading via Ajax
							</a>
						</li>
						<li>
							<a href="layout_disabled_menu.html">
								 Disabled Menu Links
							</a>
						</li>
						<li>
							<a href="layout_blank_page.html">
								 Blank Page
							</a>
						</li>
						<li>
							<a href="layout_boxed_page.html">
								 Boxed Page
							</a>
						</li>
						<li>
							<a href="layout_language_bar.html">
								 Language Switch Bar
							</a>
						</li>
						<li>
							<a href="layout_promo.html">
								 Promo Page
							</a>
						</li-->
					</ul>
				</li>
				<!--li>
					<a href="javascript:;">
						<i class="fa fa-bookmark-o"></i>
						<span class="title">
							UI Features
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ui_general.html">
								 General
							</a>
						</li>
						<li>
							<a href="ui_buttons.html">
								 Buttons & Icons
							</a>
						</li>
						<li>
							<a href="ui_typography.html">
								 Typography
							</a>
						</li>
						<li>
							<a href="ui_tabs_accordions_navs.html">
								 Tabs, Accordions & Navs
							</a>
						</li>
						<li>
							<a href="ui_tree.html">
								<span class="badge badge-roundless badge-important">
									new
								</span>
								Tree View
							</a>
						</li>
						<li>
							<a href="ui_page_progress_style_1.html">
								<span class="badge badge-roundless badge-warning">
									new
								</span>
								Page Progress Bar
							</a>
						</li>
						<li>
							<a href="ui_blockui.html">
								 Block UI
							</a>
						</li>
						<li>
							<a href="ui_notific8.html">
								 Notific8 Notifications
							</a>
						</li>
						<li>
							<a href="ui_toastr.html">
								 Toastr Notifications
							</a>
						</li>
						<li>
							<a href="ui_alert_dialog_api.html">
								<span class="badge badge-roundless badge-important">
									new
								</span>
								Alerts & Dialogs API
							</a>
						</li>
						<li>
							<a href="ui_session_timeout.html">
								 Session Timeout
							</a>
						</li>
						<li>
							<a href="ui_idle_timeout.html">
								 User Idle Timeout
							</a>
						</li>
						<li>
							<a href="ui_modals.html">
								 Modals
							</a>
						</li>
						<li>
							<a href="ui_extended_modals.html">
								 Extended Modals
							</a>
						</li>
						<li>
							<a href="ui_tiles.html">
								 Tiles
							</a>
						</li>
						<li>
							<a href="ui_datepaginator.html">
								<span class="badge badge-roundless badge-success">
									new
								</span>
								Date Paginator
							</a>
						</li>
						<li>
							<a href="ui_nestable.html">
								 Nestable List
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-puzzle-piece"></i>
						<span class="title">
							UI Components
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="components_pickers.html">
								 Pickers
							</a>
						</li>
						<li>
							<a href="components_dropdowns.html">
								 Custom Dropdowns
							</a>
						</li>
						<li>
							<a href="components_form_tools.html">
								 Form Tools
							</a>
						</li>
						<li>
							<a href="components_editors.html">
								 Markdown & WYSIWYG Editors
							</a>
						</li>
						<li>
							<a href="components_ion_sliders.html">
								 Ion Range Sliders
							</a>
						</li>
						<li>
							<a href="components_noui_sliders.html">
								 NoUI Range Sliders
							</a>
						</li>
						<li>
							<a href="components_jqueryui_sliders.html">
								 jQuery UI Sliders
							</a>
						</li>
						<li>
							<a href="components_knob_dials.html">
								 Knob Circle Dials
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-table"></i>
						<span class="title">
							Form Stuff
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="form_controls.html">
								 Form Controls
							</a>
						</li>
						<li>
							<a href="form_layouts.html">
								 Form Layouts
							</a>
						</li>
						<li>
							<a href="form_editable.html">
								<span class="badge badge-roundless badge-warning">
									new
								</span>
								Form X-editable
							</a>
						</li>
						<li>
							<a href="form_wizard.html">
								 Form Wizard
							</a>
						</li>
						<li>
							<a href="form_validation.html">
								 Form Validation
							</a>
						</li>
						<li>
							<a href="form_image_crop.html">
								<span class="badge badge-roundless badge-important">
									new
								</span>
								Image Cropping
							</a>
						</li>
						<li>
							<a href="form_fileupload.html">
								 Multiple File Upload
							</a>
						</li>
						<li>
							<a href="form_dropzone.html">
								 Dropzone File Upload
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-envelope-o"></i>
						<span class="title">
							Email Templates
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="email_newsletter.html">
								 Responsive Newsletter<br>
								Email Template
							</a>
						</li>
						<li>
							<a href="email_system.html">
								 Responsive System<br>
								Email Template
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-sitemap"></i>
						<span class="title">
							Pages
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="page_portfolio.html">
								<i class="fa fa-briefcase"></i>
								<span class="badge badge-warning badge-roundless">
									new
								</span>
								Portfolio
							</a>
						</li>
						<li>
							<a href="page_timeline.html">
								<i class="fa fa-clock-o"></i>
								<span class="badge badge-info">
									4
								</span>
								Timeline
							</a>
						</li>
						<li>
							<a href="page_coming_soon.html">
								<i class="fa fa-cogs"></i>
								Coming Soon
							</a>
						</li>
						<li>
							<a href="page_blog.html">
								<i class="fa fa-comments"></i>
								Blog
							</a>
						</li>
						<li>
							<a href="page_blog_item.html">
								<i class="fa fa-font"></i>
								Blog Post
							</a>
						</li>
						<li>
							<a href="page_news.html">
								<i class="fa fa-coffee"></i>
								<span class="badge badge-success">
									9
								</span>
								News
							</a>
						</li>
						<li>
							<a href="page_news_item.html">
								<i class="fa fa-bell"></i>
								News View
							</a>
						</li>
						<li>
							<a href="page_about.html">
								<i class="fa fa-group"></i>
								About Us
							</a>
						</li>
						<li>
							<a href="page_contact.html">
								<i class="fa fa-envelope-o"></i>
								Contact Us
							</a>
						</li>
						<li>
							<a href="page_calendar.html">
								<i class="fa fa-calendar"></i>
								<span class="badge badge-important">
									14
								</span>
								Calendar
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-gift"></i>
						<span class="title">
							Extra
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="extra_profile.html">
								 User Profile
							</a>
						</li>
						<li>
							<a href="extra_lock.html">
								 Lock Screen
							</a>
						</li>
						<li>
							<a href="extra_faq.html">
								 FAQ
							</a>
						</li>
						<li>
							<a href="inbox.html">
								<span class="badge badge-important">
									4
								</span>
								Inbox
							</a>
						</li>
						<li>
							<a href="extra_search.html">
								 Search Results
							</a>
						</li>
						<li>
							<a href="extra_invoice.html">
								 Invoice
							</a>
						</li>
						<li>
							<a href="extra_pricing_table.html">
								 Pricing Tables
							</a>
						</li>
						<li>
							<a href="extra_404_option1.html">
								 404 Page Option 1
							</a>
						</li>
						<li>
							<a href="extra_404_option2.html">
								 404 Page Option 2
							</a>
						</li>
						<li>
							<a href="extra_404_option3.html">
								 404 Page Option 3
							</a>
						</li>
						<li>
							<a href="extra_500_option1.html">
								 500 Page Option 1
							</a>
						</li>
						<li>
							<a href="extra_500_option2.html">
								 500 Page Option 2
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-folder-open"></i>
						<span class="title">
							Multi Level Menu
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
								<i class="fa fa-cogs"></i> Item 1
								<span class="arrow">
								</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="javascript:;">
										<i class="fa fa-user"></i>
										Sample Link 1
										<span class="arrow">
										</span>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="#">
												<i class="fa fa-remove"></i> Sample Link 1
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-pencil"></i> Sample Link 1
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-edit"></i> Sample Link 1
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-user"></i> Sample Link 1
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-external-link"></i> Sample Link 2
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-bell"></i> Sample Link 3
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">
								<i class="fa fa-globe"></i> Item 2
								<span class="arrow">
								</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#">
										<i class="fa fa-user"></i> Sample Link 1
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-external-link"></i> Sample Link 1
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-bell"></i> Sample Link 1
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-folder-open"></i>
								Item 3
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-user"></i>
						<span class="title">
							Login Options
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="login.html">
								 Login Form 1
							</a>
						</li>
						<li>
							<a href="login_soft.html">
								 Login Form 2
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-th"></i>
						<span class="title">
							Data Tables
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="table_basic.html">
								 Basic Datatables
							</a>
						</li>
						<li>
							<a href="table_responsive.html">
								 Responsive Datatables
							</a>
						</li>
						<li>
							<a href="table_managed.html">
								 Managed Datatables
							</a>
						</li>
						<li>
							<a href="table_editable.html">
								 Editable Datatables
							</a>
						</li>
						<li>
							<a href="table_advanced.html">
								 Advanced Datatables
							</a>
						</li>
						<li>
							<a href="table_ajax.html">
								 Ajax Datatables
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-file-text"></i>
						<span class="title">
							Portlets
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="portlet_general.html">
								 General Portlets
							</a>
						</li>
						<li>
							<a href="portlet_ajax.html">
								 Ajax Portlets
							</a>
						</li>
						<li>
							<a href="portlet_draggable.html">
								 Draggable Portlets
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
						<i class="fa fa-map-marker"></i>
						<span class="title">
							Maps
						</span>
						<span class="arrow ">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="maps_google.html">
								 Google Maps
							</a>
						</li>
						<li>
							<a href="maps_vector.html">
								 Vector Maps
							</a>
						</li>
					</ul>
				</li>
				<li class="last ">
					<a href="charts.html">
						<i class="fa fa-bar-chart-o"></i>
						<span class="title">
							Visual Charts
						</span>
					</a>
				</li>
			</ul>
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
					View Feedbacks from viewers<small></small>
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
							<a href="feedback.php">
								Feedbacks
							</a>
						</li>
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
								<i class="fa fa-edit"></i>Feedback List
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<!--a href="#portlet-config" data-toggle="modal" class="config">
								</a-->
								<!--a href="manageusers.php" class="reload">
								</a>
								<!--a href="javascript:;" class="remove">
								</a-->
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
							<!-- ajax -->
							<div id="instructor-modal" class="modal fade" tabindex="-1">
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
									 Name
								</th>
								<th class='center'>
									 Email
								</th>
								<th class='center'>
									 Message
								</th>
								<th class='center'>
									 Date
								</th>
								<th class='center'>
									 Time
								</th>
								<th class='center'>
									 Action
								</th>
							</tr>
							</thead>
						<tbody>
			<?php
				require '../config/config.php';
				
				$level='INSTRUCTOR';
				
				$query=mysql_query("select * from feedback")or die("Error");
				if($num=mysql_num_rows($query)>0)
				{
			while($row=mysql_fetch_assoc($query))
			{
				$user_id=$row['id'];
				$id=$row['id'];
				//$username=$row['username'];
				//$firstname=$row['firstname'];
				//$lastname=$row['lastname'];
				//$email=$row['email'];
				//$gender=$row['gender'];
				//$address=$row['address'];
				//$mobile=$row['mobile'];
				
				
				?>
							<tr>							
								<td class='center'>
								<?php echo $row['name'];?>
								</td>
								<td class='center'>
							<?php echo $row['email'];?>
								</td>
								<td class='center'>
								<a href="#id<?php echo $user_id;?>" data-toggle="modal" class="btn blue tooltips" title="View Message"> 
								<i class='glyphicon glyphicon-eye-open'></i></a>
							<div id="id<?php echo $user_id;?>" class="modal fade container modal-scroll" tabindex="-1" data-backdrop="static" data-replace="true" aria-hidden="true" data-keyboard="false">

								 		<div class="modal-body">
									<h4>
										 <?php echo nl2br($row['message']);?>
									</h4>
										</div>
								<div class="modal-footer">
								<div class="col-md-3 col-md-offset-5">
									<button type="button" data-dismiss="modal" class="btn red"><i class='glyphicon glyphicon-hand-left'></i> Back</button>
								</div>
							</div>
							</div>
				
								</td>
								<td class='center'>
									<?php echo $row['date'];?>
								</td>
								<td class='center'>
									<?php echo $row['time'];?>
								</td>
								<td class='center'>
								<a href="#id1<?php echo $id;?>" data-toggle="modal" class="btn red tooltips" title="Delete feedback"> 
								<i class='glyphicon glyphicon-trash'></i></a>
							<div id="id1<?php echo $id;?>" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-hidden="true">
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
								<a href="../function/delete_feedback.php <?php echo '?id='.$id;?>" class="btn blue"> 
								 <i class='glyphicon glyphicon-trash'></i> Delete feedback</a>
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
<?php
	include"../function/footer.php";
?>
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
<script src="../template/assets/scripts/custom/extended-modal.js"></script>
<script src="../template/assets/scripts/custom/extended-modal-course.js"></script>
<script src="../template/assets/scripts/custom/extended-modal-section.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   App.init();
   FormWizard.init();
   TableEditable.init();
   UIExtendedModals_instructor.init();
   UIExtendedModals_course.init();
   UIExtendedModals_section.init();
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
    elseif($_SESSION["success"]=='false')
    {
        echo "<script type='text/javascript'>
            alert('Error');
        </script>";
        $_SESSION["success"]="";
    }
   }
?>
</body>
<!-- END BODY -->
</html>