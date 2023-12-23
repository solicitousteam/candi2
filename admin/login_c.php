<?php
session_start();
 include 'connect.php';
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $check_email = "SELECT * FROM super_admin WHERE admin_email = '$email'";
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

                  $queryid="select admin_id from super_admin where admin_email = '$email'";
                  $resid = mysqli_query($conn, $queryid);
                  if(mysqli_num_rows($resid) > 0){
                    $adminid = mysqli_fetch_assoc($resid);
                    $_SESSION['admin_id']=$adminid['admin_id'];
                  }
                    header('location: dashboard.php');
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
    
?>