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
    <title>E-LMS-CvSUIC | Home Page</title>
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
   <link rel="stylesheet" href="frontend/template/assets/plugins/revolution_slider/css/rs-style.css" media="screen">
   <link rel="stylesheet" href="frontend/template/assets/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen"> 
   <link href="frontend/template/assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet" />                
   <!-- END PAGE LEVEL PLUGIN STYLES -->

   <!-- BEGIN THEME STYLES --> 
   <link href="frontend/template/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/themes/green.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="frontend/template/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <link href="template/css/bg-particles.css" rel="stylesheet" type="text/css"/>
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
        <!-- BEGIN TOP BAR -->
        <!--div class="front-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <ul class="list-unstyled inline">
                            <li><i class="fa fa-phone topbar-info-icon top-2"></i>Call us: <span>(1) 456 6717</span></li>
                            <li class="sep"><span>|</span></li>
                            <li><i class="fa fa-envelope-o topbar-info-icon top-2"></i>Email: <span>info@keenthemes.com</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 login-reg-links">
                        <ul class="list-unstyled inline">
                            <li><a href="page_login.html">Login</a></li>
                            <li class="sep"><span>|</span></li>
                            <li><a href="page_signup.html">Signup</a></li>
                        </ul>
                    </div>
                </div>
            </div>        
        </div>
        <!-- END TOP BAR -->
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
                    <li class="active">
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
	
        <!-- BEGIN REVOLUTION SLIDER -->    
        <div class="fullwidthbanner-container slider-main">
            <div class="fullwidthabnner">
                <ul id="revolutionul" style="display:none;">
                        <!-- THE NEW SLIDE -->
                        <li data-transition="random" data-slotamount="8" data-masterspeed="700" data-delay="9400">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <img src="frontend/template/assets/img/cvsu/bg1.png" alt="">
                            
                            <div class="caption lft slide_title_white slide_item_left"
                                 data-x="30"
                                 data-y="90"
                                 data-speed="400"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                                 CAVITE STATE UNIVERSITY<br><span class="slide_title_white_bold">Imus City Campus</span>
                            </div>
                            <!--div class="caption lft slide_subtitle_white slide_item_left"
                                 data-x="87"
                                 data-y="245"
                                 data-speed="400"
                                 data-start="2000"
                                 data-easing="easeOutExpo">
                                 College of Business and Entreprenuership
                            </div>
                            <!--a class="caption lft btn dark slide_btn slide_item_left" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
                                 data-x="187"
                                 data-y="315"
                                 data-speed="400"
                                 data-start="3000"
                                 data-easing="easeOutExpo">
                                 Purchase Now!
                            </a-->                        
                            <div class="caption lfb"
                                 data-x="640" 
                                 data-y="0" 
                                 data-speed="700" 
                                 data-start="1000" 
                                 data-easing="easeOutExpo"  >
                                 <img src="frontend/template/assets/img/cvsu/cvsulogo_slider.png" alt="Image 1">
                            </div>
                        </li>            
                        <!-- THE FIRST SLIDE -->
                        <!--li data-transition="random" data-slotamount="8" data-masterspeed="700" data-delay="9400">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <!--img src="frontend/template/assets/img/sliders/revolution/bg1.jpg" alt="">
                            
                            <div class="caption lft slide_title slide_item_left"
                                 data-x="0"
                                 data-y="105"
                                 data-speed="400"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                                 Need a website design ? 
                            </div>
                            <div class="caption lft slide_subtitle slide_item_left"
                                 data-x="0"
                                 data-y="180"
                                 data-speed="400"
                                 data-start="2000"
                                 data-easing="easeOutExpo">
                                 This is what you were looking for
                            </div>
                            <div class="caption lft slide_desc slide_item_left"
                                 data-x="0"
                                 data-y="220"
                                 data-speed="400"
                                 data-start="2500"
                                 data-easing="easeOutExpo">
                                 Lorem ipsum dolor sit amet, dolore eiusmod<br>
                                 quis tempor incididunt. Sed unde omnis iste.
                            </div>
                            <a class="caption lft btn green slide_btn slide_item_left" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
                                 data-x="0"
                                 data-y="290"
                                 data-speed="400"
                                 data-start="3000"
                                 data-easing="easeOutExpo">
                                 Purchase Now!
                            </a>                        
                            <div class="caption lfb"
                                 data-x="640" 
                                 data-y="55" 
                                 data-speed="700" 
                                 data-start="1000" 
                                 data-easing="easeOutExpo"  >
                                 <img src="frontend/template/assets/img/sliders/revolution/man-winner.png" alt="Image 1">
                            </div>
                        </li>

                        <!-- THE SECOND SLIDE -->
                        <!--li data-transition="random" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="frontend/template/assets/img/sliders/revolution/thumbs/thumb2.jpg">                        
                            <img src="frontend/template/assets/img/sliders/revolution/bg2.jpg" alt="">
                            <div class="caption lfl slide_title slide_item_left"
                                 data-x="0"
                                 data-y="125"
                                 data-speed="400"
                                 data-start="3500"
                                 data-easing="easeOutExpo">
                                 Powerfull & Clean
                            </div>
                            <div class="caption lfl slide_subtitle slide_item_left"
                                 data-x="0"
                                 data-y="200"
                                 data-speed="400"
                                 data-start="4000"
                                 data-easing="easeOutExpo">
                                 Responsive Admin & Website Theme
                            </div>
                            <div class="caption lfl slide_desc slide_item_left"
                                 data-x="0"
                                 data-y="245"
                                 data-speed="400"
                                 data-start="4500"
                                 data-easing="easeOutExpo">
                                 Lorem ipsum dolor sit amet, consectetuer elit sed diam<br> nonummy amet euismod dolore.
                            </div>                        
                            <div class="caption lfr slide_item_right" 
                                 data-x="635" 
                                 data-y="105" 
                                 data-speed="1200" 
                                 data-start="1500" 
                                 data-easing="easeOutBack">
                                 <img src="frontend/template/assets/img/sliders/revolution/mac.png" alt="Image 1">
                            </div>
                            <div class="caption lfr slide_item_right" 
                                 data-x="580" 
                                 data-y="245" 
                                 data-speed="1200" 
                                 data-start="2000" 
                                 data-easing="easeOutBack">
                                 <img src="frontend/template/assets/img/sliders/revolution/ipad.png" alt="Image 1">
                            </div>
                            <div class="caption lfr slide_item_right" 
                                 data-x="735" 
                                 data-y="290" 
                                 data-speed="1200" 
                                 data-start="2500" 
                                 data-easing="easeOutBack">
                                 <img src="frontend/template/assets/img/sliders/revolution/iphone.png" alt="Image 1">
                            </div>
                            <div class="caption lfr slide_item_right" 
                                 data-x="835" 
                                 data-y="230" 
                                 data-speed="1200" 
                                 data-start="3000" 
                                 data-easing="easeOutBack">
                                 <img src="frontend/template/assets/img/sliders/revolution/macbook.png" alt="Image 1">
                            </div>
                            <div class="caption lft slide_item_right" 
                                 data-x="865" 
                                 data-y="45" 
                                 data-speed="500" 
                                 data-start="5000" 
                                 data-easing="easeOutBack">
                                 <img src="frontend/template/assets/img/sliders/revolution/hint1-blue.png" id="rev-hint1" alt="Image 1">
                            </div>                        
                            <div class="caption lfb slide_item_right" 
                                 data-x="355" 
                                 data-y="355" 
                                 data-speed="500" 
                                 data-start="5500" 
                                 data-easing="easeOutBack">
                                 <img src="frontend/template/assets/img/sliders/revolution/hint2-blue.png" id="rev-hint2" alt="Image 1">
                            </div>

                        </li>
                        
                        <!-- THE THIRD SLIDE -->
                        <!--li data-transition="random" data-slotamount="8" data-masterspeed="700" data-delay="9400">
                            <img src="frontend/template/assets/img/sliders/revolution/bg3.jpg" alt="">
                            <div class="caption lfl slide_item_left" 
                                 data-x="20" 
                                 data-y="95" 
                                 data-speed="400" 
                                 data-start="1500" 
                                 data-easing="easeOutBack">
                                 <iframe src="http://player.vimeo.com/video/56974716?portrait=0" width="420" height="240" style="border:0" allowFullScreen></iframe> 
                            </div>
                            <div class="caption lfr slide_title"
                                 data-x="470"
                                 data-y="100"
                                 data-speed="400"
                                 data-start="2000"
                                 data-easing="easeOutExpo">
                                 Responsive Video Support
                            </div>
                            <div class="caption lfr slide_subtitle"
                                 data-x="470"
                                 data-y="170"
                                 data-speed="400"
                                 data-start="2500"
                                 data-easing="easeOutExpo">
                                 Youtube, Vimeo and others.
                            </div>
                            <div class="caption lfr slide_desc"
                                 data-x="470"
                                 data-y="220"
                                 data-speed="400"
                                 data-start="3000"
                                 data-easing="easeOutExpo">
                                 Lorem ipsum dolor sit amet, consectetuer elit sed diam<br> nonummy amet euismod dolore.
                            </div>
                            <a class="caption lfr btn yellow slide_btn" href=""
                                 data-x="470"
                                 data-y="280"
                                 data-speed="400"
                                 data-start="3500"
                                 data-easing="easeOutExpo">
                                 Watch more Videos!
                            </a>
                        </li>               
                        
                        <!-- THE FORTH SLIDE -->
                        <!--li data-transition="random" data-slotamount="8" data-masterspeed="700" data-delay="9400">
                            <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                            <!--img src="frontend/template/assets/img/sliders/revolution/bg4.jpg" alt="">                        
                             <div class="caption lft slide_title"
                                 data-x="0"
                                 data-y="105"
                                 data-speed="400"
                                 data-start="1500"
                                 data-easing="easeOutExpo">
                                 What else included ?
                            </div>
                            <div class="caption lft slide_subtitle"
                                 data-x="0"
                                 data-y="180"
                                 data-speed="400"
                                 data-start="2000"
                                 data-easing="easeOutExpo">
                                 The Most Complete Admin Theme
                            </div>
                            <div class="caption lft slide_desc"
                                 data-x="0"
                                 data-y="225"
                                 data-speed="400"
                                 data-start="2500"
                                 data-easing="easeOutExpo">
                                 Lorem ipsum dolor sit amet, consectetuer elit sed diam<br> nonummy amet euismod dolore.
                            </div>
                            <a class="caption lft slide_btn btn red slide_item_left" href="http://www.keenthemes.com/preview/index.php?theme=metronic_admin" target="_blank" 
                                 data-x="0"
                                 data-y="300"
                                 data-speed="400"
                                 data-start="3000"
                                 data-easing="easeOutExpo">
                                 Learn More!
                            </a>                        
                            <div class="caption lft start"  
                                 data-x="670" 
                                 data-y="55" 
                                 data-speed="400" 
                                 data-start="2000" 
                                 data-easing="easeOutBack"  >
                                 <img src="frontend/template/assets/img/sliders/revolution/iphone_left.png" alt="Image 2">
                            </div>
                            
                            <div class="caption lft start"  
                                 data-x="850" 
                                 data-y="55" 
                                 data-speed="400" 
                                 data-start="2400" 
                                 data-easing="easeOutBack"  >
                                 <img src="frontend/template/assets/img/sliders/revolution/iphone_right.png" alt="Image 3">
                            </div>                        
                        </li-->
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
		
        <!-- BEGIN CONTAINER -->   
        <div class="container">
            <!-- BEGIN SERVICE BOX -->   
            <div class="row service-box center">
                <div class="col-md-4 col-sm-4">
                    <div class="service-box-heading">
                        <em><i class="fa fa-desktop blue"></i></em>
                        <span class="blue">Multimedia</span>
                    </div>
                    <p class="blue">Is the integration of multiple forms of media. This includes text, audio, video, animation,
                     interactive features, and still images in various ways and combinations made possible through the advancement of technology.</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="service-box-heading">
                        <em><i class="fa fa-camera red"></i></em>
                        <span class="red">Multimedia System</span>
                    </div>
                    <p class="red">Computer-delivered electronic system that allows the user to control, combine, and manipulate different types of media,
                     such as text, sound, video, computer graphics, and animation.</p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="service-box-heading">
                        <em><i class="fa fa-flash green"></i></em>
                        <span class="green">Adobe Flash</span>
                    </div>
                    <p class="green">Is a multimedia and software
                     platform used for creating vector graphics, animation, games and rich Internet applications 
                     (RIAs) that can be viewed, played and executed in Adobe Flash Player. Formerly called Macromedia Flash and Shockwave Flash.</p>
                </div>
            </div>

            <!-- END SERVICE BOX -->  

            <!-- BEGIN BLOCKQUOTE BLOCK -->   
            <div class="row quote-v1">
                <div class="col-md-12 quote-v1-inner center">
                    <span>CAVITE STATE UNIVERSITY IMUS CITY CAMPUS</span>
                </div>
                <!--div class="col-md-3 quote-v1-inner text-right">
                    <a class="btn-transparent" href="http://www.keenthemes.com/preview/index.php?theme=metronic_admin" target="_blank"><i class="fa fa-rocket margin-right-10"></i>Preview Admin</a>
                    <!--<a class="btn-transparent" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469"><i class="icon-gift margin-right-10"></i>Purchase 2 in 1</a>-->
                <!--/div-->
            </div>
            <!-- END BLOCKQUOTE BLOCK -->

            <div class="clearfix"></div>

            <!-- BEGIN RECENT WORKS -->
            <!--div class="row recent-work margin-bottom-40">
                <div class="col-md-3">
                    <h2><a href="portfolio.html">Recent Works</a></h2>
                    <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
                </div>
                <div class="col-md-9">
                    <ul class="bxslider">
                        <li>
                            <em>
                                <img src="frontend/template/assets/img/works/img1.jpg" alt="" />
                                <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                <a href="frontend/template/assets/img/works/img1.jpg" class="fancybox-button" title="Project Name #1" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                            </em>
                            <a class="bxslider-block" href="#">
                                <strong>Amazing Project</strong>
                                <b>Agenda corp.</b>
                            </a>
                        </li>
                        <li>
                            <em>
                                <img src="frontend/template/assets/img/works/img2.jpg" alt="" />
                                <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                <a href="frontend/template/assets/img/works/img2.jpg" class="fancybox-button" title="Project Name #2" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                            </em>
                            <a class="bxslider-block" href="#">
                                <strong>Amazing Project</strong>
                                <b>Agenda corp.</b>
                            </a>
                        </li>
                        <li>
                            <em>
                                <img src="frontend/template/assets/img/works/img3.jpg" alt="" />
                                <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                <a href="frontend/template/assets/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                            </em>
                            <a class="bxslider-block" href="#">
                                <strong>Amazing Project</strong>
                                <b>Agenda corp.</b>
                            </a>
                        </li>
                        <li>
                            <em>
                                <img src="frontend/template/assets/img/works/img4.jpg" alt="" />
                                <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                <a href="frontend/template/assets/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                            </em>
                            <a class="bxslider-block" href="#">
                                <strong>Amazing Project</strong>
                                <b>Agenda corp.</b>
                            </a>
                        </li>
                        <li>
                            <em>
                                <img src="frontend/template/assets/img/works/img5.jpg" alt="" />
                                <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                <a href="frontend/template/assets/img/works/img5.jpg" class="fancybox-button" title="Project Name #5" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                            </em>
                            <a class="bxslider-block" href="#">
                                <strong>Amazing Project</strong>
                                <b>Agenda corp.</b>
                            </a>
                        </li>
                        <li>
                            <em>
                                <img src="frontend/template/assets/img/works/img6.jpg" alt="" />
                                <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                <a href="frontend/template/assets/img/works/img6.jpg" class="fancybox-button" title="Project Name #6" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                            </em>
                            <a class="bxslider-block" href="#">
                                <strong>Amazing Project</strong>
                                <b>Agenda corp.</b>
                            </a>
                        </li>
                        <li>
                            <em>
                                <img src="frontend/template/assets/img/works/img3.jpg" alt="" />
                                <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                <a href="frontend/template/assets/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                            </em>
                            <a class="bxslider-block" href="#">
                                <strong>Amazing Project</strong>
                                <b>Agenda corp.</b>
                            </a>
                        </li>
                        <li>
                            <em>
                                <img src="frontend/template/assets/img/works/img4.jpg" alt="" />
                                <a href="portfolio_item.html"><i class="fa fa-link icon-hover icon-hover-1"></i></a>
                                <a href="frontend/template/assets/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search icon-hover icon-hover-2"></i></a>
                            </em>
                            <a class="bxslider-block" href="#">
                                <strong>Amazing Project</strong>
                                <b>Agenda corp.</b>
                            </a>
                        </li>
                    </ul>        
                </div>
            </div>   
            <!-- END RECENT WORKS -->

            <div class="clearfix"></div>

            <!-- BEGIN TABS AND TESTIMONIALS -->
            <div class="row mix-block">
                <!-- TABS -->
                <div class="col-md-12 tab-style-1 margin-bottom-20">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-1" data-toggle="tab">Mission</a></li>
                        <li><a href="#tab-2" data-toggle="tab">Vision</a></li>
                        <!--li><a href="#tab-3" data-toggle="tab">Goals</a></li-->
                        <li><a href="#tab-4" data-toggle="tab">Course Objectives</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane row fade in active" id="tab-1">
                            <div class="col-md-2">
                                <!--a href="frontend/template/assets/img/photos/img7.jpg" class="fancybox-button" title="Image Title" data-rel="fancybox-button"-->
                                    <img class="img-responsive" src="frontend/template/assets/img/cvsu/cvsulogo.png" alt="" />
                                </a>
                            </div>
                            <div class="col-md-9">
                                <p class="margin-bottom-10"><h5>Cavite State University shall provide excellent, 
                                equitable and relevant educational opportunities in the arts, sciences and 
                                technology through quality instruction and responsive research and development activities.
                                </br></br>It shall produce professional, skilled and morally upright individuals for global competitiveness.</h5></p>
                            </div>
                        </div>
                        <div class="tab-pane row fade" id="tab-2">
                            <div class="col-md-9">
                                </br><p><h5>The premier University in historic Cavite recognized for excellence in the development
                                 of globally competitive and morally upright individuals.</h5></p>
                            </div>
                            <!--div class="col-md-2">
                                <!--a href="frontend/template/assets/img/photos/img10.jpg" class="fancybox-button" title="Image Title" data-rel="fancybox-button"-->
                                    <!--img class="img-responsive" src="frontend/template/assets/img/cvsu/cvsulogo.png" alt="" />
                                </a>
                            </div-->
                        </div>
                        <!--div class="tab-pane fade" id="tab-3">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                        </div-->
                        <div class="tab-pane fade" id="tab-4">
            <p><h5>At the end of the semester, student should be able to:</br></br>
