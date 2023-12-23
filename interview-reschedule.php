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
    $query2="SELECT * FROM job_applications, job_details, candidate_register,admin WHERE job_details.job_id=job_applications.job_id AND candidate_register.candidate_id=job_applications.candidate_id AND job_details.admin_id=admin.admin_id AND application_status='Accepted' AND candidate_register.candidate_id='".$i."' AND job_applications.job_id='".$j."'";
    $result2=mysqli_query($conn,$query2);
    while($array2=mysqli_fetch_assoc($result2)){
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
                                    <h4 class="card-title">Reschedule Meeting</h4>
                                </div>
                                <div class="card-body">
                                <form action="interview-reschedule-data.php?id=<?php echo $i; ?>" method="POST">
                                    <b>Interview Date:</b> <?php echo $array2['interview_date']; ?> &nbsp;&nbsp;&nbsp;
                                    <b>Interview Time:</b> <?php echo $array2['interview_time']; ?> <br><br> 

                                    <b>Reschedule Date:</b> <?php echo $array2['reschedule_date']; ?> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <b>Reschedule Time:</b> <?php echo $array2['reschedule_time']; ?><br><br>
                                    
                                    <?php
                                        $time=$array2['reschedule_time'];
                                        $time= date('H:i', strtotime($time));
                                    ?>

                                    <div class="row form-material">
                                        <div class="col-xl-6 col-xxl-12 col-md-6 mb-3">
                                            <label> Date: </label>
                                            <input type="text" class="form-control" placeholder="Select Interview Date" name="date" id="mdate" value="<?php echo $array2['reschedule_date']; ?>" >
                                        </div>
                                        <!-- <div class="col-xl-6 col-xxl-12 col-md-6 mb-3">
                                            <label>Default Material Date Timepicker</label>
                                            <input type="text" id="date-format" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                                        </div> -->
                                        <div class="col-xl-6 col-xxl-12 col-md-6 mb-3">
                                            <label>Time: </label>
                                            <input class="form-control" id="timepicker" name="time" placeholder="Select Interview Time" value="<?php echo $time; ?>" >
                                        </div>
                                        <!-- <div class="col-xl-3 col-xxl-6 col-md-6">
                                            <label>Min Date set</label>
                                            <input type="text" class="form-control" placeholder="set min date" id="min-date">
                                        </div> -->
                                        <div class="col-xl-6 col-xxl-12 col-md-6 mb-3">
                                            <label>Interview Slot: </label> <br>
                                        <select class="form-select" aria-label="Default select example" name="slot" required>
                                        <option value="none" selected disabled hidden>Select a slot</option>
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
                                        </div>
                                         <div class="form-group row">
                                           <!-- <div class="col-lg-8 ml-auto"> -->
                                          <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                                            <input type="submit" class='btn btn-primary' name="submit" value="Update">
                                            <!-- <a href='interview-reschedule-id.php?id=<?php //echo $i; ?>?status=Accepted'  class='btn btn-primary'>Accept</a>  --> &nbsp;&nbsp;&nbsp; 
                                            <a href='interview-reschedule-reject.php?id=<?php echo $i; ?>'  class='btn btn-primary'>Reject</a> 
                                            <!--</div>-->
                                        </div> 
                                      </form>
                                      <?php 
                                        }
                                        ?>
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