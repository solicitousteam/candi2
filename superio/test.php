<?php

session_start();
include '../connect.php';
$email=$_SESSION['email'];
$querys="Select * from candidate_register,candidate_profile where candidate_register.candidate_id=candidate_profile.candidate_id and candidate_register.candidate_email = '".$email."'"; 
$results=mysqli_query($conn,$querys);
$arrays=mysqli_fetch_assoc($results);

if($arrays['candidate_image']){
                     echo "<img src='uploads/".$arrays['candidate_image']."' alt='avatar' class='thumb'>";
                     } else {    
                        echo "<img src='images/resource/company-6.png' alt='avatar' class='thumb'>";
                     } ?> 
                      
                         <span class="name"><?php echo $arrays['candidate_fname']." ".$arrays['candidate_lname']."<br><br>"; ?></span>

<?php 
$currdate=date('Y-m-d');
echo $currdate."<br>";
$currdate=date('Y-m-d',strtotime($currdate.'+3 days'));
echo $currdate;
$newdate="2022-01-18";
if($newdate>$currdate)
    echo "error";
else
    echo "valid";
?>