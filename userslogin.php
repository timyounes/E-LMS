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
    <title>E-LMS-CvSUIC | Login Page</title>
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
   <link href="frontend/template/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/> 
	<script src="template/assets/js/jquery.min.js"></script>
	<script src="template/assets/js/jquery.ui.shake.js"></script>
    <link href="template/css/animate.min.css" rel="stylesheet" /> 
   <link href="template/css/animate.delay.css" rel="stylesheet" type="text/css"/>    
   <!-- END PAGE LEVEL PLUGIN STYLES -->

   <!-- BEGIN THEME STYLES --> 
   <link href="frontend/template/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/pages/page404.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/themes/green.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="frontend/template/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="frontend/template/assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->

   <link rel="shortcut icon" href="icon.ico" />
   
   
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body>
  

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
                    </li>

                    <li class="active"><a href="userslogin.php"><i class= "glyphicon glyphicon-user"></i> Login</a></li>
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
  
        <!-- BEGIN BREADCRUMBS -->   
        <div class="row breadcrumbs margin-bottom-40">
            <div class="container">
                <div class="col-md-4 col-sm-4">
                    <h1>Login</h1>
                </div>
                <div class="col-md-8 col-sm-8">
                    <ul class="pull-right breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END BREADCRUMBS -->

        <!-- BEGIN CONTAINER -->
	<div id="box">
    <div class="loginwrap zindex100 animate2 bounceInDown">
        <div class="container margin-bottom-tim">
          <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 login-signup-page">
				
                <form action="function/login_student.php" method="post" enctype="multipart/form-data">           
                    
                    <h2>Login to your account</h2>

                    <div class="input-group margin-bottom-20 animate4 bounceIn">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="username" required />
                    </div>                    
                    <div class="input-group margin-bottom-20 animate5 flip">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password" required />
                        <!--a href="#" class="login-signup-forgot-link">Forgot?</a-->
                    </div>                    

                    <div class="row">
                        <div class="col-md-12 animate6 wobble">
                        <button type="submit" class="theme-btn btn1" name="login" id="log"><i class="fa fa-sign-in"></i> Sign - In</button>
                        </div>
						<span class='msg'></span> 
                    </div>
                    <!--hr>

                    <div class="login-socio">
                        <p class="text-muted">or login using:</p>
                        <ul class="social-icons">
                            <li><a class="facebook" data-original-title="facebook" href="#"></a></li>
                            <li><a class="twitter" data-original-title="Twitter" href="#"></a></li>
                            <li><a class="googleplus" data-original-title="Goole Plus" href="#"></a></li>
                            <li><a class="linkedin" data-original-title="Linkedin" href="#"></a></li>
                        </ul>
                    </div-->
                </form>
            </div>
          </div>
        </div>
        </div>
        <div class="loginshadow animate3 fadeInUp"></div>
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
	<script src="frontend/template/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="frontend/template/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>

    <script src="frontend/template/assets/scripts/app.js"></script>  
    <script type="text/javascript">
        jQuery(document).ready(function() 
        {    
           App.init();
		   App.initUniform();  
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
<?php
if(isset($_SESSION["validate"]))
{
    if($_SESSION["validate"]=='false')
    {
        echo "<script type='text/javascript'>
            alert('Incorrect username of password!');
        </script>";
        $_SESSION["validate"]="";
    }
}
?>
</body>
<!-- END BODY -->
</html>