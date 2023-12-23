<?php
$host="localhost";
$dbname="solicitous_candiwebsite2";
$username="solicitous_candiwebsite2";
$password="candiwebsite2";

$conn=mysqli_connect($host,$username,$password,"$dbname");
if(!$conn)
    {
      die('Could not Connect MySql Server:' . mysqli_connect_error());
    }
?>