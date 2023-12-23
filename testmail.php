<?php
session_start();
include 'connect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
  
$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
$i=$_GET['id'];
$j=$_SESSION['job_id'];
$slot=stripslashes($_POST['slot']);
$interviewtime = stripslashes($_POST['time']);
$interviewdate = stripslashes($_POST['date']);

$query="UPDATE `job_applications` SET `interview_date`='$interviewdate',`interview_time`='$interviewtime',`interview_slot`='$slot' WHERE job_id='$j' AND candidate_id='$i'";

$result=mysqli_query($conn,$query);
if($result){
    $query1="SELECT * FROM job_details, job_applications, candidate_register, admin WHERE job_details.job_id=job_applications.job_id AND admin.admin_id=job_details.admin_id AND job_applications.candidate_id=candidate_register.candidate_id AND job_applications.job_id='".$j."' AND job_applications.candidate_id='".$i."'";
    $result1=mysqli_query($conn,$query1);
    
    if ($result1->num_rows > 0){
        $array=mysqli_fetch_assoc($result1);
try {                                     
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'canditestemail@gmail.com';                 
    $mail->Password   = 'candi123$';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
    
    $mail->setFrom('canditestemail@gmail.com', 'Candi.ai');           
    $mail->addAddress('rohinichalekar@gmail.com');
        
    $mail->isHTML(true);                                  
    $mail->Subject = 'Candi.ai Interview Details';
    $mail->Body = "Dear ".$array['candidate_fname']." ".$array['candidate_lname'].", <br><br> Greetings from Candi.ai! You have been shortlisted for the position of ".$array['job_title']." at ".$array['admin_company_name'].". <br><br>You have been invited to a video interview as per the details below :<br> Time and Date : ".$array['interview_time'].", ".$array['interview_date']."<br>Interview Slot : ".$array['interview_slot']."<br>Interview Link : https://meet60.com/abcd <br><br> Note : Before the interview, please ensure your webcam and mic are working.<br><br> For any assistance, please contact ".$array['job_mail']."<br><br>Best Regards,<br>Candi.ai<br><br>This is a system generated mail please do not reply ";
    $mail->send();

    header("location: candidate.php?id=".$j);
    exit();
} catch (Exception $e) {
    echo "<script>
    alert('Failed to send email. Try Again');
    window.location.href='candidate.php?id=".$j."';
    </script>";
    }
  }
}
}

?>