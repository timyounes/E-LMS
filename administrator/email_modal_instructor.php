<?php
  session_start();
  require '../function/confirm.php';
  require '../config/config.php';
  require '../function/random_characters.php';
  require '../function/filter.php';
  $id=$_SESSION['timkey'];
?>
<html>
<body>
<form action="email_modal_instructor.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
		<div class="col-md-12">
<div class="modal-header">
	<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button-->
	<h4 class="modal-title center">ADD NEW INSTRUCTOR INFORMATION</h4>
</div>
<div class="modal-body">
	<div class="row">
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
        <input type="email" class="col-md-12 form-control" placeholder="Email Address" name="email" required>
      </div>
		</div>
		
	</div>
</div>
<div class="modal-footer center">
<div class="col-md-5 col-md-offset-1">
	<button type="button" class="btn red" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
</div>
<div class="col-md-5">
  <button type="submit" class="btn blue" name="send"><i class="glyphicon glyphicon-send"></i> Send</button>
</div>
</div>
</form>

<?php
  if(isset($_POST['send']))
  {
    $vcode=$code;
    $email= tim($_POST['email']);
    $query= mysql_query("select * from users where email= '$email' and verification_code='$vcode'") or die("Error");
    if(mysql_num_rows($query)>0)
    {
        echo "<script type='text/javascript'>
        alert('Data already exists!');
        window.location='manageusers.php';
        </script>";
    }
    else
    {
    	$signup='localhost/ILMS/signup_instructor.php';
      $message=" You can now signup to create you new account please click this link: http://127.0.0.1/E-LMS/signup_instructor.php"; 
      if(mail($email,"Verification Code","Your verification is: ".$vcode.$message))
        
      {
        if(mysql_query("insert into users (email, verification_code)values('$email', '$vcode') "))
        {
          echo "<script type='text/javascript'>
          alert('New information has been added successfully!');
          window.location='manageusers.php';
          </script>";
        }
        else
        {
          echo "<script type='text/javascript'>
          alert('Cannot add new information. Something went wrong!');
          window.location='manageusers.php';
          </script>";
          //echo mysql_error();
        }
      }
      else
      {
          echo "<script type='text/javascript'>
          alert('Please make sure that you have an internet connection and try again!');
          window.location='manageusers.php';
          </script>";
      }
    }

  }
?>
</body>
</html>