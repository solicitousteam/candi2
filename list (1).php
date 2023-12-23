<?php 
include 'connect.php';
// session_start();
if(isset($_GET['skills']))
{
    $skills=$_GET['skills'];
    $search_query.="and FIND_IN_SET('".$skills."',candidate_skills) ";
     
}

if(isset($_GET['exp']))
{
    $exp=$_GET['exp'];
    $search_query.="and candidate_workexp like '$exp%' ";
     
}

if(isset($_GET['job_title']))
{
    $job_title=$_GET['job_title'];
    $search_query.="and candidate_jobtitle like '%$job_title%' ";
     
}

if(isset($_GET['shift']))
{
    $shift=$_GET['shift'];
    $search_query.="and candidate_employ_title like '%$shift%' ";
     
}

if(isset($_GET['exp']))
{
    $exp=$_GET['exp'];
    $search_query.="and candidate_workexp like '$exp%' ";
     
}

if(isset($_GET['location']))
{
    $location=$_GET['location'];
    $search_query.="and candidate_location like '%$location%' ";
     
}
   $candididate=mysqli_query($conn,"SELECT * FROM candidate_profile left join candidate_register on  candidate_profile.candidate_id=candidate_register.candidate_id  WHERE 1=1 $search_query");
   while( $result=mysqli_fetch_array($candididate))
   {
       echo $result['candidate_fname'];
       echo '<br>';
   }
   
   ?>
   
   
   