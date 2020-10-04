<?php
session_start();
require '../function/confirm.php';
require '../config/config.php';
if(isset($_GET['firstname']) && isset($_GET['id']) && isset($_GET['lastname']))
{
$fname=$_GET['firstname'];
$lname=$_GET['lastname'];
$id=$_GET['id'];
}
$id1=$_SESSION['timkey'];

$query=mysql_query("select * from student where student_id='$id1' ");
if($num=mysql_num_rows($query)>0)
{
	$row=mysql_fetch_assoc($query);
	$firstname=$row['firstname'];
	$lastname=$row['lastname'];
	$image=$row['profilepic'];
	$status=$row['status'];

	if($status=="ACTIVE")
	{
		header("location:../function/lock_student.php");
	}
}
else
{
	header("location: ../index.php?Unauthorize_access!");
}
?>

<?php

$query=mysql_query("select * from evaluation where student_id='$id1'");
if($num=mysql_num_rows($query)>0)
{
	$row=mysql_fetch_assoc($query);
	if($row['activity1']=="ACTIVATED")
	{

	}
	else
	{
		echo "<script type='text/javascript'>
			alert('Access Denied!');
			history.back();
		</script>";
	}
	
}
else
{
	    echo "<script type='text/javascript'>
			alert('Access Denied!');
			history.back();
		</script>";
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
<title>E-LMS-CvSUIC | Student Page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="../template/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="../template/assets/plugins/data-tables/DT_bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../template/assets/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<link rel="stylesheet" type="text/css" href="../template/assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css"/>
<link rel="stylesheet" type="text/css" href="../template/assets/plugins/jquery-tags-input/jquery.tagsinput.css"/>
<link rel="stylesheet" type="text/css" href="../template/assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="../template/assets/plugins/typeahead/typeahead.css">

<link href="../template/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../template/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="../template/assets/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="../template/assets/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/common.css" rel="stylesheet" type="text/css"/>
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
		<a class="navbar-brand" href="index.php">
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
	
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="imgs" src="images/profilepic/<?php echo $image;?>"/>
					<span class="username">
						 <?php echo $firstname." ". $lastname; ?>
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
						<a href="../function/logout.php" onclick="return confirm('Are you sure you want to Log-Out?')">
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
			<!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
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
						<!--span class="arrow "-->
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
				<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Upload your activty">
					<a href="upload.php">
						<i class="fa fa-upload"></i>
						<span class="title">
							Upload Activity
						</span>
					</a>
				</li>
				<li class="active tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="">
					<a href="javascript:;">
						<i class="fa fa-credit-card"></i>
						<span class="title">
							Take Quiz
						</span>
						<span class="arrow open">
						</span>
						<span class="selected">
						</span>
					</a>
					<ul class="sub-menu">
						<li class="tooltips active" data-container="body" data-placement="right" data-html="true" data-original-title="Take your quiz no. 1">
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
				</li>			<!-- END SIDEBAR MENU -->
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
					Take Examination
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<a href="quiz.php">
								Quiz No. 1
							</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
<div class="col-md-offset-1 ">
<form action="../function/quiz_process1.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<h4>1. ADOBE FLASH is also known as Flash or Macromedia Flash?</h4>
		<div class="radio-list col-md-offset-1">
			<label class="radio-inline">
			<input type="radio" name="answer1" id="optionsRadios1" value="TRUE" required> TRUE </label>
			<label class="radio-inline">
			<input type="radio" name="answer1" id="optionsRadios1" value="FALSE" required> FALSE </label>
		</div>
	</div>
	<div class="form-group">
		<h4>2. Multimedia use the combinations of text, images, sounds and movement?</h4>
		<div class="radio-list col-md-offset-1">
			<label class="radio-inline">
			<input type="radio" name="answer2" id="optionsRadios2" value="TRUE" required> TRUE </label>
			<label class="radio-inline">
			<input type="radio" name="answer2" id="optionsRadios2" value="FALSE" required> FALSE </label>
		</div>
	</div>
	<div class="form-group">
		<h4>3. Multimedia simply means “only one medium”?</h4>
		<div class="radio-list col-md-offset-1">
			<label class="radio-inline">
			<input type="radio" name="answer3" id="optionsRadios3" value="TRUE" required> TRUE </label>
			<label class="radio-inline">
			<input type="radio" name="answer3" id="optionsRadios3" value="FALSE" required> FALSE </label>
		</div>
	</div>
	<div class="form-group">
		<h4>4. This components are common within both Web and desktop multimedia applications. It can also include interactive effects, allowing users to engage with the animation action using their mouse and keyboard. ?</h4>
		<div class="radio-list col-md-offset-1">
			<label class="radio-inline">
			<input type="radio" name="answer4" id="optionsRadios4" value="IMAGES" required> IMAGES </label>
			<label class="radio-inline">
			<input type="radio" name="answer4" id="optionsRadios4" value="TEXT" required> TEXT </label>
						<label class="radio-inline">
			<input type="radio" name="answer4" id="optionsRadios4" value="ANIMATION" required> ANIMATION </label>
		</div>
	</div>
	<div class="form-group">
		<h4>5. Digital photographs can display application content or can alternatively form part of a user interface. Interactive elements, such as buttons, often use custom images created by the designers and developers involved in an application.?</h4>
		<div class="radio-list col-md-offset-1">
			<label class="radio-inline">
			<input type="radio" name="answer5" id="optionsRadios5" value="IMAGES" required> IMAGES </label>
			<label class="radio-inline">
			<input type="radio" name="answer5" id="optionsRadios5" value="AUDIO" required> AUDIO </label>
						<label class="radio-inline">
			<input type="radio" name="answer5" id="optionsRadios5" value="ANIMATION" required> ANIMATION </label>
		</div>
	</div>
	<div class="form-group">
		<h4>6. Is a multimedia system for computers that is generally accessed through a web browser, though it is also used for standalone development and as a method of creating compelling user interfaces and menus on some cell phones.?</h4>
		<div class="radio-list col-md-offset-1">
			<label class="radio-inline">
			<input type="radio" name="answer6" id="optionsRadios6" value="ADOBE FLASH" required> ADOBE FLASH </label>
			<label class="radio-inline">
			<input type="radio" name="answer6" id="optionsRadios6" value="TEXT" required> TEXT </label>
						<label class="radio-inline">
			<input type="radio" name="answer6" id="optionsRadios6" value="ANIMATION" required> ANIMATION </label>
		</div>
	</div>
	<div class="form-group">
		<h4>7. 	It may be an easy content type to forget when considering multimedia systems, but this content is by far the most common media type in computing applications. In multimedia systems can express specific information.?	It may be an easy content type to forget when considering multimedia systems, but this content is by far the most common media type in computing applications. In multimedia systems can express specific information.?</h4>
		<div class="radio-list col-md-offset-1">
			<label class="radio-inline">
			<input type="radio" name="answer7" id="optionsRadios7" value="VIDEO" required> VIDEO </label>
			<label class="radio-inline">
			<input type="radio" name="answer7" id="optionsRadios7" value="TEXT" required> TEXT </label>
						<label class="radio-inline">
			<input type="radio" name="answer7" id="optionsRadios7" value="IMAGES" required> IMAGES </label>
		</div>
	</div>
	<div class="form-group">
		<h4>8. It play a major role in some multimedia systems. This kind of files appear as part of application content and also to aid interaction. When they appear within Web applications and sites, sometimes need to be deployed using plug-in 
media players.?</h4>
		<div class="radio-list col-md-offset-1">
			<label class="radio-inline">
			<input type="radio" name="answer8" id="optionsRadios8" value="AUDIO" required> AUDIO</label>
			<label class="radio-inline">
			<input type="radio" name="answer8" id="optionsRadios8" value="TEXT" required> TEXT </label>
						<label class="radio-inline">
			<input type="radio" name="answer8" id="optionsRadios8" value="ANIMATION" required> ANIMATION </label>
		</div>
	</div>
	<div class="form-group">
		<h4>9. It appears in many multimedia applications, particularly on the Web. As with audio, websites can stream this component of multimedia system to increase the speed and availability of playback. ?</h4>
		<div class="radio-list col-md-offset-1">
			<label class="radio-inline">
			<input type="radio" name="answer9" id="optionsRadios9" value="VIDEO" required> VIDEO </label>
			<label class="radio-inline">
			<input type="radio" name="answer9" id="optionsRadios9" value="TEXT" required> TEXT </label>
						<label class="radio-inline">
			<input type="radio" name="answer9" id="optionsRadios9" value="AUDIO" required> AUDIO </label>
		</div>
	</div>
	<div class="form-group margin-bottom-20">
		<h4>10. It simply means "more than one medium." In other words, television programs, movies, even illustrated books are all examples – they all use combinations of text, images, sounds, and movement.?</h4>
		<div class="radio-list col-md-offset-1">
			<label class="radio-inline">
			<input type="radio" name="answer10" id="optionsRadios10" value="MULTIMEDIA" required> MULTIMEDIA </label>
			<label class="radio-inline">
			<input type="radio" name="answer10" id="optionsRadios10" value="TEXT" required> TEXT </label>
						<label class="radio-inline">
			<input type="radio" name="answer10" id="optionsRadios10" value="ANIMATION" required> ANIMATION </label>
		</div>
	</div>
<div class="col-md-3 col-md-offset-6 margin-bottom-20">
		<button type="submit" name="save" class="col-md-offset-10 btn green">
		 <i class="fa fa-share-square-o"></i>
		 Submit
	</button>
</form>
</div>
</div>
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
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../template/assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../template/assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="../template/assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="../template/assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="../template/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>

<script type="text/javascript" src="../template/assets/plugins/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="../template/assets/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<script type="text/javascript" src="../template/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="../template/assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
<script src="../template/assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript"></script>
<script src="../template/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script src="../template/assets/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/typeahead/typeahead.min.js" type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="../template/assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="../template/assets/plugins/data-tables/DT_bootstrap.js"></script>
<script src="../template/assets/scripts/core/app.js" type="text/javascript"></script>
<script src="../template/assets/scripts/custom/index.js" type="text/javascript"></script>
<script src="../template/assets/scripts/custom/tasks.js" type="text/javascript"></script>
<script src="../template/assets/js/lib/jquery.js"></script>
<script src="../template/assets/js/lib/jquery.reflection.js"></script>
<script src="../template/assets/js/lib/jquery.cloud9carousel.js"></script>
<script src="../template/assets/scripts/custom/components-form-tools.js"></script>
<script src="../template/assets/scripts/custom/table-editable-instructor.js"></script>
<script src="../template/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="../template/assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="../template/assets/scripts/custom/extended-modal.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   Index.init();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initDashboardDaterange();
   //Index.initIntro();
   Tasks.initDashboardWidget();
   ComponentsFormTools.init();
      TableEditable.init();
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
</body>
<!-- END BODY -->
</html>