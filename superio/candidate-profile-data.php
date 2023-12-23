<?php
session_start();
include '../connect.php';

$email=$_SESSION['email'];
$queryz="Select * from candidate_register where candidate_register.candidate_email = '".$email."'"; 
$resultz=mysqli_query($conn,$queryz);
$arrayz=mysqli_fetch_assoc($resultz);

$skill1=array();
$skill="";
if (isset($_POST['submit'])){

//     $targetDir = "uploads/"; 
//     $allowTypes = array('jpg','png','jpeg','pdf','docx'); 
     
//     $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
//     $fileNames = array_filter($_FILES['files']['name']); 
//     if(!empty($fileNames)){ 
//         foreach($_FILES['files']['name'] as $key=>$val){ 
//             // File upload path 
//             $fileName = basename($_FILES['files']['name'][$key]); 
//             $targetFilePath = $targetDir . $fileName; 
             
//             // Check whether file type is valid 
//             $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
//             if(in_array($fileType, $allowTypes)){ 
//                 // Upload file to server 
//                 if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
//                     // Image db insert sql 
//                     $insertValuesSQL .= $fileName." , "; 
//                 }else{ 
//                     $errorUpload .= $_FILES['files']['name'][$key].' | '; 
//                 } 
//             }else{ 
//                 $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
//             } 
//         } 
         
//         // Error message 
//         $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
//         $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
//         $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
//         if(!empty($insertValuesSQL)){ 
//             $filenames=explode(',', $insertValuesSQL);
//         }
//         $filenames = array_map('trim', $filenames);
// } 
$skill1=array();
$skill="";

$skill1=$_POST['skill'];
foreach ($skill1 as $value) {
    $skill.= $value.",";
}
$skill = rtrim(trim($skill), ',');
$skill = trim($skill);



     
    // $filenames = array_map('trim', $filenames);
    $uploadMainTo = "resume/" ;
if(isset($_FILES['file1'])){
  $main_image_name = $_FILES['file1']['name'];
  $main_image_tmp = $_FILES['file1']['tmp_name'];
  //$uploadMainTo = $uploadMainTo.$main_image_name[0];
  $moveMain = move_uploaded_file($main_image_tmp[0],$uploadMainTo.$main_image_name[0]);
}

$uploadSecondTo = "pfp/";
if(isset($_FILES['file2'])){
  $second_image_name = $_FILES['file2']['name'];
  $second_image_tmp = $_FILES['file2']['tmp_name'];
  //$uploadSecondTo = $uploadSecondTo.$second_image_name[0];
  $moveSecond = move_uploaded_file($second_image_tmp[0],$uploadSecondTo.$second_image_name[0]);
}

$main_image_name=array_map('trim', $main_image_name);
$second_image_name=array_map('trim', $second_image_name);

    //$file0=$_FILES[‘userfile’][‘size’][0]

    // $query="INSERT INTO file VALUES ('".$main_image_name[0]."','".$second_image_name[0]."')";
    // $fire=mysqli_query($conn,$query);
    // if ($fire) {
    //     echo "success";
    // }
    // else 
    //     echo "fail";


    //$file0=$_FILES[‘userfile’][‘size’][0]

    // $query="INSERT INTO candidate_profile VALUES ('".$candidate_image[0]."','".$candidate_resume[0]."')";
    // $fire=mysqli_query($conn,$query);
    // if ($fire) {
    //     echo "success";
    // }
    // else 
    //     echo "fail";
    $query2="SELECT * FROM candidate_profile WHERE candidate_id='".$arrayz['candidate_id']."'";
    $fire2=mysqli_query($conn,$query2);
    $array2=mysqli_fetch_assoc($fire2);
    
    if(empty($array2['candidate_skills']))
    {
        $query="INSERT INTO candidate_profile (candidate_id,candidate_position_title,candidate_phoneno,candidate_location,candidate_workexp,candidate_travel_status,candidate_education,candidate_language,candidate_salary,candidate_relo,candidate_security,candidate_skills,candidate_employ_title,candidate_resume,candidate_image,candidate_workauth,candidate_jobtitle) VALUES ('".$arrayz['candidate_id']."','".$_POST['position']."','".$_POST['phone']."','".$_POST['location']."','".$_POST['experience']."','".$_POST['travel']."','".$_POST['edu']."','".$_POST['lang']."','".$_POST['rate']."','".$_POST['relocate']."','".$_POST['security']."','".$skill."','".$_POST['emptitle']."','".$main_image_name[0]."','".$second_image_name[0]."','".$_POST['work']."','".$_POST['jobtitle']."')";    }
    else
    {
      $query="UPDATE `candidate_profile` SET `candidate_location`='".$_POST['location']."',`candidate_workexp`='".$_POST['experience']."',`candidate_salary`='".$_POST['rate']."',`candidate_language`='".$_POST['lang']."',`candidate_security`='".$_POST['security']."',`candidate_jobtitle`='".$_POST['jobtitle']."',`candidate_position_title`='".$_POST['position']."',`candidate_workauth`='".$_POST['work']."',`candidate_employ_title`='".$_POST['emptitle']."',`candidate_travel_status`='".$_POST['travel']."',`candidate_education`='".$_POST['edu']."',`candidate_skills`='".$skill."',`candidate_relo`='".$_POST['relocate']."',`candidate_resume`='".$main_image_name[0]."',`candidate_image`='".$second_image_name[0]."' WHERE  candidate_id='".$arrayz['candidate_id']."'"; 
    }

$fire=mysqli_query($conn,$query);
if ($fire) {
    echo "<script>
    alert('Your Profile has been Updated');
    window.location.href='candidate-dashboard-profile.php';
    </script>";
}
else{
    echo "<script>
    alert('Failed to Update Profile. Try Again');
    window.location.href='candidate-dashboard-profile.php';
    </script>";
}
}



if(isset($_POST['submit2'])) {
$query1="insert into candidate_social_network (candidate_id,candidate_facebook,candidate_twitter,candidate_linkedin,candidate_googleplus,candidate_skype) VALUES ('".$arrayz['candidate_id']."','".$_POST['facebook']."','".$_POST['linkedin']."','".$_POST['twitter']."','".$_POST['google']."','".$_POST['skype']."')";
$fire=mysqli_query($conn,$query1);
if($fire){
    echo "<script>
    alert('Your Profile has been Updated');
    window.location.href='candidate-dashboard-profile.php';
    </script>";
}
else{
    echo "<script>
    alert('Failed to Update Profile. Try Again');
    window.location.href='candidate-dashboard-profile.php';
    </script>";
}

}


?>