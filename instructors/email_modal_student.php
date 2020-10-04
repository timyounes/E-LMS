<?php
  session_start();
  require '../function/confirm.php';
  require '../config/config.php';
  require '../function/random_characters.php';
  require '../function/filter.php';
  $id=$_SESSION['timkey'];
?>
<form action="email_modal_student.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
    <div class="col-md-12">
<div class="modal-header">
  <h4 class="modal-title center">ADD NEW STUDENT INFORMATION</h4>
</div>
<div class="modal-body">
  <div class="row">
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
        <input type="email" class="col-md-10 form-control" placeholder="Email Address" name="email" required>
      </div>
      </br>
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="col-md-10 form-control" placeholder="Student Number" name="studentnumber" required>
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
    $studentnumber=tim($_POST['studentnumber']);
    $query= mysql_query("select * from student where email= '$email' and verification_code='$vcode' and student_id='$studentnumber' and instructor_id='$id'") or die("Error");
    if(mysql_num_rows($query)>0)
    {
        echo "<script type='text/javascript'>
        alert('Data already exists!');
        </script>";
    }
    else
    {
      if(mail($email,"Verification Code","Your verification is: ".$vcode))
        
      {
        if(mysql_query("insert into student (student_id, email, verification_code, instructor_id)values('$studentnumber', '$email', '$vcode', '$id') "))
        {
          echo "<script type='text/javascript'>
          alert('New information has been added successfully!');
          window.location='student_records.php';
          </script>";
        }
        
        else
        {
          // echo "<script type='text/javascript'>
          // alert('Cannot add new information. Something went wrong!');
          // window.location='student_records.php';
          // </script>";
          echo mysql_error();
        }
      }
      else
      {

          echo "<script type='text/javascript'>
          alert('Please make sure that you have an internet connection and try again!');
          window.location='student_records.php';
          </script>";
      }
    }

  }
?>