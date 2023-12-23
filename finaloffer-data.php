<?php 
    include 'auth_session.php';
    include 'header.html';
    include 'connect.php';
    include 'sidebar.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
  
    require 'vendor/autoload.php';
  
    $mail = new PHPMailer(true);

    $i=$_GET['id'];
    $j=$_SESSION['job_id'];

    if(isset($_POST['submit'])){

    
     if(!empty($_POST['annually'])){
         $salary=$_POST['annually'];
         $jobtype=$_POST['jobtype'];
    } 
    elseif(!empty($_POST['hourly'])){
     $salary=$_POST['hourly'];
     $jobtype=$_POST['jobtype'];
    }
    else{
     echo "No option selected";
    }

    date_default_timezone_set("Asia/Calcutta");
    $date = date('Y-m-d');

    $query2="UPDATE job_applications SET job_offer='".$salary."', job_type='".$jobtype."', job_offer_date='".$date."', application_status='In Progress' WHERE candidate_id='".$i."' AND job_id='".$j."'";
    $result2=mysqli_query($conn,$query2);
    if($result2){
    echo "<script>
    alert('Offer Sent');
    window.location.href='finaloffer.php?id=".$j."';
    </script>";
    
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
    $mail->Subject = 'Candi.ai Job Offer';
    $mail->Body = "Dear ".$array2['candidate_fname']." ".$array2['candidate_lname'].", <br><br> Greetings from Candi.ai!<br> <br> You have been selected for the position of  ".$array2['job_title']." at ".$array2['admin_company_name']." as per the details below :<br>Offer: $".$salary." ".$jobtype." <br>Offer Date: ".$date."<br><br>Congratulations!<br>Please Login to Candi.ai and complete the process <br><br>Regards,<br>Candi.ai<br> This is a system generated mail please do not reply ";
    $mail->send();

} catch (Exception $e) {
    echo "<script>
    alert('Failed to send email. Try Again');
    window.location.href='finaloffer.php?id=".$j."';
    </script>";
    }
    echo "<script>
    alert('Offer Sent');
    window.location.href='candidate.php?id=".$j."';
    </script>";
}
    else{
    echo "<script>
    alert('Try Again');
    window.location.href='finaloffer.php?id=".$j."';
    </script>";
    }
 }
}
 ?>
    