<?php
include 'auth_session.php';
include 'header.html';
include 'connect.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$i=$_GET['id'];
$j=$_SESSION['job_id'];

date_default_timezone_set("Asia/Calcutta");
$date = date('Y-m-d');

$query="SELECT * from job_applications WHERE candidate_id='".$i."' AND job_id='".$j."'";
$result=mysqli_query($conn,$query);
$array=mysqli_fetch_assoc($result);
//if(isset($_SESSION['accept_flag'])){
//if($_SESSION['accept_flag']==1){
    $queryrej="UPDATE `job_applications` SET `application_status`='Accepted', job_offer_final_date='".$date."',job_offer_status='Accepted',job_offer='".$array['counter_job_offer']."' WHERE job_id='".$j."' AND candidate_id='".$i." '"; 
    $resultrej=mysqli_query($conn,$queryrej);
    
    $query1="SELECT * FROM job_details, job_applications, candidate_register, admin WHERE job_details.job_id=job_applications.job_id AND admin.admin_id=job_details.admin_id AND job_applications.candidate_id=candidate_register.candidate_id AND job_applications.job_id='".$j."' AND job_applications.candidate_id='".$i."'";
    $result1=mysqli_query($conn,$query1);
    $array2=mysqli_fetch_assoc($result1);
    if ($result1){
    try {                                     
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                           
    $mail->Username   = 'canditestemail@gmail.com';                 
    $mail->Password   = 'candi123$';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
    
    $mail->setFrom('canditestemail@gmail.com', 'Candi.ai');           
    $mail->addAddress($array2['candidate_email']);
        
    $mail->isHTML(true);                                  
    $mail->Subject = 'Candi.ai Hiring Notice';
    $mail->Body = "Dear ".$array2['candidate_fname']." ".$array2['candidate_lname'].", <br><br> Greetings from Candi.ai!<br><br>
     You have been hired for the position of  ".$array2['job_title']." at ".$array2['admin_company_name']." as per the details below:<br>
     Offer: $".$array['counter_job_offer']." ".$array['job_type']." <br>Offer Date: ".$date."<br><br>Congratulations!<br> 
     <br><br>Regards,<br>Candi.ai<br> This is a system generated mail please do not reply ";
    $mail->send();

} catch (Exception $e) {
    echo "<script>
    alert('Failed to send email. Try Again');
    window.location.href='finaloffer.php?id=".$j."';
    </script>";
    }
    echo "<script>
    alert('Candidate Accepted');
    window.location.href='candidate.php?id=".$j."';
    </script>";
}
    else{
    echo "<script>
    alert('Try Again');
    window.location.href='finaloffer.php?id=".$j."';
    </script>";
    }

//}
//else
//header("Location: candidate.php?id=".$j);
//}

?>