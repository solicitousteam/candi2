<?php 
session_start();
include '../connect.php';
$candidate_id=$_SESSION['candidate_id'];
extract($_POST);
$date=date('d-m-Y h:i:s A');
$result=mysqli_query($conn,"INSERT INTO `candidate_interview` (`interview_id`, `user_id`, `interview_text`, `added_on`) VALUES (NULL, '$candidate_id', '$interview_text', '$date');");
if($result)
{       
         $last_id=mysqli_insert_id($conn);
        echo '<script type="text/javascript">'; 
        echo 'alert("Your interview is submited successfully.Thank you.");'; 
        echo "window.location.href = 'match_keyword.php?id=$last_id'";
        echo '</script>';
}