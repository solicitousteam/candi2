<?php
include 'connect.php';

//Accepted
$query="SELECT count(job_applications.job_id) from job_applications,job_details WHERE job_applications.job_id=job_details.job_id AND application_status='Accepted' AND admin_id='9'";
$result=mysqli_query($conn,$query);
$array=mysqli_fetch_array($result);
echo "Accepted: ".$array[0];

//Rejected
$query="SELECT count(job_applications.job_id) from job_applications,job_details WHERE job_applications.job_id=job_details.job_id AND application_status='Rejected' AND admin_id='9'";
$result=mysqli_query($conn,$query);
$array=mysqli_fetch_array($result);
echo "<br>Rejected: ".$array[0];

//Jobs Listed
$query="SELECT count(job_applications.job_id) from job_applications,job_details WHERE job_applications.job_id=job_details.job_id AND admin_id='9'";
$result=mysqli_query($conn,$query);
$array=mysqli_fetch_array($result);
echo "<br>Jobs Listed: ".$array[0];
?>