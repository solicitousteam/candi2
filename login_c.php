<?php
session_start();
 include 'connect.php';
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $check_email = "SELECT * FROM admin WHERE admin_email = '$email'";
        $res = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['admin_password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;

                  $queryid="select admin_id,p_id from admin where admin_email = '$email'";
                  $resid = mysqli_query($conn, $queryid);
                  if(mysqli_num_rows($resid) > 0){
                    $adminid = mysqli_fetch_assoc($resid);
                    
                    
                    if(  !empty(  $adminid['p_id']    )  ){
                        
                        
                      $_SESSION['admin_id']=$adminid['admin_id'];  
                    
                    $_SESSION['p_id']=$adminid['p_id'];
                    $pid  = $_SESSION['admin_id'];
                   $query = "select rp.* from   role_permission rp  where rp.user_id = $pid"; 
                    $data = mysqli_query($conn,$query);
                   // echo '--------'.mysqli_num_rows($data); die;
                    
                    if (  mysqli_num_rows($data) > 0)
                     {
                      while ($result=mysqli_fetch_assoc($data))
                       {
                           
                         $permionss =  unserialize($result['per_menu']);
                         
                        
                         
                         
                         $allmenupermission = '';
                         if( in_array('1',$permionss) ){
                             
                            
                             $_SESSION['role_mj'] = 'mj';
                             $allmenupermission.='Manage job';
                         }
                         
                    
                         
                         if( in_array('2',$permionss) ){
                             
                             $_SESSION['role_re'] = 're';
                             $allmenupermission.='Requirment, ';
                         }if( in_array('3',$permionss) ){
                             
                             $_SESSION['role_cs'] = 'cs';
                             $allmenupermission.='Candidates, ';
                         }if( in_array('4',$permionss) ){
                             
                             $_SESSION['role_rs'] = 'rs';
                             $allmenupermission.='Reports, ';
                         }if( in_array('5',$permionss) ){
                             
                             $_SESSION['role_ep'] = 'ep';
                             $allmenupermission.='Email Parser, ';
                         }
                       }
                     }
                    }else {
                   
                 
                        $_SESSION['admin_id']=$adminid['admin_id'];
                    }
                   
                  }
                  
                   
                  
                  
                  
                  
                    header('location: index.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: page-user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
                 header('location: index.php');
         
            }
        }else{
            
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $check_email1 = "SELECT * FROM add_user WHERE email = '$email' and password='$password'";
             $res1 = mysqli_query($conn, $check_email1);
        if(mysqli_num_rows($res1) > 0){
        }
           
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
                  header('location: index.php');
         
        }
    
?>