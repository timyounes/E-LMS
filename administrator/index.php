<?php
require '../confirm.php';
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
<title>E-LMS-CvSUIC | Login Page</title>
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
<link href="../template/assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<link href="../template/css/animate.min.css" rel="stylesheet" /> 
   <link href="../template/css/animate.delay.css" rel="stylesheet" type="text/css"/> 
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="../template/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="../template/assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
<link href="../template/assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="../icon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="loginwrap zindex100 animate2 bounceInDown">
<div class="logo">
	<a href="index.php">
		<img src="../template/assets/img/cvsu_logo.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->

	<div class="content">
	<!-- BEGIN LOGIN FORM -->
	
	<form class="login-form" action="../function/login_validate.php" method="post" enctype="multipart/form-data">
		<h3 class="form-title">Login to your account</h3>
		<div class='alert alert-danger display-hide'>
			<button class='close' data-close='alert'></button>
				<span>
					Incorrect username or password!
				</span>
		</div>
		<div class="form-group animate4 bounceIn">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="Username" name="username" required/>
			</div>
		</div>
		<div class="form-group animate5 flip">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" placeholder="Password" name="password" required/>
			</div>
		</div>

		<div class="form-actions">
		<div class="col-md-13 animate6 wobble">
				<button type="submit" class="btn blue" name="login">
				<i class="fa fa-sign-in"></i> Sign-in
				</button>

			</div>
		</div>
	</form>

	<!--div class="btn-group">
		<button id="ajax-demo" class="btn green" data-toggle="modal" name="log">
		<i class="glyphicon glyphicon-plus"></i> Log-out my Account </button>
	</div>
	<div id="users-modal" class="modal fade" tabindex="-1"></div-->
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->

	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->

	<!-- END REGISTRATION FORM -->
		</div>

<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<?php
	include"../footer.php";
?>

   </div>
     <div class="loginshadow animate3 fadeInUp"></div>
<!-- END COPYRIGHT -->
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
<script src="../template/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script src="../template/assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../template/assets/plugins/select2/select2.min.js"></script>
<script src="../template/assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="../template/assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../template/assets/scripts/core/app.js" type="text/javascript"></script>
<script src="../template/assets/scripts/custom/login_admin.js" type="text/javascript"></script>
<script src="../template/assets/scripts/custom/extended-modal-logging.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="../template/assets/plugins/jquery-idle-timeout/jquery.idletimeout.js" type="text/javascript"></script>
<script src="../template/assets/plugins/jquery-idle-timeout/jquery.idletimer.js" type="text/javascript"></script>
<script src="../template/assets/scripts/custom/ui-idletimeout.js"></script>
<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login_admin.init();
		  UIExtendedModals.init();
<?php
if(isset($_SESSION["success"]))
{
	if($_SESSION["success"]=='true')
	{
?>
 UIIdleTimeout.init();
<?php
$_SESSION["success"]="";
	}
}
?>
		 
		});
</script>
<!-- END JAVASCRIPTS -->

</body>
<!-- END BODY -->
</html>
