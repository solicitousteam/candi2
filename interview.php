<?php include 'auth_session.php'; ?>
<html lang="en">
<head>
<script>  
        if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            } 
</script>

    <?php include 'header.html';
    include 'connect.php';
    $i=$_GET['id'];
    $j=$_SESSION['job_id'];
    ?>
    <!-- Daterange picker -->
     <link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
     <!-- Clockpicker -->
     <link href="vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
     <!-- asColorpicker -->
     <link href="vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
     <!-- Material color picker -->
     <link href="vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
     <!-- Pick date -->
     <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
     <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
     <!-- Custom Stylesheet -->
     <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>

<body>

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

    <?php include 'sidebar.php';
    $i=$_GET['id'];
    $date = date("Y-m-d");
    ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <!-- <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Candidates</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
					</ol>
                </div> -->
                <!-- row -->
               
                <div class="row">
                 
                    <!-- <div class="col-xl-8"> -->
                        <div class="col-xl-8 col-xxl-8 col-lg-8" >
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Schedule Meeting</h4>
                                </div>
                                <div class="card-body">
                                <form action="<?php echo "interview-data.php?id=".$i; ?>" method="POST">
                                    <div class="row form-material">
                                    <div class="col-xl-4 col-xxl-6 col-md-6 mb-3">
                                            <label> Date: </label>
                                            <input type="date" class="form-control" placeholder="Select Interview Date" name="date" min="<?php echo $date; ?>" max="<?php echo date( "Y-m-d", strtotime("$date +3 day")); ?>"  value="<?php echo $date; ?>" required>
                                        </div>
                                        <!-- <div class="col-xl-6 col-xxl-12 col-md-6 mb-3">
                                            <label>Default Material Date Timepicker</label>
                                            <input type="text" id="date-format" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                                        </div> -->
                                        <div class="row form-material">
                                        <div class="col-xl-4 col-xxl-6 col-md-6 mb-3">
                                            <label>Option 1: (Default)</label>
                                            <input type="time" class="form-control" name="time1" placeholder="Select Interview Time">
                                            </div>
                                        <div class="col-xl-4 col-xxl-6 col-md-6 mb-3">    
                                            <label>Duration: </label> <br>
                                            <select class="form-select" aria-label="Default select example" name="duration1" >
                                            <option value="none" selected disabled hidden>Select Duration</option>
                                            <option value="30">30 min</option>
                                            <option value="60">60 min</option>
                                            <option value="90">90 min</option>
                                            </select>

                                        </div>
                                        <div class="col-xl-4 col-xxl-6 col-md-6 mb-3">
                                            <label>Option 2: </label>
                                            <input type="time" class="form-control" name="time2" placeholder="Select Interview Time">
                                            </div>
                                        <div class="col-xl-4 col-xxl-6 col-md-6 mb-3">    
                                            <label>Duration: </label> <br>
                                            <select class="form-select" aria-label="Default select example" name="duration2" >
                                            <option value="none" selected disabled hidden>Select Duration</option>
                                            <option value="30">30 min</option>
                                            <option value="60">60 min</option>
                                            <option value="90">90 min</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 col-xxl-6 col-md-6 mb-3">
                                            <label>Option 3: </label>
                                            <input type="time" class="form-control" name="time3" placeholder="Select Interview Time">
                                            </div>
                                        <div class="col-xl-4 col-xxl-6 col-md-6 mb-3">    
                                            <label>Duration: </label> <br>
                                            <select class="form-select" aria-label="Default select example" name="duration3" >
                                            <option value="none" selected disabled hidden>Select Duration</option>
                                            <option value="30">30 min</option>
                                            <option value="60">60 min</option>
                                            <option value="90">90 min</option>
                                            </select>
                                        </div>
                                         </div>
                                        <!-- <div class="col-xl-3 col-xxl-6 col-md-6">
                                            <label>Min Date set</label>
                                            <input type="text" class="form-control" placeholder="set min date" id="min-date">
                                        </div> -->
                                        <!-- <div class="col-xl-6 col-xxl-12 col-md-6 mb-3">
                                            <label>Interview Slot: </label> <br>
                                        <select class="form-select" aria-label="Default select example" name="slot" >
                                        <option value="none" selected disabled hidden>Select a Slot</option>
                                            <option value="10 am - 11 am">Morning: 10 am - 11 am</option>
                                            <option value="11 am - 12 pm">Morning: 11 am - 12 pm</option>
                                            <option value="12 pm - 1 pm">Afternoon: 12 pm - 1 pm</option>
                                            <option value="1 pm - 2 pm">Afternoon: 1 pm - 2 pm</option>
                                            <option value="2 pm - 3 pm">Afternoon: 2 pm - 3 pm</option>
                                            <option value="3 pm - 4 pm">Afternoon: 3 pm - 4 pm</option>
                                            <option value="4 pm - 5 pm">Afternoon: 4 pm - 5 pm</option>
                                            <option value="5 pm - 6 pm">Evening: 5 pm - 6 pm</option>
                                            <option value="6 pm - 7 pm">Evening: 6 pm - 7 pm</option>
                                          </select>
                                        </div> -->
                                         <div class="form-group row">
                                           <!-- <div class="col-lg-8 ml-auto"> -->
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                                           <input type="submit" class="btn btn-primary" name="submit" value="Submit"> &nbsp;&nbsp;&nbsp;
                                           <?php
                                           $query2="SELECT * FROM job_applications, job_details, candidate_register,admin WHERE job_details.job_id=job_applications.job_id AND candidate_register.candidate_id=job_applications.candidate_id AND job_details.admin_id=admin.admin_id AND application_status='Accepted' AND candidate_register.candidate_id='".$i."' AND job_applications.job_id='".$j."'";
                                           $result2=mysqli_query($conn,$query2);
                                           $array2=mysqli_fetch_assoc($result2);
                                           if(@$array2['reschedule_date']!=''){
                                            echo "<a href='interview-reschedule.php?id=".$i."'  class='btn btn-primary'>Reschedule Interview</a>";  
                                            }
                                            else 
                                                echo " ";
                                        ?>
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
                                                        echo "<a href='table.php?id=".$id."' class='btn btn-primary rounded'>Interview Status</a><b>";
                                                        echo "Successfully Submit Record";
                                                        $_SESSION['jobid']=$id;
                                                        // echo "<script>alert('Job Updated successfully.'); window.location = 'https://main.solicitous.cloud/portal/view_req.php?id=$id';</script>";
                                                        //https://main.solicitous.cloud/portal/view_req.php?id=97
                                                     }
                                                     else
                                                        echo "Try Again";
                                                      
                                                    }
                                                ?>
                                            
                                            <!--</div>-->
                                        </div> 
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->




        <?php include 'footer.html'; ?>

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
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	
    



    <!-- Jquery Validation -->
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="js/plugins-init/jquery.validate-init.js"></script>

    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<!-- <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script> -->
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
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	
    


    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<!-- <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script> -->
</body>



</html>