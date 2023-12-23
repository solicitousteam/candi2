<?php 
session_start();
include '../connect.php';
extract($_POST);
$candidate_id=$_SESSION['candidate_id'];
$check=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM candidate_profile WHERE candidate_id=$candidate_id"));
if($check=='0')
{
  $query="INSERT INTO candidate_profile (candidate_id,candidate_position_title,candidate_phoneno,candidate_workexp,candidate_travel_status,candidate_education,candidate_language,candidate_salary,candidate_relo,candidate_security,candidate_skills,candidate_employ_title,candidate_workauth,candidate_jobtitle,candidate_email,candidate_skype,candidate_linkedin) VALUES ('".$_SESSION['candidate_id']."','".$_POST['position']."','".$_POST['phone']."','".$_POST['experience']."','".$_POST['travel']."','".$_POST['edu']."','".$_POST['lang']."','".$_POST['rate']."','".$_POST['relocate']."','".$_POST['security']."','".$skill."','".$_POST['emptitle']."','".$_POST['work']."','".$_POST['jobtitle']."','".$_POST['email']."','".$_POST['candidate_skype']."','".$_POST['candidate_linkedin']."')";
}

else{
  $query="UPDATE candidate_profile SET candidate_position_title='".$_POST['position']."',candidate_phoneno='".$_POST['phone']."',candidate_workexp='".$_POST['experience']."',candidate_travel_status='".$_POST['travel']."',candidate_education='".$_POST['edu']."',candidate_language='".$_POST['lang']."',candidate_salary='".$_POST['rate']."',candidate_relo='".$_POST['relocate']."',candidate_security='".$_POST['security']."',candidate_skills='".$_POST['skill']."',candidate_employ_title='".$_POST['emptitle']."',candidate_workauth='".$_POST['work']."',candidate_jobtitle='".$_POST['jobtitle']."',candidate_email='".$_POST['email']."',candidate_skype='".$_POST['candidate_skype']."',candidate_linkedin='".$_POST['candidate_linkedin']."' WHERE candidate_id=$candidate_id ";  
    
}  
$fire=mysqli_query($conn,$query);
                                         
echo "<script>alert('Profile Updated successfully.');history.go(-1);</script>";


//candidate_skype
 ?>