<?php
include 'connect.php';


if(isset($_POST['submit'])){

$time=array();
// $temp=array();
$time[0]=$_POST['time1'];
$interviewdate=$_POST['date'];

$query4="SELECT * FROM job_applications where job_id='4' AND candidate_id='1'";
$result4=mysqli_query($conn,$query4);
$array4=mysqli_fetch_assoc($result4);
if($time[0]==$array4['interview_time2'])
{
    $query="UPDATE `job_applications` SET `interview_date`='$interviewdate',`interview_time`='".$array4['interview_time2']."',`interview_time2`='".$array4['interview_time']."' ,`interview_time3`='".$array4['interview_time3']."' WHERE job_id='4' AND candidate_id='1'";
}
else if($time[0]==$array4['interview_time3'])
{
//  $temp =$array4['interview_time'];
//  $array4['interview_time']= $array4['interview_time3'];
//  $array4['interview_time3']= $temp;
//   $time[0]=$array4['interview_time3'];
    $query="UPDATE `job_applications` SET `interview_date`='$interviewdate',`interview_time`='".$array4['interview_time3']."',`interview_time2`='".$array4['interview_time2']."' ,`interview_time3`='".$array4['interview_time']."' WHERE job_id='4' AND candidate_id='1'";
}
else{
    $query="UPDATE `job_applications` SET `interview_date`='$interviewdate',`interview_time`='".$time[0]."',`interview_time2`='".$array4['interview_time2']."' ,`interview_time3`='".$array4['interview_time3']."' WHERE job_id='4' AND candidate_id='1'";

}

 $interviewdate = stripslashes($_POST['date']);
//$query="UPDATE `job_applications` SET `interview_date`='$interviewdate',`interview_time`='".$time[0]."',`interview_time2`='".$array4['interview_time2']."' ,`interview_time3`='".$array4['interview_time3']."' WHERE job_id='4' AND candidate_id='1'";
$result=mysqli_query($conn,$query);
if($result)
    echo "good";
else
    echo "bad";


}

?>