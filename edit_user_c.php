<?php 
include 'auth_session.php';
include('connect.php');
include('header.html');
include('sidebar.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
   $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];
  $user_id = $_POST['user_id'];
  if($pass!=$cpass)
  {
      echo '<script>alert("Password and confirm password not match.");history.go(-1);</script>';
      exit;
  }
  if(isset($pass))
  {
    $query = "UPDATE add_user SET name='$name',email='$email',pass='$pass',cpass='$cpass' WHERE id=".$user_id;
  }
  else{
    $query = "UPDATE add_user SET name='$name',email='$email' WHERE id=".$user_id;
      
  }
    echo "<script>alert('User Updated successfully.');history.go(-1);</script>";
?>

