<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include 'candidate-auth-session.php';
include '../connect.php';
include 'candidate-header.html';
?>
</head>

<body>

<div class="page-wrapper dashboard">

    <!-- Preloader -->
    <div class="preloader"></div>


    <!-- Main Header-->
<?php
    include 'candidate-sidebar.php';
?>
    <!-- End User Sidebar -->

    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Job Details</h3>
                <!-- <div class="text">Ready to jump back in?</div> -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box"> 
                        <?php
                            $j=$_GET['id'];
                            $query2="SELECT * FROM job_applications, job_details, candidate_register,admin WHERE job_details.job_id=job_applications.job_id AND candidate_register.candidate_id=job_applications.candidate_id AND job_details.admin_id=admin.admin_id AND application_status='Accepted' AND candidate_register.candidate_id='".$arrays['candidate_id']."' AND job_applications.job_id='".$j."'";
                            $result2=mysqli_query($conn,$query2);
                            while($array2=mysqli_fetch_assoc($result2)){
                        ?>
                        <div class="widget-title">
                        <?php
                                    if($array2['reschedule_status']=="Rejected"){ 
                                        echo "<div class='row mb-4'> <h5>Your reschedule request has been Denied.<br><br> Interview Details are as follows:</h5></div>";
                                    }
                                    else if($array2['reschedule_status']=="Accepted"){ 
                                        echo "<div class='row mb-4'> <h5>Your reschedule request has been Accepted.<br><br> Interview Details are as follows:</h5></div>";
                                    }
                                    else echo "<div class='row mb-4'> <h5>No reschedule response yet.<br><br>Interview Details are as follows:</h5></div>";
                                     

                                ?>
                         </div>
                            <div class="widget-content">
                                <form action="" method="post">
                                <div class="profile-personal-info">

                            
                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Interview Date <span class="pull-right">:</span></h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2["interview_date"]; ?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Interview Time <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2["interview_time"]; ?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Interview Slot <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2["interview_slot"]; ?></span>
                                        </div>
                                    </div>
                                    
                                        </div><br>
                                        <div class="form-group col-lg-6 col-md-12">
                                                <!-- <input type="submit" class="theme-btn btn-style-one" name="reschedule" value="Reschedule Interview"> -->
                                                <a class="theme-btn btn-style-one" href='candidate_view_application.php?id=<?php echo $j; ?>'>Go Back</a>
                                            </div>
										</form>
                                            </div>
                                            
                                        <?php
                                        }
                                        
                                        ?>
                                
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Dashboard -->

    <!-- Copyright -->
<?php
    include 'candidate-footer.html';
?>
</html>


