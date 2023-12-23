<?php
$host="localhost";
$dbname="solicitous_candiwebsite";
$username="solicitous_candiwebsi";
$password="solicitous_candiwebsite";

$conn=mysqli_connect($host,$username,$password,"$dbname");
if(!$conn)
    {
      die('Could not Connect MySql Server:' . mysqli_connect_error());
    }
?>