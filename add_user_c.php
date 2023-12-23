<?php 
session_start();
include 'auth_session.php';
include('connect.php');
include('header.html');
include('sidebar.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- To store data in db -->
    <?php
   // $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  
  $pass=password_hash($pass, PASSWORD_DEFAULT);
  
  
  $cpass = 'verified';
  $pid  = $_SESSION['admin_id'];
  
   $sql = "INSERT INTO admin (p_id,admin_fname,admin_email,admin_password,status)VALUES ('".$pid."','".$name."','".$email."','".$pass."','".$cpass."')"; 

  if (mysqli_query($conn, $sql)) {
     echo " record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
echo "<script>alert('User Added successfully.');history.go(-1);</script>";

?>

