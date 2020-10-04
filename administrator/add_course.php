<?php
  require '../config/config.php';
  require '../function/filter.php';
?>
<!DOCTYPE html>
<html>
<body>
<form action="add_course.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
		<div class="col-md-12">
<div class="modal-header">
	<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button-->
	<h4 class="modal-title center">ADD NEW PROGRAM</h4>
</div>
<div class="modal-body">
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-clipboard"></i></span>
        <input type="text" class="col-md-8 form-control" placeholder="Enter Course Acronym" name="course" required>
      </div>

	</div>
</div>
<div class="modal-footer center">
<div class="col-md-5 col-md-offset-1">
	<button type="button" class="btn red" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
</div>
<div class="col-md-5">
	<button type="submit" class="btn blue" name="save"><i class="fa fa-save"></i> Save</button>
</div>
</div>
</form>

<?php
  if(isset($_POST['save']))
  {
    $course= tim($_POST['course']);
    $query= mysql_query("select * from course where course= '$course' ") or die("Error");
    if(mysql_num_rows($query)>0)
    {
        echo "<script type='text/javascript'>
          history.back();
          alert('Data already exists!');
        </script>";
    }
    else
    {
        if(mysql_query("insert into course (course)values('$course') "))
        {
          echo "<script type='text/javascript'>
            history.back();
            alert('New information has been added successfully!');
          </script>";
        }
        else
        {
          echo "<script type='text/javascript'>
          history.back();
          alert('Cannot add new information. Something went wrong!');
          </script>";
          //echo mysql_error();
        }
    }

  }
?>
</body>

</html>