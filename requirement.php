<?php
include 'auth_session.php';
include 'header.html'; ?> </head>
<body>
<?php 
include 'connect.php';


if( isset( $_SESSION['p_id'] ) && $_SESSION['p_id'] !='') {
                                                                       
                                                                     $pid =   $_SESSION['p_id'];
                                                                     $queryid="select admin_email from admin where  admin_id = '$pid'";
                                                                     $resid = mysqli_query($conn, $queryid); 
                                                                     $adminid = mysqli_fetch_assoc($resid);
                                                                     $_SESSION['email']=$adminid['admin_email']; 
                                                                      
                                                                      }




	$queryi="Select admin_id from admin where admin_email='".$_SESSION['email']."'";
			$resulti=mysqli_query($conn,$queryi);
			$arrayi=mysqli_fetch_array($resulti);
			$admin_id = $arrayi[0];

		
$query1="select max(job_id) from job_details";
$result1=mysqli_query($conn,$query1);
$array1=mysqli_fetch_array($result1);
$id = $array1[0];
$id++;
$_SESSION['jobid']=$id;
$date = date("Y-m-d");
?>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
<?php 
include 'sidebar.php'; 
?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Requirement</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Job Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                <?php /*if($_SESSION['edit_flag'])==1{
                                      $i=$_SESSION['jobid'];
                                      $query="Select * FROM job_details where job_id=' ".$i." '"; 
                                      $result=mysqli_query($conn,$query);
                                      if ($result->num_rows > 0):
                                      while($array=mysqli_fetch_assoc($result)){*/
                                ?>
                                    <form action="" method="POST">
                                        <div class="row">
                                        <div class="col-xl-6">
												<div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-email">Job ID<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <?php echo $id; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Job Title
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-username" name="title" placeholder="Job Title" required>
                                                    </div>
                                                </div>
												<div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Email
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="email" class="form-control" id="val-username" name="email" placeholder="Email"  value="<?=$candidate_data['candidate_email']; ?>" require>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-password">Location
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-password" name="location" placeholder="Job Location" required>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Job Description<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <textarea class="form-control" id="val-suggestions" name="description" rows="5" placeholder="What would you like to see?" required></textarea>
                                                    </div>
                                                </div>
                                                 <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Total Experience<span
                                                            class="text-danger">*</span>
                                                    </label> 
                                                    <div class="col-lg-6">
                                                        <input type="number" min="0" class="form-control" id="val-password" name="job_exp" placeholder="Experience" required>
                                                    </div>
                                                </div>
                                               <!-- <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Job Post Date  <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="date" class="form-control" id="val-password" min="<?php echo $date; ?>" value="<?php echo $date; ?>" name="post_date" placeholder="Job Post Date" required>
                                                    </div>
                                                </div>-->
                                              
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Post Expire Date<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="date" class="form-control" id="val-password" name="expire_date" placeholder="Post Expire Date" required>
                                                    </div> 
                                                </div>
                                                 <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Company Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-username" name="company_name" placeholder="Company Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Number Of Openings<span
                                                            class="text-danger">*</span>
                                                    </label> 
                                                    <div class="col-lg-6">
                                                        <input type="number" min="1" class="form-control" id="val-password" value="1" name="opening" placeholder="Number Of Openings" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Skills Required
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                       <select multiple class="form-control default-select" id="sel2" name="skill[]" required>
                                                           <?php 
                                                           $result=mysqli_query($conn,"SELECT * FROM tbl_skill order by skill asc");
                                                           while($row_skill=mysqli_fetch_array($result))
                                                           {?>
                                                            <option value="<?=$row_skill['skill']; ?>" ><?=$row_skill['skill']; ?></option>
                                                           <?php } ?>
                                                        </select>
                                                    </div>
                                                    <!-- <div class="form-group row">
                                                        <label>Mutiple select list (hold shift to select more than one):</label>
                                                        <select multiple class="form-control default-select" id="sel2">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div> -->
                                                </div>
												<div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Direct Hire/Contract
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select" id="val-skill" name="shift">
                                                            <option value="Full Time">Full-time</option>
                                                            <option value="C2H">C2H</option>
                                                            <option value="C2C">C2C</option>
                                                            <option value="W2">W2</option>
                                                            <option value="1099">1099</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>
												<div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Pay Range($)
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="pay">
                                                        <!--<select class="form-control default-select" id="val-skill" name="pay">-->
                                                            <!--<option value="annually">Annually Salary</option>-->
                                                            <!--<option value="hourly">Hourly Salary</option>-->
                                                        <!--</select>-->
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-currency">Travel Requirement
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select class="form-control default-select" id="val-skill" name="travel">
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary rounded" name="submit">Submit</button>
                                              
                                                <?php
                                                
                                                //company_name
                                                     
                                                      if(isset($_POST['submit'])){
                                                          
                                                          //company_name
                                                          
                                                         $company_name = stripslashes($_REQUEST['company_name']);
                                                         $title = stripslashes($_REQUEST['title']);
                                                         $email = stripslashes($_REQUEST['email']);
                                                         $location = stripslashes($_REQUEST['location']);
                                                         $description = stripslashes($_REQUEST['description']);
                                                          $skill = implode(",", $_POST["skill"]);

                                                         $shift = stripslashes($_REQUEST['shift']);
                                                         $pay = stripslashes($_REQUEST['pay']);
                                                         $travel = stripslashes($_REQUEST['travel']);
                                                         $post_date = date('Y-m-d');
                                                         $job_exp = stripslashes($_REQUEST['job_exp']);
                                                         $expire_date = stripslashes($_REQUEST['expire_date']);
                                                         $opening = stripslashes($_REQUEST['opening']);

                                                      $query="INSERT INTO `job_details` (`company_name`,`job_id`, `admin_id`, `job_title`, `job_mail`, `job_location`, `job_description`, `job_skill`, `job_contract_type`, `job_pay_range`, `job_travel_requirement`, `job_post_date`, `job_expire_date`, `job_opening`, `job_status`, `job_exp`) VALUES ('$company_name',NULL, '$admin_id', '$title', '$email', '$location', '$description', '$skill', '$shift', '$pay', '$travel', '$post_date', '$expire_date', '$opening', 'Active', '$job_exp');";
                                                     $result=mysqli_query($conn,$query);
                                                     
                                                     if($result){
                                                       // echo "<a href='view_req.php?id=".$id."' class='btn btn-primary rounded'>View</a><b>";
                                                       // echo "Successfully Submit Record";
                                                      //  $_SESSION['jobid']=$id;
                                                        echo "<script>alert('Job Updated successfully.'); window.location = 'https://main.solicitous.cloud/portal/view_req.php?id=$id';</script>";
                                                        //https://main.solicitous.cloud/portal/view_req.php?id=97
                                                     }
                                                     else
                                                        echo "Try Again";
                                                      
                                                    }
                                                ?>
                                                  
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
        
                </div>
               
            </div>
            <?php include 'footer.html'; ?>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


      

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
   
	<script>
		jQuery(document).ready(function(){
			jQuery('.show-pass').on('click',function(){
				jQuery(this).toggleClass('active');
				if(jQuery('#dz-password').attr('type') == 'password'){
					jQuery('#dz-password').attr('type','text');
				}else if(jQuery('#dz-password').attr('type') == 'text'){
					jQuery('#dz-password').attr('type','password');
				}
			});
		});
	</script>
</body>
<!DOCTYPE html>
<html lang="en">
<script>  
        if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            } 
    </script>
<head> 


</html>