<?php
include 'auth_session.php';
include 'connect.php';

$i=$_GET['id'];

if(isset($_POST['submit'])){
    //$skill1=array();
    //$skill="";
    //$id = stripslashes($_POST['id']);
    //$title = stripslashes($_POST['title']);
    $email = stripslashes($_POST['email']);
    $location = stripslashes($_POST['location']);
    $description = stripslashes($_POST['description']);
    $skill = implode(',',$_POST['skill']);
   
    //$skill1=$_POST['skill'];
    $shift = stripslashes($_POST['shift']);
    $pay = stripslashes($_POST['pay']);
    $travel = stripslashes($_POST['travel']);
    $post_date = stripslashes($_POST['post_date']);
    $expire_date = stripslashes($_POST['expire_date']);
    $opening = stripslashes($_POST['opening']);
    $job_exp = stripslashes($_POST['job_exp']);
    
//     foreach ($skill1 as $value) {
//        $skill.= $value.", ";
//    }
//    $skill = rtrim(trim($skill), ',');
//    $skill = trim($skill);

   

    $query="UPDATE `job_details` SET `job_mail`='$email',`job_location`='$location',`job_description`='$description',`job_contract_type`='$shift',`job_pay_range`='$pay',`job_travel_requirement`='$travel',`job_post_date`='$post_date',`job_expire_date`='$expire_date',`job_opening`='$opening',`job_status`='Active',job_skill='$skill',job_exp='$job_exp' WHERE job_id=$i";
    // `job_title`='$title', ,`job_skill`='$skill'
    $result=mysqli_query($conn,$query);
    if($result){
        echo "<script>
        alert('Job details have been updated.');
        window.location.href='manage_job.php';
        </script>";
        }
    else{
        echo "<script>
        alert('Try again.');
        window.location.href='edit_requirement_data.php?id=".$i."';
        </script>";
    
    }
     }

?>