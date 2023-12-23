<?php
include 'candidate-auth-session.php';
include '../connect.php';
include 'candidate-header.html';
include 'candidate-sidebar.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
  
$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
$j=$_GET['id'];
$time=array();
$time[0]=$_POST['time1'];
$interviewdate = stripslashes($_POST['date']);

$query4="SELECT * FROM job_applications where job_id='".$j."' AND candidate_id='".$arrays['candidate_id']."'";
$result4=mysqli_query($conn,$query4);
$array4=mysqli_fetch_assoc($result4);

if($time[0]==$array4['interview_time2'])
{
    $query="UPDATE `job_applications` SET `interview_date`='".$interviewdate."',`interview_time`='".$array4['interview_time2']."',`interview_time2`='".$array4['interview_time']."' ,`interview_time3`='".$array4['interview_time3']."' WHERE job_id='".$j."' AND candidate_id='".$arrays['candidate_id']."'";
}
else if($time[0]==$array4['interview_time3'])
{
    $query="UPDATE `job_applications` SET `interview_date`='".$interviewdate."',`interview_time`='".$array4['interview_time3']."',`interview_time2`='".$array4['interview_time2']."' ,`interview_time3`='".$array4['interview_time']."' WHERE job_id='".$j."' AND candidate_id='".$arrays['candidate_id']."'";
}
else{
    $query="UPDATE `job_applications` SET `interview_date`='".$interviewdate."',`interview_time`='".$time[0]."',`interview_time2`='".$array4['interview_time2']."' ,`interview_time3`='".$array4['interview_time3']."' WHERE job_id='".$j."' AND candidate_id='".$arrays['candidate_id']."'";

}


$result=mysqli_query($conn,$query);

// $reschedule_date=$_POST['date'];
// $reschedule_time=$_POST['time'];
// $reschedule_time = date('h:i a', strtotime($reschedule_time));

// $query2="SELECT * FROM job_applications, job_details, candidate_register,admin WHERE job_details.job_id=job_applications.job_id AND candidate_register.candidate_id=job_applications.candidate_id AND job_details.admin_id=admin.admin_id AND application_status='Accepted' AND candidate_register.candidate_id='".$arrays['candidate_id']."' AND job_applications.job_id='".$j."'";
// $result2=mysqli_query($conn,$query2);
// $array2=mysqli_fetch_assoc($result2);

// $valid_date=date('Y-m-d',strtotime($array2["interview_date"].'+3 days'));
// if($reschedule_date>$valid_date){
//     echo "<script>
//     alert('Reschedule date should be within 3 days of interview date');
//     window.location.href='candi-interview.php?id=".$j."';
//     </script>";
// }
// else{
// $query3="UPDATE job_applications SET reschedule_time='".$reschedule_time."' , reschedule_date='".$reschedule_date."' WHERE job_id='".$j."' AND candidate_id='".$arrays['candidate_id']."'";
// $result3=mysqli_query($conn,$query3);
// if($result3){
$query1="SELECT * FROM job_details, job_applications, candidate_register, admin WHERE job_details.job_id=job_applications.job_id AND admin.admin_id=job_details.admin_id AND job_applications.candidate_id=candidate_register.candidate_id AND job_applications.job_id='".$j."' AND job_applications.candidate_id='".$arrays['candidate_id']."'";
$result1=mysqli_query($conn,$query1);
    
//     if ($result1->num_rows > 0){
$array1=mysqli_fetch_assoc($result1);
if ($result){
	try {                                     
   // $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                           
    $mail->Username   = 'canditestemail@gmail.com';                 
    $mail->Password   = 'candi123$';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
    
    $mail->setFrom('canditestemail@gmail.com', 'Candi.ai');           
    $mail->addAddress($array1['admin_email']);
        
    $mail->isHTML(true);                                  
    $mail->Subject = 'Candi.ai Interview Reschedule Request';
    $mail->Body = "Dear ".$array1['admin_fname']." ".$array1['admin_lname'].", <br><br> Greetings from Candi.ai!<br> <br><br>An interview slot has been selected by candidate<br> ".$array1['candidate_fname']." ".$array1['candidate_lname']." for the position of ".$array1['job_title']." as per the details below :<br><br>Preferred Time and Date : ".$array1['interview_time'].", ".$array1['interview_date']."<br><br> Please login to Candi.ai and change interview details as per your requirement.<br><br>Regards,<br>Candi.ai<br> This is a system generated mail please do not reply ";
    $mail->send();

} catch (Exception $e) {
    echo "<script>
    alert('Failed to send email. Try Again');
    window.location.href='candi-interview.php?id=".$j."';
    </script>";
    }
    echo "<script>
    alert('Interview details are sent!');
   
     window.location.href='candidate-dashboard-profile.php'
  </script>";//// window.location.href='candidate_view_application.php?id=".$j."';
}
else{
    echo "<script>
    alert('Try Again');
    window.location.href='candi-interview.php?id=".$j."';
    </script>";
    }
  }
//  }
// }

?>