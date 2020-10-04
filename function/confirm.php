<?php
	if(!isset($_SESSION['timkey'])) {
		//header("location:../index.php");
		echo "<script type='text/javascript'>
			history.back();
		</script>";
		exit();

	}
?>