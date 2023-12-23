<?php
include 'CandidateData.php';

$email1=$_SESSION['email'];
$name = "DELETE  from candidate_register WHERE candidate_email = '".$_SESSION['email']."'";
$run_query = mysqli_query($conn, $name);
if($run_query){
    session_unset();
    session_destroy();
    header('location: login.php');
}
else{
    echo "error";
    header('location: delete-account.php');
}
?>