<?php
include 'auth_session.php';
include 'connect.php';
include 'sidebar.php'; 

$query1="select max(job_id) from job_details";
$result1=mysqli_query($conn,$query1);
$array1=mysqli_fetch_array($result1);
$id = $array1[0];
$id++;

if(isset($_POST['submit'])){
    $skill1=array();
    $skill="";
    //$id = stripslashes($_POST['id']);
    $title = stripslashes($_POST['title']);
    $email = stripslashes($_POST['email']);
    $location = stripslashes($_POST['location']);
    $description = stripslashes($_POST['description']);
    $skill1=$_POST['skill'];
    $shift = stripslashes($_POST['shift']);
    $pay = stripslashes($_POST['pay']);
    $travel = stripslashes($_POST['travel']);
    $post_date = stripslashes($_POST['post_date']);
    $expire_date = stripslashes($_POST['expire_date']);
    $opening = stripslashes($_POST['opening']);
    
    foreach ($skill1 as $value) {
    $skill.= $value.", ";
}
$skill = rtrim(trim($skill), ',');
$skill = trim($skill);



//  $query="UPDATE `job_details` SET `job_title`='$title',`job_mail`='$email',`job_location`='$location',`job_description`='$description',`job_skill`='$skill',`job_contract_type`='$shift',`job_pay_range`='$pay',`job_travel_requirement`='$travel',`job_post_date`='$post_date',`job_expire_date`='$expire_date',`job_opening`='$opening',`job_status`='Active' WHERE job_id=$id";
    
//  $result=mysqli_query($conn,$query);
//  if($result){
//     echo "Success<br><br>";
//     //echo "<a href='manage_job.php' class='btn btn-primary rounded'>Manage Job</a>";
//  }
//  else
//     echo "Try Again";
//   }

$query="INSERT INTO `job_details` (`job_id`, `admin_id`, `job_title`, `job_mail`, `job_location`, `job_description`, `job_skill`, `job_contract_type`, `job_pay_range`, `job_travel_requirement`, `job_post_date`, `job_expire_date`, `job_opening`, `job_status`)  VALUES ('$id','$adminid','$title','$email','$location','$description','$skill','$shift','$pay','$travel','$post_date','$expire_date','$opening','Active')";
$result=mysqli_query($conn,$query);
if($result){
    echo "<script>
    alert('Job has been posted');
    window.location.href='manage_job.php';
    </script>";
}
else
echo "<script>
alert('Error');
window.location.href='manage_job.php';
</script>";
}

?>