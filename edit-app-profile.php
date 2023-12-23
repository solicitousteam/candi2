<?php
include 'connect.php';
include 'auth_session.php';
$queryi="Select admin_id from admin where admin_email='".$_SESSION['email']."'";
$resulti=mysqli_query($conn,$queryi);
$arrayi=mysqli_fetch_array($resulti);
$adminid = $arrayi[0];

    if(isset($_POST['submit'])){
            $fname = $_POST['fname'];

            $lname = $_POST['lname'];

            $location = $_POST['location'];

            $email = $_POST['email'];

            $phone = $_POST['phone'];

            $company = $_POST['company'];

            $address = $_POST['address'];

            $city = $_POST['city'];

            $state = $_POST['state'];

            $country = $_POST['country'];

            if (empty($_FILES['fileToUpload']['name'])) 
                $logo = " ";
            else{
                $target_dir = "logo/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $logo=" , admin_logo = '".htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])."' ");
                } else {
                    echo "There was an error uploading your file.";
                }
                }
        }

        $query2="UPDATE `admin` SET `admin_fname`='$fname',`admin_lname`='$lname',`admin_email`='$email',`admin_location`='$location',`admin_phoneno`='$phone',`admin_company_name`='$company',`admin_address`='$address',`admin_city`='$city',`admin_state`='$state',`admin_country`='$country' ".$logo." WHERE admin_id='$adminid'"; 
        $result2=mysqli_query($conn,$query2);
        if($result2){
            header("location: app-profile.php");
        }
        else    
            header("location: app-profile.php");
    }


?>