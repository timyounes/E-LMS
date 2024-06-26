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
    <title>E-LMS-CvSUIC | About Page</title>
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
   <link href="frontend/template/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/themes/green.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="frontend/template/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->

   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body>
	<!-- BEGIN STYLE CUSTOMIZER -->
	<div class="color-panel hidden-sm">
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
                    <!--li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-delay="0" data-close-others="false" data-target="#" href="#">
                        Mega Menu 
                        <i class="fa fa-angle-down"></i>
                      </a>
                      <!-- BEGIN DROPDOWN MENU -->
                      <!--ul class="dropdown-menu" aria-labelledby="mega-menu">
                        <li>
                          <div class="nav-content">
                            <!-- BEGIN DROPDOWN MENU - COLUMN -->
                            <!--div class="nav-content-col">
                              <h3>Footwear</h3>
                              <ul>
                                <li><a href="#">Astro Trainers</a></li>
                                <li><a href="#">Basketball Shoes</a></li>
                                <li><a href="#">Boots</a></li>
                                <li><a href="#">Canvas Shoes</a></li>
                                <li><a href="#">Football Boots</a></li>
                                <li><a href="#">Golf Shoes</a></li>
                                <li><a href="#">Hi Tops</a></li>
                                <li><a href="#">Indoor and Court Trainers</a></li>
                              </ul>
                            </div>
                            <!-- END DROPDOWN MENU - COLUMN -->
                            <!-- BEGIN DROPDOWN MENU - COLUMN -->
                            <!--div class="nav-content-col">
                              <h3>Clothing</h3>
                              <ul>
                                <li><a href="#">Base Layer</a></li>
                                <li><a href="#">Character</a></li>
                                <li><a href="#">Chinos</a></li>
                                <li><a href="#">Combats</a></li>
                                <li><a href="#">Cricket Clothing</a></li>
                                <li><a href="#">Fleeces</a></li>
                                <li><a href="#">Gilets</a></li>
                                <li><a href="#">Golf Tops</a></li>
                              </ul>
                            </div>
                            <!-- END DROPDOWN MENU - COLUMN -->
                            <!-- BEGIN DROPDOWN MENU - COLUMN -->
                            <!--div class="nav-content-col">
                              <h3>Accessories</h3>
                              <ul>
                                <li><a href="#">Belts</a></li>
                                <li><a href="#">Caps</a></li>
                                <li><a href="#">Gloves, Hats and Scarves</a></li>
                              </ul>

                              <h3>Clearance</h3>
                              <ul>
                                <li><a href="#">Jackets</a></li>
                                <li><a href="#">Bottoms</a></li>
                              </ul>
                            </div>
                            <!-- END DROPDOWN MENU - COLUMN -->
                          <!--/div>
                        </li>
                      </ul>
                      <!-- END DROPDOWN MENU -->
                    <!--/li-->
                    <!--li class="dropdown active">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                            Pages
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="page_about.html">About Us</a></li>
                            <li><a href="page_services.html">Services</a></li>
                            <li><a href="page_prices.html">Prices</a></li>
                            <li><a href="page_faq.html">FAQ</a></li>
                            <li><a href="page_gallery.html">Gallery</a></li>
                            <li><a href="page_search_result.html">Search Result</a></li>
                            <li><a href="page_404.html">404</a></li>
                            <li><a href="page_500.html">500</a></li>
                            <li class="active"><a href="page_login.html">Login Page</a></li>
                            <li><a href="page_signup.html">Signup Page</a></li>
                            <li><a href="page_careers.html">Careers</a></li>
                            <li><a href="page_contacts.html">Contact</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                            Features
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="feature_typography.html">Typography</a></li>
                            <li><a href="feature_buttons.html">Buttons</a></li>
                            <li><a href="feature_forms.html">Forms</a></li>
                            <li><a href="feature_icons.html">Icons</a></li>
                        </ul>
                    </li>                        
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">
                            Portfolio
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio_4.html">Portfolio 4</a></li>
                            <li><a href="portfolio_3.html">Portfolio 3</a></li>
                            <li><a href="portfolio_2.html">Portfolio 2</a></li>
                            <li><a href="portfolio_item.html">Portfolio Item</a></li>
                        </ul>
                    </li-->
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-delay="0" data-close-others="false" data-target="#" href="#">
                        <i class="glyphicon glyphicon-user"></i> USER ACCOUNT 
                        <i class="fa fa-angle-down"></i>
                      </a>
                      <!-- BEGIN DROPDOWN MENU -->
                      <ul class="dropdown-menu">
                                <li><a href="signup_student.php">Sign-Up as Student</a></li>
                                <li><a href="signup_instructor.php">Sign-Up as Instructor</a></li>
                                <li><a href="forgot_password.php">Forgot your Password?</a></li>
                                <li><a href="userslogin.php">Login to your account</a></li>

                      </ul>
                      <!-- END DROPDOWN MENU -->
                    </li>
                    <li><a href="lessons.php"><i class= "glyphicon glyphicon-book"></i> LESSONS</a></li>
                    <li class="active"><a href="about.php"><i class="glyphicon glyphicon-list-alt"></i> ABOUT US</a></li>
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
					<h1>About Us</h1>
				</div>
				<div class="col-md-8 col-sm-8">
					<ul class="pull-right breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">About Us</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END BREADCRUMBS -->

		<!-- BEGIN CONTAINER -->   
		<div class="container min-hight">
			<!-- BEGIN ABOUT INFO -->   
			<div class="row margin-bottom-30">
				<!-- BEGIN INFO BLOCK -->               
				<div class="col-md-7 space-mobile">
					<h2>Vero eos et accusamus</h2>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p> 
					<p>Idest laborum et dolorum fuga. Et harum quidem rerum et quas molestias excepturi sint occaecati facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus.</p>
					<!-- BEGIN LISTS -->
					<div class="row front-lists-v1">
						<div class="col-md-6">
							<ul class="list-unstyled margin-bottom-20">
								<li><i class="fa fa-check"></i> Officia deserunt molliti</li>
								<li><i class="fa fa-check"></i> Consectetur adipiscing </li>
								<li><i class="fa fa-check"></i> Deserunt fpicia</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="list-unstyled">
								<li><i class="fa fa-check"></i> Officia deserunt molliti</li>
								<li><i class="fa fa-check"></i> Consectetur adipiscing </li>
								<li><i class="fa fa-check"></i> Deserunt fpicia</li>
							</ul>
						</div>
					</div>
					<!-- END LISTS -->
				</div>
				<!-- END INFO BLOCK -->   

				<!-- BEGIN CAROUSEL -->            
				<div class="col-md-5 front-carousel">
					<div id="myCarousel" class="carousel slide">
						<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="active item">
								<img src="frontend/template/assets/img/pics/img2-medium.jpg" alt="">
								<div class="carousel-caption">
									<p>Excepturi sint occaecati cupiditate non provident</p>
								</div>
							</div>
							<div class="item">
								<img src="frontend/template/assets/img/pics/img1-medium.jpg" alt="">
								<div class="carousel-caption">
									<p>Ducimus qui blanditiis praesentium voluptatum</p>
								</div>
							</div>
							<div class="item">
								<img src="frontend/template/assets/img/pics/img2-medium.jpg" alt="">
								<div class="carousel-caption">
									<p>Ut non libero consectetur adipiscing elit magna</p>
								</div>
							</div>
						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>                
				</div>
				<!-- END CAROUSEL -->             
			</div>
			<!-- END ABOUT INFO -->   

			<!-- BEGIN TESTIMONIALS AND PROGRESS BAR -->
			<div class="row margin-bottom-40">
				<!-- BEGIN TESTIMONIALS -->
				<div class="col-md-7 testimonials-v1">
					<h2 class="block">Clients Testimonials</h2>                
					<div id="myCarousel1" class="carousel slide">
						<!-- Carousel items -->
						<div class="carousel-inner">
							<div class="active item">
								<span class="testimonials-slide">Denim you probably haven't heard of. Lorem ipsum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met consectetur adipisicing sit amet do eiusmod dolore.</span>
								<div class="carousel-info">
									<img class="pull-left" src="frontend/template/assets/img/people/img3-small.jpg" alt="" />
									<div class="pull-left">
										<span class="testimonials-name">Lina Doe</span>
										<span class="testimonials-post">Commercial Director</span>
									</div>
								</div>
							</div>
							<div class="item">
								<span class="testimonials-slide">Raw denim you Mustache cliche tempor, williamsburg carles vegan helvetica probably haven't heard of them jean shorts austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</span>
								<div class="carousel-info">
									<img class="pull-left" src="frontend/template/assets/img/people/img2-small.jpg" alt="" />
									<div class="pull-left">
										<span class="testimonials-name">Lina Doe</span>
										<span class="testimonials-post">Commercial Director</span>
									</div>
								</div>
							</div>
							<div class="item">
								<span class="testimonials-slide">Reprehenderit butcher stache cliche tempor, williamsburg carles vegan helvetica.retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</span>
								<div class="carousel-info">
									<img class="pull-left" src="frontend/template/assets/img/people/img5-small.jpg" alt="" />
									<div class="pull-left">
										<span class="testimonials-name">Lina Doe</span>
										<span class="testimonials-post">Commercial Director</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Carousel nav -->
						<a class="left-btn" href="#myCarousel1" data-slide="prev"></a>
						<a class="right-btn" href="#myCarousel1" data-slide="next"></a>
					</div>
				</div>
				<!-- END TESTIMONIALS --> 

				<!-- BEGIN PROGRESS BAR -->
				<div class="col-md-5 front-skills space-mobile">
					<h2 class="block">Our Skills</h2>
					<span>UI Design 90%</span>
					<div class="progress">
						<div style="width: 90%;" class="progress-bar" role="progressbar"></div>
					</div>
					<span>Wordpress CMS 60%</span>
					<div class="progress">
						<div style="width: 60%;" class="progress-bar" role="progressbar"></div>
					</div>
					<span>HTML/CSS & JavaScirp 75%</span>
					<div class="progress">
						<div style="width: 75%;" class="progress-bar" role="progressbar"></div>
					</div>
				</div>                       
				<!-- END PROGRESS BAR -->
			</div>
			<!-- END TESTIMONIALS AND PROGRESS BAR --> 

			<!-- BEGIN OUR TEAM -->
			<div class="row front-team">
				<ul class="list-unstyled">
					<li class="col-md-3 space-mobile">
						<div class="thumbnail">
							<img src="frontend/template/assets/img/people/img1-large.jpg" alt="">
							<h3>
								<a>Lina Doe</a> 
								<small>Chief Executive Officer / CEO</small>
							</h3>
							<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
							<ul class="social-icons social-icons-color">
								<li><a href="#" data-original-title="Facebook" class="facebook"></a></li>
								<li><a href="#" data-original-title="Twitter" class="twitter"></a></li>
								<li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
								<li><a href="#" data-original-title="Linkedin" class="linkedin"></a></li>
							</ul>
						</div>
					</li>
					<li class="col-md-3 space-mobile">
						<div class="thumbnail">
							<img src="frontend/template/assets/img/people/img4-large.jpg" alt="">
							<h3>
								<a>Carles Puyol</a> 
								<small>Chief Executive Officer / CEO</small>
							</h3>
							<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
							<ul class="social-icons social-icons-color">
								<li><a href="#" data-original-title="Facebook" class="facebook"></a></li>
								<li><a href="#" data-original-title="Twitter" class="twitter"></a></li>
								<li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
								<li><a href="#" data-original-title="Linkedin" class="linkedin"></a></li>
							</ul>
						</div>
					</li>
					<li class="col-md-3 space-mobile">
						<div class="thumbnail">
							<img src="frontend/template/assets/img/people/img2-large.jpg" alt="">
							<h3>
								<a>Andres Iniesta</a> 
								<small>Chief Executive Officer / CEO</small>
							</h3>
							<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
							<ul class="social-icons social-icons-color">
								<li><a href="#" data-original-title="Facebook" class="facebook"></a></li>
								<li><a href="#" data-original-title="Twitter" class="twitter"></a></li>
								<li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
								<li><a href="#" data-original-title="Linkedin" class="linkedin"></a></li>
							</ul>
						</div>
					</li>
					<li class="col-md-3">
						<div class="thumbnail">
							<img src="frontend/template/assets/img/people/img5-large.jpg" alt="">
							<h3>
								<a>Jessica Alba</a> 
								<small>Chief Executive Officer / CEO</small>
							</h3>
							<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...</p>
							<ul class="social-icons social-icons-color">
								<li><a href="#" data-original-title="Facebook" class="facebook"></a></li>
								<li><a href="#" data-original-title="Twitter" class="twitter"></a></li>
								<li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
								<li><a href="#" data-original-title="Linkedin" class="linkedin"></a></li>
							</ul>
						</div>
					</li>
				</ul>            
			</div>
			<!-- END OUR TEAM -->
		</div>
		<!-- END CONTAINER -->

	</div>
    <!-- END PAGE CONTAINER -->  

    <!-- BEGIN FOOTER -->
    <!--div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 space-mobile">
                    <!-- BEGIN ABOUT -->                    
                    <!--h2>About</h2>
                    <p class="margin-bottom-30">Vivamus imperdiet felis consectetur onec eget orci adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper.</p>
                    <div class="clearfix"></div>                    
                    <!-- END ABOUT -->          

                    <!--h2>Photos Stream</h2>
                    <!-- BEGIN BLOG PHOTOS STREAM -->
                    <!--div class="blog-photo-stream margin-bottom-30">
                        <ul class="list-unstyled">
                            <li><a href="#"><img src="frontend/template/assets/img/people/img5-small.jpg" alt=""></a></li>
                            <li><a href="#"><img src="frontend/template/assets/img/works/img1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="frontend/template/assets/img/people/img4-large.jpg" alt=""></a></li>
                            <li><a href="#"><img src="frontend/template/assets/img/works/img6.jpg" alt=""></a></li>
                            <li><a href="#"><img src="frontend/template/assets/img/pics/img1-large.jpg" alt=""></a></li>
                            <li><a href="#"><img src="frontend/template/assets/img/pics/img2-large.jpg" alt=""></a></li>
                            <li><a href="#"><img src="frontend/template/assets/img/works/img3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="frontend/template/assets/img/people/img2-large.jpg" alt=""></a></li>
                            <li><a href="#"><img src="frontend/template/assets/img/works/img2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="frontend/template/assets/img/works/img5.jpg" alt=""></a></li>
                        </ul>                    
                    </div>
                    <!-- END BLOG PHOTOS STREAM -->                              
                <!--/div>
                <div class="col-md-4 col-sm-4 space-mobile">
                    <!-- BEGIN CONTACTS -->                                    
                    <!--h2>Contact Us</h2>
                    <address class="margin-bottom-40">
                        Loop, Inc. <br />
                        795 Park Ave, Suite 120 <br />
                        San Francisco, CA 94107 <br />
                        P: (234) 145-1810 <br />
                        Email: <a href="mailto:info@keenthemes.com">info@keenthemes.com</a>                        
                    </address>
                    <!-- END CONTACTS -->                                    

                    <!-- BEGIN SUBSCRIBE -->                                    
                    <!--h2>Monthly Newsletter</h2>  
                    <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                    <form action="#" class="form-subscribe">
                        <div class="input-group input-large">
                            <input class="form-control" type="text">
                            <span class="input-group-btn">
                                <button class="btn theme-btn" type="button">SUBSCRIBE</button>
                            </span>
                        </div>
                    </form>

                    <!-- END SUBSCRIBE -->                                    
                <!--/div>
                <!--div class="col-md-4 col-sm-4">
                    <!-- BEGIN TWITTER BLOCK -->                                                    
                    <!--h2>Latest Tweets</h2>
                    <dl class="dl-horizontal f-twitter">
                        <dt><i class="fa fa-twitter"></i></dt>
                        <dd>
                            <a href="#">@keenthemes</a>
                            Imperdiet condimentum diam dolor lorem sit consectetur adipiscing
                            <span>3 min ago</span>
                        </dd>
                    </dl>                    
                    <dl class="dl-horizontal f-twitter">
                        <dt><i class="fa fa-twitter"></i></dt>
                        <dd>
                            <a href="#">@keenthemes</a>
                            Sequat ipsum dolor onec eget orci fermentum condimentum lorem sit consectetur adipiscing
                            <span>8 min ago</span>
                        </dd>
                    </dl>                    
                    <dl class="dl-horizontal f-twitter">
                        <dt><i class="fa fa-twitter"></i></dt>
                        <dd>
                            <a href="#">@keenthemes</a>
                            Remonde sequat ipsum dolor lorem sit consectetur adipiscing
                            <span>12 min ago</span>
                        </dd>
                    </dl>                    
                    <dl class="dl-horizontal f-twitter">
                        <dt><i class="fa fa-twitter"></i></dt>
                        <dd>
                            <a href="#">@keenthemes</a>
                            Pilsum dolor lorem sit consectetur adipiscing orem sequat
                            <span>16 min ago</span>
                        </dd>
                    </dl>                    
                    <!-- END TWITTER BLOCK -->                                                                         
                <!--/div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->
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