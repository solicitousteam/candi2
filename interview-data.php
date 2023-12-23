<?php
include 'auth_session.php';
include 'connect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
date_default_timezone_set("Asia/Calcutta");

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
$i=$_GET['id'];
$j=$_SESSION['job_id'];
// $slot1=stripslashes($_POST['duration1']);
// $slot2=stripslashes($_POST['duration2']);
// $slot3=stripslashes($_POST['duration3']);

$slot1=$_POST['duration1'];
$slot2=$_POST['duration2'];
$slot3=$_POST['duration3'];

// $interviewtime1 = stripslashes($_POST['time1']);
// $interviewtime2 = stripslashes($_POST['time2']);
// $interviewtime3 = stripslashes($_POST['time3']);

$interviewtime1= date('h:i a', strtotime($_POST['time1']));
$interviewtime2 = date('h:i a', strtotime($_POST['time2']));
$interviewtime3 = date('h:i a', strtotime($_POST['time3']));

$interviewtime1=$interviewtime1." - ".date("h:i a", strtotime($interviewtime1)+($slot1*60));
$interviewtime2=$interviewtime2." - ".date("h:i a", strtotime($interviewtime2)+($slot2*60));
$interviewtime3=$interviewtime3." - ".date("h:i a", strtotime($interviewtime3)+($slot3*60));


$interviewdate = stripslashes($_POST['date']);

$query="UPDATE `job_applications` SET `interview_date`='$interviewdate',`interview_time`='$interviewtime1',`interview_time2`='$interviewtime2',`interview_time3`='$interviewtime3' WHERE job_id='$j' AND candidate_id='$i'";

$result=mysqli_query($conn,$query);
if($result){
    $query1="SELECT * FROM job_details, job_applications, candidate_register, admin WHERE job_details.job_id=job_applications.job_id AND admin.admin_id=job_details.admin_id AND job_applications.candidate_id=candidate_register.candidate_id AND job_applications.job_id='".$j."' AND job_applications.candidate_id='".$i."'";
    $result1=mysqli_query($conn,$query1);
    
    if ($result1->num_rows > 0){
        $array=mysqli_fetch_assoc($result1);
try {                                     
//    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                           
    $mail->Username   = 'canditestemail@gmail.com';                 
    $mail->Password   = 'candi123$';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
    
    $mail->setFrom('canditestemail@gmail.com', 'Candi.ai');           
    $mail->addAddress($array['candidate_email'],$_SESSION['email']);
        
    $mail->isHTML(true);                                  
    $mail->Subject = 'Candi.ai Interview Details';
    $meeting_id=$array['candidate_email'].'_'.$_SESSION['email'];
    $mail->Body = "Dear ".$array['candidate_fname']." ".$array['candidate_lname'].", <br><br> Greetings from Candi.ai!<br> You have been shortlisted for the position of ".$array['job_title']." at ".$array['admin_company_name'].". <br><br>You have been invited to a video interview as per the details below :<br> Date : ".$array['interview_date']."<br>Interview Time: ".$array['interview_time']." (Default)<br>Interview Time 2 : ".$array['interview_time2']."<br>Interview Time 3 : ".$array['interview_time3']."<br><br>Please login to Candi.ai and select a slot as per your convenience. <br>Interview Link : https://meet60.in/".$meeting_id." <br><br> Note : Before the interview, please ensure your webcam and mic are working.<br><br> For any assistance, please contact ".$array['job_mail']."<br><br>Best Regards,<br>Candi.ai<br><br>This is a system generated mail please do not reply ";
    $mail->send();

    //$queryrej="UPDATE `job_applications` SET `application_status`='Accepted' WHERE job_id='$j' AND candidate_id='".$i." '"; 
    //$resultrej=mysqli_query($conn,$queryrej);

    header("location: candidate_view.php?id=".$j);
    exit();
} catch (Exception $e) {
    echo "<script>
    alert('Failed to send email. Try Again');
    window.location.href='candidate_view.php?id=".$j."';
    </script>";
    }
  }
}
}

?>