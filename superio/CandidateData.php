<?php 
session_start();
require "../connect.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
  
$mail = new PHPMailer(true);

$email = "";
$name = "";
$errors = array();
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","25");
//if user signup button
if(isset($_POST['Register'])){
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    if($password !== $cpassword){
        // echo "<script>alert('Password not matched')</script>";
        $errors['password'] = "Confirm password not matched!";

    }
    $email_check = "SELECT * FROM candidate_register WHERE candidate_email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO `candidate_register`(`candidate_fname`, `candidate_lname`, `candidate_email`, `candidate_password`, `code`, `status`) VALUES ('$fname','$lname','$email','$encpass','$code', '$status')";
        $data_check = mysqli_query($conn, $insert_data);
        if($data_check){
            // $subject = "Email Verification Code";
            // $message = "Your verification code is $code";
            // $sender = "From: abc@gmail.com";
            // if(mail($email, $subject, $message, $sender)){
            //     $info = "We've sent a verification code to your email - $email";
            //     $_SESSION['info'] = $info;
            //     $_SESSION['email'] = $email;
            //     $_SESSION['password'] = $password;
            //     header('location: candidate-user-otp.php');
            //     exit();
            // }else{
            //     $errors['otp-error'] = "Failed while sending code!";
            // }
echo "<script>alert('Register Successfully');window.location.href = 'candidate-user-otp.php';</script>";
       
            try {
                $mail->SMTPDebug = 0;                                       
               // $mail->isSMTP();                                            
                $mail->Host       = 'smtp.gmail.com;';                    
               // $mail->Host = "localhost";  
                $mail->SMTPAuth   = true;                             
                $mail->Username   = 'canditestemail@gmail.com';                 
                $mail->Password   = 'candi123$';                        
                $mail->SMTPSecure = 'tls';                              
                $mail->Port       = 587;  
              
                $mail->setFrom('canditestemail@gmail.com', 'Candi.ai');           
                $mail->addAddress($email);
                   
                $mail->isHTML(true);                                  
                $mail->Subject = 'Email Verification Code';
                $mail->Body    = 'Your verification code is '.$code;
                $mail->send();

                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: candidate-user-otp.php');
                exit();

            } catch (Exception $e) {
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
        
        header('location: candidate-user-otp.php');
        
                exit();

    }

}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM candidate_register WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['candidate_email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE candidate_register SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($conn, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: login.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click login button
    if(isset($_POST['log-in'])){
        
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $check_email = "SELECT * FROM candidate_register WHERE candidate_email = '$email'";
        $res = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['candidate_password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;

                  $queryid="select candidate_id from candidate_register where candidate_email = '$email'";
                  $resid = mysqli_query($conn, $queryid);
                  if(mysqli_num_rows($resid) > 0){
                    $adminid = mysqli_fetch_assoc($resid);
                    $_SESSION['candidate_id']=$adminid['candidate_id'];
                    
                  }
                    header('location: candidate-dashboard-profile.php');
                }else{ 
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: candidate-user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }


    if(isset($_POST['accpass'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $check_email = "SELECT * FROM candidate_register WHERE candidate_email = '$email'";
        $res = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['candidate_password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;

                  $queryid="select candidate_id from candidate_register where candidate_email = '$email'";
                  $resid = mysqli_query($conn, $queryid);
                  if(mysqli_num_rows($resid) > 0){
                    $adminid = mysqli_fetch_assoc($resid);
                    $_SESSION['candidate_id']=$adminid['candidate_id'];
                  }
                    header('location: delete-account.php');
                }else{ 
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: candidate-user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $check_email = "SELECT * FROM candidate_register WHERE candidate_email='$email'";
        $run_sql = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE candidate_register SET code = $code WHERE candidate_email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);
            if($run_query){
                // $subject = "Password Reset Code";
                // $message = "Your password reset code is $code";
                // $sender = "From: abc@gmail.com";
                // if(mail($email, $subject, $message, $sender)){
                //     $info = "We've sent a password reset otp to your email - $email";
                //     $_SESSION['info'] = $info;
                //     $_SESSION['email'] = $email;
                //     header('location: candidate-code-verification.php');
                //     exit();
                
                try {
                    $mail->SMTPDebug = 0;                                       
                    //$mail->isSMTP();                                            
                    $mail->Host       = 'smtp.gmail.com;';                    
                    $mail->SMTPAuth   = true;                             
                    $mail->Username   = 'canditestemail@gmail.com';                 
                    $mail->Password   = 'candi123$';                        
                    $mail->SMTPSecure = 'tls';                              
                    $mail->Port       = 587;  
                  
                    $mail->setFrom('canditestemail@gmail.com', 'Candi.ai');           
                    $mail->addAddress($email);
                       
                    $mail->isHTML(true);                                  
                    $mail->Subject = 'Password Reset Code';
                    $mail->Body    = 'Your password reset code is '.$code;
                    $mail->send();

                    $info = "We've sent a password reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: candidate-code-verification.php');
                    exit();
                } catch (Exception $e) {
                    $errors['otp-error'] = "Failed while sending code!";
                }
            // }
            //     else{
            //         $errors['otp-error'] = "Failed while sending code!";
            //     }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM candidate_register WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['candidate_email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: candidate-chang-confirm-pass.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE candidate_register SET code = $code, candidate_password = '$encpass' WHERE candidate_email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                echo "<script>alert('Password Changed Successfully')</script>";
                // header('Location: candidate-password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }

    //change password in candidate
    if(isset($_POST['changepass'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $newpassword = mysqli_real_escape_string($conn, $_POST['newpassword']);
        $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
        if($newpassword !== $confirmpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($newpassword, PASSWORD_BCRYPT);
            $update_pass = "UPDATE candidate_register SET code = $code, candidate_password = '$encpass' WHERE candidate_email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: candidate-password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }

    
    //change email in candidate
    if(isset($_POST['changemail'])){
        $_SESSION['info'] = "";
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $update_mail = "UPDATE candidate_register SET candidate_email = '$email' WHERE candidate_email = '".$_SESSION['email']."'";
        $run_query = mysqli_query($conn, $update_mail);
        if($run_query){
            $info = "Your email is changed.";
            $_SESSION['info'] = $info;
            header('Location: change-email.php');
        }else{
            $errors['db-error'] = "Failed to change your email!";
        }
    
    }

   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login.php');
    }
?>