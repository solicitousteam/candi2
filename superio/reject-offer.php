<?php
include 'candidate-auth-session.php';
include '../connect.php';
include 'candidate-header.html';
include 'candidate-sidebar.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);

$j=$_GET['id'];
//$date=$_POST['date'];
date_default_timezone_set("Asia/calcutta");
$date=date('Y-m-d');


    $query="UPDATE `job_applications` SET `job_offer_final_date`='".$date."',`application_status`='Rejected',`job_offer_status`='Rejected' WHERE job_id='".$j."' AND candidate_id='".$arrays['candidate_id']." '"; 
    $result=mysqli_query($conn,$query);

    $query1="SELECT * FROM job_details, job_applications, candidate_register, admin WHERE job_details.job_id=job_applications.job_id AND admin.admin_id=job_details.admin_id AND job_applications.candidate_id=candidate_register.candidate_id AND job_applications.job_id='".$j."' AND job_applications.candidate_id='".$arrays['candidate_id']."'";
    $result1=mysqli_query($conn,$query1);
        
    //     if ($result1->num_rows > 0){
    $array2=mysqli_fetch_assoc($result1);
        if ($result){
        try {                                     
        //$mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com;';                    
        $mail->SMTPAuth   = true;                           
        $mail->Username   = 'canditestemail@gmail.com';                 
        $mail->Password   = 'candi123$';                        
        $mail->SMTPSecure = 'tls';                              
        $mail->Port       = 587;  
        
        $mail->setFrom('canditestemail@gmail.com', 'Candi.ai');           
        $mail->addAddress($array2['admin_email']);
            
        $mail->isHTML(true);                                  
        $mail->Subject = 'Candi.ai Offer Rejected';
        $mail->Body = "Dear ".$array2['admin_fname']." ".$array2['admin_lname'].", <br><br> Greetings from Candi.ai!<br> <br> ".$array2['candidate_fname']." ".$array2['candidate_lname']." has Rejected the position of  ".$array2['job_title'].".<br><br>Date: ".$array2['job_offer_final_date']."<br><br>Regards,<br>Candi.ai<br> This is a system generated mail please do not reply ";
        $mail->send();
    
    } catch (Exception $e) {
        echo "<script>Date:
        alert('Failed to send email. Try Again');
        window.location.href='candidate_offer.php?id=".$j."';
        </script>";
        }
        echo "<script>
        alert('Offer Rejected!');
        window.location.href='candidate_offer.php?id=".$j."';
        </script>";
    }
    else{
        echo "<script>
        alert('Try Again');
        window.location.href='candidate_offer.php?id=".$j."';
        </script>";
        }


?>