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
    <title>E-LMS-CvSUIC | Contact Page</title>
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
   <link href="frontend/template/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" /> 
   <!-- END PAGE LEVEL PLUGIN STYLES -->

   <!-- BEGIN THEME STYLES --> 
   <link href="frontend/template/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
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
                <li class="color-blue" data-style="blue"></li>
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
                    <li><a href="lessons.php"><i class= "glyphicon glyphicon-book"></i> LESSONS</a></li>
                     <li class="active"><a href="contact.php"><i class="glyphicon glyphicon-phone-alt"></i> CONTACT US</a></li>
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
        <div class="row breadcrumbs">
            <div class="container">
                <div class="col-md-4 col-sm-4">
                    <h1>Contact Us</h1>
                </div>
                <div class="col-md-8 col-sm-8">
                    <ul class="pull-right breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END BREADCRUMBS -->

		<!-- BEGIN GOOGLE MAP -->
		<div class="row">

                <!--a href="frontend/template/assets/img/cvsu/map.png" class="fancybox-button" title="Location Map of CAVITE STATE UNIVERSITY Imus City Campus">
                    <img src="frontend/template/assets/img/cvsu/map.png" width="100%" height="400px" class="tooltips" data-title="View Large Image">
                </a-->
            <div id="map" class="gmaps margin-bottom-40"></div>       
		</div>
		<!-- END GOOGLE MAP -->

		<!-- BEGIN CONTAINER -->   
		<div class="container min-hight">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<h2>Contact Form</h2>
					<p>You can send feedback to us.</p>
					<div class="space20"></div>
					<!-- BEGIN FORM-->
					<form action="function/feedback.php" class="horizontal-form margin-bottom-40" role="form" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label">Name <span class="color-red">*</span></label>
							<div class="col-lg-12">
								<input type="text" class="form-control" required name="name"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label" >Email <span class="color-red">*</span></label>
							<div class="col-lg-12">
								<input type="email" class="form-control" required name="email"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label" >Message <span class="color-red">*</span></label>
							<div class="col-lg-12 margin-bottom-40">
								<textarea class="form-control" rows="8" required name="message"></textarea>
							</div>
						</div>
                        <div class="contact-btn">
                        <div class="col-md-5">
                            <button type="reset" class="btn red"><i class="fa fa-eraser"></i> Clear </button>
                        </div>
                        <div class="col-md-5">  
    						<button type="submit" class="btn btn-default theme-btn" name="send"><i class="glyphicon glyphicon-send"></i> Send Feedback</button>
						</div>
                        </div>
					</form>
					<!-- END FORM-->                  
				</div>

				<div class="col-md-3 col-sm-3">
					<h2>Our Contacts</h2>
					<address>
						<strong>Cavite State University Imus-Campus</strong><br>
						Cavite Civic Center Palico IV,<br>
						Imus City, Cavite<br>
						<abbr title="Phone"><i class="glyphicon glyphicon-phone-alt"></i></abbr> (046) 471-6607 / (046) 471-6770 /
                        <br> (046) 686-2349
					</address>
					<address>
						<strong>Website</strong><br>
						<a href="http://www.cvsu.edu.ph" target="_new">www.cvsu.edu.ph</a>
					</address>
					<!--ul class="social-icons margin-bottom-10">
						<li><a href="#" data-original-title="facebook" class="facebook"></a></li>
						<li><a href="#" data-original-title="github" class="github"></a></li>
						<li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
						<li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>
						<li><a href="#" data-original-title="rss" class="rss"></a></li>
					</ul>

					<div class="clearfix margin-bottom-30"></div>

					<h2>About Us</h2>
					<p>Sediam nonummy nibh euismod tation ullamcorper suscipit</p>
					<ul class="list-unstyled">
						<li><i class="fa fa-check"></i> Officia deserunt molliti</li>
						<li><i class="fa fa-check"></i> Consectetur adipiscing </li>
						<li><i class="fa fa-check"></i> Deserunt fpicia</li>
					</ul>                                
				</div-->            
			</div>
		</div>
		<!-- END CONTAINER -->

	</div>
    <!-- END PAGE CONTAINER -->
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

    <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
    <script src="frontend/template/assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
    <script src="frontend/template/assets/scripts/contact-us.js"></script>  
    <script src="frontend/template/assets/scripts/app.js"></script>  
    <script type="text/javascript">
        jQuery(document).ready(function() {    
           App.init();
           ContactUs.init();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>