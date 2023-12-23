<?php 
session_start();
include 'connect.php';

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
if(isset($_POST['signup'])){
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['confirmpass']);
    $phno = mysqli_real_escape_string($conn, $_POST['phoneno']);
    $companyname = mysqli_real_escape_string($conn, $_POST['companyname']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);

    
    
    $target_dir = "logo/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        
        $errors['email'] = "Your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         $logo=htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
    } else {
        $errors['email'] = "There was an error uploading your file.";
    }
    }

    if($password !== $cpassword){
        echo "<script>alert('Password not matched')</script>";
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM admin WHERE admin_email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO `admin`(`admin_fname`, `admin_lname`, `admin_email`, `admin_password`, `admin_location`, `admin_phoneno`, `admin_logo`, `admin_company_name`, `admin_address`, `admin_city`, `admin_state`, `admin_country`, `code`, `status`) VALUES ('$fname','$lname','$email','$encpass','$location','$phno','$logo','$companyname','$address','$city','$state','$country','$code', '$status')";
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
            //     header('location: page-user-otp.php');
            //     exit();
            // }else{
            //     $errors['otp-error'] = "Failed while sending code!";
            // }

            try {                                     
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
                $mail->Subject = 'Email Verification Code';
                $mail->Body    = 'Your verification code is '.$code;
                $mail->send();

                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: page-user-otp.php');
                exit();
            } catch (Exception $e) {
                $errors['otp-error'] = "Failed while sending code!";
            }

        }else{
            $errors['db-error'] = "Failed while accepting data.";
        }
    }

}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM admin WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE admin SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($conn, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: page-login.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $check_email = "SELECT * FROM admin WHERE admin_email = '$email'";
        $res = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['admin_password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;

                  $queryid="select admin_id from admin where admin_email = '$email'";
                  $resid = mysqli_query($conn, $queryid);
                  if(mysqli_num_rows($resid) > 0){
                    $adminid = mysqli_fetch_assoc($resid);
                    $_SESSION['admin_id']=$adminid['admin_id'];
                  }
                    header('location: index.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: page-user-otp.php');
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
        $check_email = "SELECT * FROM admin WHERE admin_email='$email'";
        $run_sql = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE admin SET code = $code WHERE admin_email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);
            if($run_query){
                // $subject = "Password Reset Code";
                // $message = "Your password reset code is $code";
                // $sender = "From: abc@gmail.com";
                // if(mail($email, $subject, $message, $sender)){
                //     $info = "We've sent a password reset otp to your email - $email";
                //     $_SESSION['info'] = $info;
                //     $_SESSION['email'] = $email;
                //     header('location: page-code-verification.php');
                //     exit();
                
                try {                                     
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
    
                    $info = "We've sent a verification code to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: page-code-verification.php');
                    exit();
                } catch (Exception $e) {
                    $errors['otp-error'] = "Failed while sending code!";
                }

                // }else{
                //     $errors['otp-error'] = "Failed while sending code!";
                // }
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
        $check_code = "SELECT * FROM admin WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['admin_email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: page-chang-confirm-pass.php');
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
            $update_pass = "UPDATE admin SET code = $code, admin_password = '$encpass' WHERE admin_email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: page-password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: page-login.php');
    }
?>