<?php
include '../connect.php';

$targetDir0 = "resume/"; 
$targetDir1 = "pfp/"; 
    $allowTypes = array('jpg','png','jpeg','pdf','docx'); 
     
    // $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    // $fileNames = array_filter($_FILES['files']['name']); 
    // if(!empty($fileNames)){ 
    //     foreach($_FILES['files']['name'] as $key=>$val){ 
    //         // File upload path 
    //         $fileName = basename($_FILES['files']['name'][$key]); 
    //         $targetFilePath.$key = $targetDir.$key . $fileName; 
             
    //         // Check whether file type is valid 
    //         $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
    //         if(in_array($fileType, $allowTypes)){ 
    //             // Upload file to server 
    //             if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath.$key)){ 
    //                 // Image db insert sql 
    //                 $insertValuesSQL .= $fileName." , "; 
    //             }else{ 
    //                 $errorUpload .= $_FILES['files']['name'][$key].' | '; 
    //             } 
    //         }else{ 
    //             $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
    //         } 
    //     } 
         
    // // Error message 
    // $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
    // $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
    // $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
        
    // if(!empty($insertValuesSQL)){ 
    //     $filenames=explode(',', $insertValuesSQL);
    // }
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



    //$file0=$_FILES[‘userfile’][‘size’][0]

    $query="INSERT INTO file VALUES ('".$main_image_name[0]."','".$second_image_name[0]."')";
    $fire=mysqli_query($conn,$query);
    if ($fire) {
        echo "success";
    }
    else 
        echo "fail";
//}
?>