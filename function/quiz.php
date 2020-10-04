<?php
	session_start();
	require '../../function/confirm.php';
	require '../../config/config.php';

	$id1=$_SESSION['timkey'];

	$id = $_GET['unId'];

	$type = $_GET['unType'];

	$reponse = $_GET['uneReponse'];

	$reponse_correcte = $_GET['uneReponseCorrecte'];

	$numero = $_GET['unNumeroQuestion'];

	$statut = $_GET['unStatut']; 

	$points = $_GET['unPoint'];

	$poids = $_GET['unPoids'];

	$description = $_GET['uneDescription'];

	$quiz_id = $_GET['unQuizId'];

	$quiz_name = $_GET['unQuizName'];

	  if(mysql_query("INSERT INTO quiz_result (id, quiz_id, name, type, reponse, num_question, correct_response, status, points, weight, description, user_id) VALUES ('$id','$quiz_id','$quiz_name','$type','$reponse','$numero','$reponse_correcte','$statut','$points','$poids','$description','$user')"))
	  {
	  	header("location: ../students/student_lesson.php");
	  }
	  else
	  {
	  	echo mysql_error();
	  }
?>