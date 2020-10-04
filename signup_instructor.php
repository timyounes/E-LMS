<?php
require 'confirm.php';
//require 'function/random_characters.php';
?>


<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>E-LMS-CvSUIC | Instructor Sign-Up Page</title>
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
                        <ul class="list-unstyle inline">
                            <li><i class="fa fa-phone topbar-info-icon top-2"></i>Call us: <span>(1) 456 6717</span></li>
                            <li class="sep"><span>|</span></li>
                            <li><i class="fa fa-envelope-o topbar-info-icon top-2"></i>Email: <span>info@keenthemes.com</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 login-reg-links">
                        <ul class="list-unstyled inline">
                            <li><a href="userslogin.php">Login</a></li>
                            <li class="sep"><span>|</span></li>
                            <li><a href="signup.php">Signup</a></li>
                        </ul>
                    </div>
                </div>
            </div>        
        </div-->
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
                    <!--li class="dropdown">
                            <a href="index.php">
                           <i class="glyphicon glyphicon-home"> </i> HOME
                            <!--i class="fa fa-angle-down"></i>
                        </a>
                        <!--ul class="dropdown-menu">
                            <li><a href="index.html">Home Default</a></li>
                            <li><a href="page_home_fixed_header.html">Header Fixed</a></li>
                            <li><a href="page_home2.html">Home with Top Bar</a></li>
                        </ul>
                    </li>
                    <li class="">
                      <a href="admin/login_users.php">
                        <i class="glyphicon glyphicon-user"></i>Login 
                      </a>
                      <!-- BEGIN DROPDOWN MENU -->
                    <li class="active"><a href="signup_instructor.php"><i class="glyphicon glyphicon-pencil"></i> Sign-Up</a></li>
                                <!--li><a href="forgot_password.php">Forgot your Password?</a></li>
                      <!-- END DROPDOWN MENU -->
                    </li>
                    <!--li><a href="lessons.php"><i class= "glyphicon glyphicon-book"></i> LESSONS</a></li>
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
                    <h1>INSTRUCTOR SIGN-UP FORM</h1>
                </div>
                <div class="col-md-8 col-sm-8">
                    <ul class="pull-right breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Instructor Sign Up Form</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END BREADCRUMBS -->
        <div class="mid">
            <h1>CREATE NEW ACCOUNT</h1>
        </div>
        <!-- BEGIN CONTAINER -->
  <div id="box">
        <div class="container margin-bottom-40">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-6 col-sm-offset-3 login-signup-page">
        
                <form action="function/newinstructor.php" method="post" enctype="multipart/form-data">           
                    
                    <h2>Your Account Details</h2>
                    <div class="form-group">
                    <div class="col-md-6 col-md-offset-1">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                        <input type="text" class="form-control" placeholder="Firstname" name="firstname" required>
                    </div>
                    </div>
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                        <input type="text" class="form-control" placeholder="Lastname" name="lastname" required>
                    </div>

                    <div class="form-group">
                    <div class="col-md-1"></div>
                          <div class="col-md-5">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                              <input type="text" class="form-control" placeholder="Mobile Number" pattern="[0-9]{11}" name="mobile" required>
                              </div>
                          </div>
                   </div>

                    <div class="radio-list margin-bottom-30">
                    <label class="radio-inline">Select Gender: </label>
                      <label class="radio-inline">
                      <input type="radio" name="gender"  value="Male" required /><i class="fa fa-male"></i> Male
                      </label>
                      <label class="radio-inline">
                      <input type="radio" name="gender"  value="Female" required /><i class="fa fa-female"></i> Female
                      </label>
                    </div>

                     <div class="form-group">
                    <div class="col-md-1"></div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input type="text" class="form-control" placeholder="Your complete address" name="address" required>
                    </div> 
                    </div>

                <div class="form-group">
                    <div class="col-md-5 col-md-offset-1">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                    </div>
                </div>
                </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                        <input type="text" class="form-control" placeholder="Verification Code" name="vcode" value="" required>
                    </div>
                  
                  

                 <div class="form-group">
                <div class="col-md-5 col-md-offset-1">  
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                    </div> 


                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>


                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Re-type password" name="cpassword" required>
                    </div>  

                  </div>
                  </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-9 margin-top-70">
                        <div class="col-md-5">
                            <button type="reset" class="btn red" name="reset"><i class="fa fa-eraser"></i> Clear</button>
                        </div>
                        <div class="col-md-7">               
                            <button type="submit" class="theme-btn btn_signup" name="signup" id="log"><i class="glyphicon glyphicon-send"></i> Create an Account</button>
                        </div>
                        </div>
            <!--span class='msg'></span> 

          <div id="error"-->
                    </div>

                    <!--hr>

                    <!--div class="login-socio">
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
        <!-- END CONTAINER -->

  </div>
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
if(isset($_SESSION["success"]))
{
    if($_SESSION["success"]=='true')
    {
        echo "<script type='text/javascript'>
            alert('Incorrect username of password!');
        </script>";
        $_SESSION["success"]="";
    }
}
?>
</body>
<!-- END BODY -->
</html>