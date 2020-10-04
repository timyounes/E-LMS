<?php
session_start();
require'../config/config.php';
require'filter.php';

$id=$_SESSION['timkey'];

	if (!isset($_FILES['propic']['tmp_name']))
	 {
	 
	echo "<script type='text/javascript'>
				alert('Please choose an image file!');
				window.location='../instructors/myprofile.php';
				</script>";
	}
	else
	{
		$allowedExts = array("jpg","png","jpeg","gif");
		$ImageName  = str_replace(' ','-',strtolower($_FILES['propic']['name']));
		$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
		$ImageExt = str_replace('.','',$ImageExt);
		if(!in_array($ImageExt, $allowedExts))
    {
        echo "<script type='text/javascript'>
				alert('Please choose an image file!');
				window.location='../instructors/myprofile.php';
				
				</script>";
    }
	else
	{
	
	$file=$_FILES['propic']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['propic']['tmp_name']));
	$image_name= addslashes($_FILES['propic']['name']);
	$image_size= getimagesize($_FILES['propic']['tmp_name']);

		if ($image_size==FALSE) 
		{
		
			echo "That's not an image!";
			
		}
		else
		{
			$thumb_dir = "../instructors/images/profilepic/";
			$img_dir = "../instructors/images/profilepic/";
			$res=mysql_query("select * from users where id='$id' ") or die("Error");
			$row=mysql_fetch_assoc($res);
		if($num=mysql_num_rows($res)>0)
		{
			$images=$row['username'];
			if(file_exists($thumb_dir. $images . '.jpg'))
			{
				if (unlink($thumb_dir . $images . '.jpg'))
				{
					$location=$_FILES["propic"]["name"]=$images.'.jpg';
					move_uploaded_file($_FILES["propic"]["tmp_name"],"../instructors/images/profilepic/" . $_FILES["propic"]["name"]);
					mysql_query("update users set profilepic ='$location' where id='$id'") or die ("Error");
					echo "<script type='text/javascript'>
						alert('Updated Successfully');
						window.location='../instructors/myprofile.php';
					</script>";
				}
				else
				{
					echo "<script type='text/javascript'>
						alert('Error during changing profile picture');
						window.location='../instructors/myprofile.php';
					</script>";
				}
			}
			else
				{
					echo "<script type='text/javascript'>
						alert('Error during changing profile picture');
						window.location='../instructors/myprofile.php';
					</script>";
				}
		}
		else
		{
					echo "<script type='text/javascript'>
						alert('Profile picture already exists');
						window.location='../instructors/myprofile.php';
					</script>";
		}
		}
		}
		
	}

?>