<?php 
session_start();
include '../connect.php';
extract($_POST);
$date=date('Y-m-d h:i:s A');
	$queryi="Select admin_id from admin where admin_email='".$_SESSION['email']."'";
			$resulti=mysqli_query($conn,$queryi);
			$arrayi=mysqli_fetch_array($resulti);
			$adminid = $arrayi[0];

$result=mysqli_query($conn,"INSERT INTO `chat` (`user`, `added_on`, `message`, `user_id`) VALUES ('user', '$date', '$message','$adminid');");
if($result)
{
    $split=explode(' ',$message);
    foreach($split as $splits)
    {
        $is_skill=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM candidate_profile WHERE FIND_IN_SET('".$splits."',candidate_skills);"));
        if($is_skill)
        {
            $_SESSION['entered_skills']=$splits;
         
        }
        
         $is_job_title=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM candidate_profile WHERE FIND_IN_SET('".$splits."',candidate_jobtitle);"));
        if($is_job_title)
        {
            $_SESSION['entered_job_title']=$splits;
         
        }
        
         $is_exp=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM candidate_profile WHERE candidate_workexp like '$splits%'"));
        if($is_exp)
        {
            $_SESSION['entered_exp']=$splits;
         
        }
        
         $is_location=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM candidate_profile WHERE candidate_location like '%$splits%'"));
        if($is_location)
        {
            $_SESSION['entered_location']=$splits;
         
        }
         $is_shift=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM candidate_profile WHERE candidate_employ_title like '%$splits%'"));
        if($is_shift)
        {
            $_SESSION['entered_shift']=$splits;
         
        }
        
    }
  
    $ch = curl_init();
    $url = 'https://chatbot.py.solicitous.cloud/predict';
    $postData = [
        'message' => $message,
    ];
   
 
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));     
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
$result     = curl_exec ($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$response=json_decode($result,true);
$answer=$response['answer'];
mysqli_query($conn,"INSERT INTO `chat` (`user`, `added_on`, `message`, `user_id`) VALUES ('bot', '$date', '$answer','$adminid');");
     if($answer=='Requirement submitted successfully......')
     {
          if($_SESSION['entered_skills'])
          {  $skill=$_SESSION['entered_skills'];
             $get_params.="skills=$skill";
          }
          
          if($_SESSION['entered_job_title'])
          {  $job_title=$_SESSION['entered_job_title'];
             $get_params.= "&job_title=$job_title";
          }
          
           if($_SESSION['entered_exp'])
          {  $exp=$_SESSION['entered_exp'];
             $get_params.= "&exp=$exp";
          }
          
           if($_SESSION['entered_location'])
          {  $location=$_SESSION['entered_location'];
             $get_params.= "&location=$location";
          }
          $final_link='https://main.solicitous.cloud/portal/list_candidate.php?'.$get_params;
          $link="Please click on following link to get result for your search : <a  target=_blank href=$final_link>View Now</a>";
         mysqli_query($conn,"INSERT INTO `chat` (`user`, `added_on`, `message`, `user_id`) VALUES ('bot', '$date', '$link','$adminid');");

     
         
     }
      return true;  
    
 
}
else{
    return false;
}
?>