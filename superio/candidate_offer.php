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
                <h3>Job Offer</h3>
                <!-- <div class="text">Ready to jump back in?</div> -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">                        
                            <div class="widget-title">
                            </div>
                            <?php
                            $j=$_GET['id'];
                            $query2="SELECT * FROM job_applications, job_details, candidate_register,admin WHERE job_details.job_id=job_applications.job_id AND candidate_register.candidate_id=job_applications.candidate_id AND job_details.admin_id=admin.admin_id AND job_applications.candidate_id='".$arrays['candidate_id']."' AND job_applications.job_id='".$j."'";
                            $result2=mysqli_query($conn,$query2);
                            while($array2=mysqli_fetch_assoc($result2)){
                                ?>
                                         
                            <div class="widget-content">
                               
                                <form action="" method="post">
                                <div class="profile-personal-info">
                                <?php 
                                //echo "<h5> Dear ".$array2['candidate_fname']." ".$array2['candidate_lname'].",<br><br> You have been selected for the position of ".$array2['job_title']." at ".$array2['admin_company_name']."</h5><br> ";
                                //echo "<h5>You have been offered $".$array2['job_offer']." ".$array2['job_type']."</h5>";
                                if($array2['job_offer_status'] == 'Accepted'){
                                    echo "<div class='col-xl-9 col-xxl-9 col-lg-9' >
                                    <h5> Dear ".$array2['candidate_fname']." ".$array2['candidate_lname'].",<br><br> You have been Accepted for the position of ".$array2['job_title']." at ".$array2['admin_company_name'].".<br><br>
                                    Offer Details: <br> Offer: $".$array2['job_offer']." ".$array2['job_type']." <br>Date: ".$array2['job_offer_final_date']."</h5></div><br>";
                                    echo "</div><div class='form-group col-lg-6 col-md-12'><h5> Congratulations!</h5> </div>";
                                }
                                elseif($array2['job_offer_status'] == 'Rejected'){
                                    echo "<div class='col-xl-9 col-xxl-9 col-lg-9' >
                                    <h5> Dear ".$array2['candidate_fname']." ".$array2['candidate_lname'].",<br><br> You have been Rejected from the position of ".$array2['job_title']." at ".$array2['admin_company_name'].".<br> </h5>
                                    </div><br>";
                                    echo "</div><div class='form-group col-lg-6 col-md-12'><h5>Good Luck!</h5> </div>";
                                }
                                elseif(!empty($array2['counter_job_offer'])){
                                    echo "<h5> Dear ".$array2['candidate_fname']." ".$array2['candidate_lname'].",<br><br> You have been selected for the position of ".$array2['job_title']." at ".$array2['admin_company_name'].".<br><br> </h5>";
                                    echo "<h5>You have made a counter offer of $".$array2['counter_job_offer']." ".$array2['job_type']."<br><br>Original Offer: $".$array2['job_offer']." ".$array2['job_type']."<br>Date: ".$array2['job_offer_date']."</h5>";
                                    echo " </div><br>
                                    <div class='form-group col-lg-6 col-md-12'>
                                    <a class='theme-btn btn-style-one' href='accept-offer.php?id=".$j."'>Accept</a> &nbsp; &nbsp;
                                    <a class='theme-btn btn-style-one' href='counter.php?id=".$j."'>Counter Offer</a> &nbsp; &nbsp;
                                    <a class='theme-btn btn-style-one' href='reject-offer.php?id=".$j."'>Reject</a> &nbsp; &nbsp;
                                    </div>";
                                }
                                else
                                {
                                    echo "<h5> Dear ".$array2['candidate_fname']." ".$array2['candidate_lname'].",<br><br> You have been selected for the position of ".$array2['job_title']." at ".$array2['admin_company_name'].".<br> </h5>";
                                    echo "<h5>You have been offered $".$array2['job_offer']." ".$array2['job_type']."</h5>";
                                    echo " </div><br>
                                    <div class='form-group col-lg-6 col-md-12'>
                                    <a class='theme-btn btn-style-one' href='accept-offer.php?id=".$j."'>Accept</a> &nbsp; &nbsp;
                                    <a class='theme-btn btn-style-one' href='counter.php?id=".$j."'>Counter Offer</a> &nbsp; &nbsp;
                                    <a class='theme-btn btn-style-one' href='reject-offer.php?id=".$j."'>Reject</a> &nbsp; &nbsp;
                                    </div>";
                                }
                                ?>
                                    
                                <!-- <div class="row mb-2">
                                        <div class="col-sm-2 col-7">
                                            <h6 class="f-w-500">candidate Name <span class="pull-right">:</span>
                                            </h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php //echo $array2['candidate_fname']; ?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-7">
                                            <h6 class="f-w-500">Company Name<span class="pull-right">:</span>
                                            </h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php //echo $array2['admin_company_name']; ?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Position <span class="pull-right">:</span></h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php //echo $array2["job_title"]; ?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Job Offer<span class="pull-right">:</span></h6>
                                        </div>
                                        <div class="col-sm-7 col-7"><span><?php //echo "$".$array2["job_offer"]." ".$array2["job_type"]; ?></span>
                                        </div>
                                    </div> -->
                                     
                                       
                                               <!--  <?php 
                                                  // if(@$array2['reschedule_date']!=''){
                                                     //   echo "<a class='theme-btn btn-style-one' href='reschedule_status.php?id=".$j."'>Rescheduling Status</a>";
                                                   // }
                                                    //else 
                                                        //echo " ";
                                                ?> -->
                                                
                                            
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


