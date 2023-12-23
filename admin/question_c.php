<?php 

	include 'auth_session.php';
	include 'connect.php';
	extract($_POST);
	$result=mysqli_query($conn,"INSERT INTO `interview_questions` (`interview_questions_id`, `question`, `duration`) VALUES (NULL, '$question', '$duration');");
	header('location: question.php');
            
	
?>