<p class ="indent">1.  Explain the Mission, Goals and Objectives of the College;</p>
<p class ="indent">2.  Explain the properties of different media and compare one from the other</p>
<p class ="indent">3.  Identify different image classification and learn how they are stored in storage media</p>
<p class ="indent">4.  Learn data compression techniques used for text, images audio and video;</p>
<p class ="indent">5.  Distinguish different hardware considerations on various video formats;</p>
<p class ="indent">6.  Enumerate the different procedure and processes applied in these formats; and</p>
<p class ="indent">7.  Expose the students in using the most commonly used image enhancement and animation program, like Flash
</h5></p>
                        </div>
                    </div>
                </div>
                <!-- END TABS -->


        
                <!-- TESTIMONIALS -->
                <!--div class="col-md-5 testimonials-v1">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Carousel items -->
                        <!--div class="carousel-inner">
                            <div class="active item">
                                <span class="testimonials-slide">Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met consectetur adipisicing sit amet do eiusmod dolore.</span>
                                <div class="carousel-info">
                                    <img class="pull-left" src="frontend/template/assets/img/people/img1-small.jpg" alt="" />
                                    <div class="pull-left">
                                        <span class="testimonials-name">Lina Mars</span>
                                        <span class="testimonials-post">Commercial Director</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <span class="testimonials-slide">Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven't heard of them jean shorts austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</span>
                                <div class="carousel-info">
                                    <img class="pull-left" src="frontend/template/assets/img/people/img5-small.jpg" alt="" />
                                    <div class="pull-left">
                                        <span class="testimonials-name">Kate Ford</span>
                                        <span class="testimonials-post">Commercial Director</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <span class="testimonials-slide">Reprehenderit butcher stache cliche tempor, williamsburg carles vegan helvetica.retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</span>
                                <div class="carousel-info">
                                    <img class="pull-left" src="frontend/template/assets/img/people/img2-small.jpg" alt="" />
                                    <div class="pull-left">
                                        <span class="testimonials-name">Jake Witson</span>
                                        <span class="testimonials-post">Commercial Director</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel nav -->
                        <!--a class="left-btn" href="#myCarousel" data-slide="prev"></a>
                        <a class="right-btn" href="#myCarousel" data-slide="next"></a>
                    </div>
                </div>
                <!-- END TESTIMONIALS -->
            <!--/div>                
            <!-- END TABS AND TESTIMONIALS -->

            <!-- BEGIN STEPS -->
                
            <div class="row no-space-steps margin-bottom-40">
            <div class="margin-left-10">
                <h2 class="text-white">Core Values:</h2>
            </div>
            <div class="margin-left-5">
                <h4>Students are expected to live by and stand for the following University tenets:</h4></br>
              </div>
                <div class="col-md-4 col-sm-4">
                    <div class="front-steps front-step-one">
                        <h2>TRUTH</h2>
                        <p class="bold center">Is demonstrated by the student’s objectivity and honesty during examinations, 
                        class activities and in the development of projects.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="front-steps front-step-two">
                        <h2>EXCELLENCE</h2>
                        <p class="bold center">Is exhibited by the student’s self-confidence, punctuality, diligence and 
                        commitment in the assigned tasks, class performance and other course requirements. </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 margin-bottom-20">
                    <div class="front-steps front-step-three">
                        <h2>SERVICE</h2>
                        <p class="bold center">Is manifested by the student’s respect, rapport, fairness and cooperation in dealing 
                        with their peers and members of the community.</p>
                    </div>
                </div>
                <div class="margin-left-5">
                <h4>In addition, they should exhibit love and respect for nature and support for the cause of humanity.</h4>
              </div>            
            </div>
            
            <!-- END STEPS -->
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
    <script type="text/javascript" src="frontend/template/assets/plugins/back-to-top.js"></script>    
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="frontend/template/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>  
    <script type="text/javascript" src="frontend/template/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="frontend/template/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
    <script type="text/javascript" src="frontend/template/assets/plugins/bxslider/jquery.bxslider.min.js"></script>
    <script src="frontend/template/assets/scripts/app.js"></script>
    <script src="frontend/template/assets/scripts/index.js"></script>    
    <script type="text/javascript">

        jQuery(document).ready(function() {
            App.init();    
            App.initBxSlider();
            Index.initRevolutionSlider();                    
        });
    </script>
    <script src="template/js/example.js"></script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>