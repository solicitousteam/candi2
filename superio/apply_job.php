<?php 
session_start();
include '../connect.php';
$candidate_id=$_SESSION['candidate_id'];
$job_id=$_GET['job_id'];
   $query="INSERT INTO `job_applications` (`job_id`, `candidate_id`, `application_status`, `view_status`, `interview_date`, `interview_time`, `interview_time2`, `interview_time3`, `interview_slot`, `reschedule_date`, `reschedule_time`, `reschedule_status`, `job_offer`, `job_type`, `job_offer_date`, `counter_job_offer`, `job_offer_status`, `job_offer_final_date`) VALUES ('$job_id', '$candidate_id', 'Pending', 'unseen', '', '', '', '', '', '', '', '', '', '', '', '', '', '');";
                                        $fire=mysqli_query($conn,$query);
                                        if ($fire) {
                                            echo "<script>alert('Applied successfully.');history.go(-2);</script>";
                                        }   
        ?>