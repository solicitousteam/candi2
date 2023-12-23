<?php 

	include 'auth_session.php';
	include 'connect.php';
	extract($_POST);
	$id=$_GET['id'];
	$result=mysqli_query($conn,"DELETE FROM `interview_questions` WHERE `interview_questions_id`=$id");
	header('location: question.php');
            
	
?>