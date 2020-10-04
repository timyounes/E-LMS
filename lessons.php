<?php
  require 'confirm.php';
?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>E-LMS-CvSUIC | Lessons</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="E-learning, Interactive, Multimedia System" name="keywords" />
    <meta content="E-Learning on Multimedia System with Interactive Tutorials and Basic Activity Evaluation. This Website is for Cavite State University Imus-Campus" name="description" />
    <meta content="" name="author" />

   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="frontend/template/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="frontend/template/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />              
   <!-- END PAGE LEVEL PLUGIN STYLES -->

   <!-- BEGIN THEME STYLES --> 
   <link href="frontend/template/ssets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/themes/green.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="frontend/template/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->

   <link rel="shortcut icon" href="icon.ico" />
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body>
	<!-- BEGIN STYLE CUSTOMIZER -->
	<!--div class="color-panel hidden-sm">
		<div class="color-mode-icons icon-color"></div>
		<div class="color-mode-icons icon-color-close"></div>
		<div class="color-mode">
			<p>THEME COLOR</p>
			<ul class="inline">
				<li class="color-blue " data-style="blue"></li>
				<li class="color-red" data-style="red"></li>
				<li class="color-green current color-default" data-style="green"></li>
				<li class="color-orange" data-style="orange"></li>
			</ul>
			<label>
				<span>Header</span>
				<select class="header-option form-control input-small">
					<option value="default" selected>Default</option>
					<option value="fixed">Fixed</option>
				</select>
			</label>
		</div>
	</div>
	<!-- END BEGIN STYLE CUSTOMIZER -->  

    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<!-- BEGIN LOGO (you can use logo image instead of text)-->
				<a class="navbar-brand logo-v1" href="index.php">
					<img src="frontend/template/assets/img/logo_green.png" id="logoimg" alt="">
				</a>
				<!-- END LOGO -->
			</div>
		
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                            <a href="index.php">
                           <i class="glyphicon glyphicon-home"> </i> HOME
                            <!--i class="fa fa-angle-down"></i-->
                        </a>
                        <!--ul class="dropdown-menu">
                            <li><a href="index.html">Home Default</a></li>
                            <li><a href="page_home_fixed_header.html">Header Fixed</a></li>
                            <li><a href="page_home2.html">Home with Top Bar</a></li>
                        </ul-->
                    </li>
                    <!--li class="dropdown active">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-delay="0" data-close-others="false" data-target="#" href="#">
                        <i class="glyphicon glyphicon-user"></i> USER ACCOUNT 
                        <i class="fa fa-angle-down"></i>
                      </a>
                      <!-- BEGIN DROPDOWN MENU -->
                      <!--ul class="dropdown-menu">
                                <li><a href="signup_student.php">Sign-Up as Student</a></li>
                                <li><a href="signup_instructor.php">Sign-Up as Instructor</a></li>
                                <li><a href="forgot_password.php">Forgot your Password?</a></li>
                                <li><a href="userslogin.php">Login to your account</a></li>

                      </ul>
                      <!-- END DROPDOWN MENU -->
                    <!--/li-->
                    <li><a href="userslogin.php"><i class= "glyphicon glyphicon-user"></i> Login</a></li>
                     <li><a href="signup_student.php"><i class="glyphicon glyphicon-pencil"></i> Sign-Up</a></li>
                    <li class="active"><a href="lessons.php"><i class= "glyphicon glyphicon-book"></i> LESSONS</a></li>
                     <li><a href="contact.php"><i class="glyphicon glyphicon-phone-alt"></i> CONTACT US</a></li>
                    <!--li class="menu-search">
                        <span class="sep"></span>
                        <i class="fa fa-search search-btn"></i>

                        <div class="search-box">
                            <form action="#">
                                <div class="input-group input-large">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn theme-btn">Go</button>
                                    </span>
                                </div>
                            </form>
                        </div> 
                    </li-->
                </ul>                         
            </div>
            <!-- BEGIN TOP NAVIGATION MENU -->
		</div>
    </div>
    <!-- END HEADER -->

    <!-- BEGIN PAGE CONTAINER -->  
    <div class="page-container">
	
		<!-- BEGIN BREADCRUMBS -->   
		<div class="row breadcrumbs margin-bottom-40">
			<div class="container">
				<div class="col-md-4 col-sm-4">
					<h1>Lessons Overview</h1>
				</div>
				<div class="col-md-8 col-sm-8">
					<ul class="pull-right breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Lessons</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END BREADCRUMBS -->
  <div class="container min-hight">
          <div class="row">   
		        <!-- BEGIN SERVICE BLOCKS -->               
        <div class="col-md-12">
          <div class="row margin-bottom-20">
            <div class="col-md-4">
              <div class="lingo">
                <ul>
                  <li class="flipcard_container">
                    <div class="flipcard">
                      <div class="front face"><h2><i class="fa fa-random color-grey"></i></br>Introduction to Multimedia System and Adobe Flash</h2></div>
                        <div class="back face center">
                        <div><i class="fa fa-random color-grey"></i></div>
                            <h2>Introduction to Multimedia System and Adobe Flash</h2>
                            <p>On this lesson you will learn basic information about Multimedia System and Adobe Flash.</p>
                        </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="lingo">
                <ul>
                  <li class="flipcard_container">
                    <div class="flipcard">
                      <div class="front face"><h2><i class="fa fa-puzzle-piece color-grey"></i></br>Adobe Flash CS5 Environment</h2></div>
                        <div class="back face center">
                        <div><i class="fa fa-puzzle-piece color-grey"></i></div>
                            <h2>Adobe Flash CS5 Environment</h2>
                            <p>This lesson will help you to understand and familiarise Adobe Flash CS5 Environment.</p>
                        </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="lingo">
                <ul>
                  <li class="flipcard_container">
                    <div class="flipcard">
                      <div class="front face"><h2><i class="fa fa-columns color-grey"></i></br>Basic Tweening</h2></div>
                        <div class="back face center">
                        <div><i class="fa fa-columns color-grey"></i></div>
                            <h2>Basic Tweening</h2>
                            <p>In this lesson you will learn how to create Shape Tween in Adobe Flash CS5.</p>
                        </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          <div class="row margin-bottom-20">
            <div class="col-md-4 col-md-offset-2">
              <div class="lingo">
                <ul>
                  <li class="flipcard_container">
                    <div class="flipcard">
                      <div class="front face"><h2><i class="fa fa-laptop color-grey"></i></br>Basic Masking</h2></div>
                        <div class="back face center">
                        <div><i class="fa fa-laptop color-grey"></i></div>
                            <h2>Basic Masking</h2>
                            <p>This lesson will teach the students on how to create basic masking in Adobe Flash CS5.</p>
                        </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="lingo">
                <ul>
                  <li class="flipcard_container">
                    <div class="flipcard">
                      <div class="front face"><h2><i class="fa fa-edit color-grey"></i></br>Motion Tween</h2></div>
                        <div class="back face center">
                        <div><i class="fa fa-edit color-grey"></i></div>
                            <h2>Motion Tween</h2>
                            <p>In this lesson the students will learn how to create simple motion tween animation in Adobe Flash CS5. </p>
                        </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!--div class="col-md-4">
              <div class="lingo">
                <ul>
                  <li class="flipcard_container">
                    <div class="flipcard">
                      <div class="front face"><h2><i class="fa fa-retweet color-grey"></i></br>Copying and Reversing Frames</h2></div>
                        <div class="back face center">
                        <div><i class="fa fa-retweet color-grey"></i></div>
                            <h2>Copying and Reversing Frames</h2>
                            <p>In this lesson the students will learn how to copy, paste,and reverse a sequence of frames to create looping animation.</p>
                        </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div-->
          </div>
        </div>
        </div>
      </div>
        <!-- END SERVICE BLOCKS --> 

			<div class="clearfix"></div>


	</div>
    <!-- BEGIN PAGE CONTAINER -->  
    <?php
      include 'footer.php';
    ?>

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->  
    <script src="frontend/template/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="frontend/template/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="frontend/template/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script type="text/javascript" src="frontend/template/assets/plugins/hover-dropdown.js"></script>
    <script type="text/javascript" src="frontend/template/assets/plugins/back-to-top.js"></script>    
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="frontend/template/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>  
    <script src="frontend/template/assets/scripts/app.js"></script>  
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();                      
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>