<?php 
date_default_timezone_set("Asia/Calcutta");

$time=date('h:i',strtotime("+10 minutes"));
//$time2=date('h:i',strtotime("+60 minutes"));
$slot=60;
echo $time."<br>";

$time = date("H:i", strtotime($time)+($slot*60));
echo $time."<br>";

$time="12:00 pm - 01:00 pm";
echo $time."<br>";

$time = explode("-",$time);
echo $time[0]."<br>";

$a=array();
$b=array();
$a[0]='1';
$b[0]=' 1 ';    

if($a[0]==$b)
    echo 'without square'."<br>";
else
echo 'error square'."<br>";

if($a[0]==$b[0])
    echo 'with square'."<br>";
else
echo 'error square'."<br>";
?>