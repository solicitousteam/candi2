<?php 
include 'connect.php';

$query5="Select job_id from job_details where admin_id='9'"; 
$result5=mysqli_query($conn,$query5);
$array5=mysqli_fetch_array($result5);
for($k=0;$k<5;$k++)
    echo $array5[$k];

?>