<?php 
include 'candidate-auth-session.php';
include '../connect.php';
include 'candidate-header.html';
?>


<style>
    a.theme-btn.btn-style-one-01{
    position: relative;
    text-align: center;
    white-space: nowrap;
    color: #ffffff;
    background-color: #ffa737;
    font-size: 15px;
    line-height: 20px;
    border-radius: 8px;
    font-weight: 400;
    padding: 18px 35px 15px 35px;
    left: 27px;
    }
    
    @media screen and (max-width: 500px){
    a.theme-btn.btn-style-one-01{
            top: 22px;
            left: 0px;
    }    
    }
    
</style>


</head>

<body>

<div class="page-wrapper dashboard">

    <!-- Preloader -->
    <div class="preloader"></div>


    <!-- Main Header-->
<?php
    include 'sidebar.php';
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
                            <div class="widget-title">
                            </div>
                        <?php
                            $j=$_GET['id'];
                            $query2="SELECT * FROM job_applications, job_details, candidate_register,admin WHERE job_details.job_id=job_applications.job_id AND candidate_register.candidate_id=job_applications.candidate_id AND job_details.admin_id=admin.admin_id AND candidate_register.candidate_id='".$arrays['candidate_id']."' AND job_applications.job_id='".$j."'";
                            $result2=mysqli_query($conn,$query2);
                            while($array2=mysqli_fetch_assoc($result2)){
                        ?>
                            <div class="widget-content">
                               
                                <form action="" method="post">
                                <div class="profile-personal-info">
                                <div class="row mb-2">
                                        <div class="col-sm-2 col-7">
                                            <h6 class="f-w-500">Company Name<span class="pull-right">:</span>
                                            </h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2['admin_company_name']; ?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-7">
                                            <h6 class="f-w-500">Job Title <span class="pull-right">:</span>
                                            </h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2['job_title']; ?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Job Description<span class="pull-right">:</span>
                                            </h6>
                                        </div>
                                        <div class="col-sm-6 col-7"><span><?php echo $array2['job_description']; ?></span>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Location<span class="pull-right">:</span>
                                            </h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2["job_location"]; ?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Skills Required<span class="pull-right">:</span>
                                            </h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2["job_skill"]; ?></span>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Email <span class="pull-right">:</span></h6>
                                        </div>
                                        <div class="col-sm-7 col-7"><span><?php echo $array2["job_mail"]; ?></span>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Contract <span class="pull-right">:</span></h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2["job_contract_type"]; ?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Post Date: <span class="pull-right">:</span></h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2["job_post_date"]; ?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Openings <span class="pull-right">:</span></h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2["job_opening"]; ?></span>
                                        </div>
                                    </div>

                                    <!--<div class="row mb-2">-->
                                    <!--    <div class="col-sm-2 col-5">-->
                                    <!--        <h6 class="f-w-500">Interview Date <span class="pull-right">:</span></h6>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-sm-4 col-7"><span><?php echo $array2["interview_date"]; ?></span>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="row mb-2">-->
                                    <!--    <div class="col-sm-2 col-5">-->
                                    <!--        <h6 class="f-w-500">Interview Time <span class="pull-right">:</span></h5>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-sm-4 col-7"><span><?php echo $array2["interview_time"]; ?></span>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    
                                        </div><br>
                                        <div class="form-group col-lg-6 col-md-12">
                                                <!-- <input type="submit" class="theme-btn btn-style-one" name="reschedule" value="Reschedule Interview"> -->
                                                
                                                <?php
                                                
                                                //echo '---------------'.$array2["interview_date"];
                                                
                                                if( !empty(  $array2["interview_date"]  ) ) { ?>
                                                
                                                <a class="theme-btn btn-style-one" href='candi-interview.php?id=<?php echo $j; ?>'>Schedule Interview-Slots</a> &nbsp; &nbsp;
                                                <?php } else { ?>
                                                     <!--<a class="theme-btn btn-style-one" href=''><?php echo $array2["application_status"]; ?></a> &nbsp; &nbsp;-->
                                                      <a class="theme-btn btn-style-one" href=''>Negotiate</a> &nbsp; &nbsp;
                                                    
                                               <?php  }
                                                
                                                if(!empty($array2['job_offer'])){
                                                    echo "<a class='theme-btn btn-style-one' href='candidate_offer.php?id=".$j."'>Accepted</a>"; 
                                                }
                                                ?>
                                            
                                               <?php
                                               
                                                if(!empty($array2['job_offer'])){
                                                    echo "<a class='theme-btn btn-style-one-01' href='candidate_offer.php?id=".$j."'>Rejected</a>"; 
                                                }
                                                ?>
                                                
                                                
                                                // <?php 
                                                //     // if(@$array2['reschedule_date']!=''){
                                                //         // echo "<a class='theme-btn btn-style-one' href='reschedule_status.php?id=".$j."'>Rescheduling Status</a>";
                                                       
                                                //     }
                                                //     else 
                                                //         echo " ";
                                                // ?>
                                                
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


