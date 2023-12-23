<?php 
include 'candidate-auth-session.php';
include '../connect.php';
include 'candidate-header.html';
 $candidate_id=$_SESSION['candidate_id'];
 $candidate_data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM candidate_register WHERE candidate_id=$candidate_id"));    
 $candi_score=$candidate_data['candi_score'];
?>

<style>
    button.theme-btn.btn-style-one{
            margin-top: 54px;
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
                            
                           // echo '------'."SELECT * FROM job_applications WHERE candidate_id=$j  and interview_date !=''";
                            $candidate_dataInterview=mysqli_query($conn,"SELECT * FROM job_applications WHERE candidate_id=$candidate_id  and interview_date !=''");    
                            
                             $candidate_dataInterview =   mysqli_num_rows($candidate_dataInterview);
                          
                            $intergivenCheck = false;
                            if( $candidate_dataInterview > 0 ){
                                $intergivenCheck = true;
                                
                            }
                            
                            
                            
                          //  $query2="SELECT * FROM job_applications, job_details, candidate_register,admin WHERE job_details.job_id=job_applications.job_id AND candidate_register.candidate_id=job_applications.candidate_id AND job_details.admin_id=admin.admin_id  ";
                            $query2="SELECT * FROM  job_details LEFT JOIN admin on admin.admin_id=job_details.admin_id WHERE job_details.job_id=$j  ";
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
                                            <h6 class="f-w-500">Pay Range<span class="pull-right">:</span>
                                            </h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2["job_pay_range"]; ?></span>
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
                                            <h6 class="f-w-500">Minimum Experience <span class="pull-right">:</span></h6>
                                        </div>
                                        <div class="col-sm-7 col-7"><span><?php echo $array2["job_exp"]; ?></span>
                                        </div>
                                    </div> 
                                    
                                    <!--<div class="row mb-2">-->
                                    <!--    <div class="col-sm-2 col-5">-->
                                    <!--        <h6 class="f-w-500">Minimum Experience<span class="pull-right">:</span></h6>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-sm-7 col-7"><span><?php echo $array2["job_exp"]; ?></span>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    
                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Email Address<span class="pull-right">:</span></h6>
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
                                            <h6 class="f-w-500">Job Posting Date <span class="pull-right">:</span></h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo date('d-m-Y',strtotime($array2["job_post_date"])); ?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <h6 class="f-w-500">Openings <span class="pull-right">:</span></h6>
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2["job_opening"]; ?></span>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <?php
                                    
                                   // echo '--------'.$candi_score;
                                    
                                    if(  trim($candi_score) =='0'  ){ ?>
                                    
                                    
                                    <div class="row mb-2">
                                       <div class="col-sm-2 col-5">
                                            
                                          <h4><strong>Note : </strong></h4>
                                       </div>
                                        
                                      <h4>You can apply only after giving an interview.</h4>
                                      
                                    
                                      
                                    </div>
                                    
                                    
                                    <div class="form-group col-lg-12 col-md-12 Center">
                                    <center>
                                      <button class="theme-btn btn-style-one">
                                        <a href="https://main.solicitous.cloud/candi2/portal/superio/interview-terms.php" style="color: white">Click here</a>
                                      </button>
                                    </center>
                                  </div>
                                    
                                    <?php }
                                          else if(  trim($candi_score) =='1' || trim($candi_score) < '5'){ ?>
                                    
                                    
                                    <div class="row mb-2">
                                       <div class="col-sm-2 col-5">
                                            
                                          <h4><strong>Note : </strong></h4>
                                       </div>
                                        
                                      <h4>Your candi score is not satisfactory . You can again apply for the interview.</h4>
                                      
                                     <div class="form-group col-lg-12 col-md-12 Center">
                                    <center>
                                      <button class="theme-btn btn-style-one">
                                        <a href="https://main.solicitous.cloud/candi2/portal/superio/interview-terms.php" style="color: white">Click here</a>
                                      </button>
                                    </center>
                                  </div>
                                      
                                    </div>
                                    
                                    <?php } ?>
                                    
                                    

                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <!--<h6 class="f-w-500">Interview Date <span class="pull-right">:</span></h6>-->
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2["interview_date"]; ?></span>
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-sm-2 col-5">
                                            <!--<h6 class="f-w-500">Interview Time <span class="pull-right">:</span></h5>-->
                                        </div>
                                        <div class="col-sm-4 col-7"><span><?php echo $array2["interview_time"]; ?></span>
                                        </div>
                                    </div>
                                    
                                        </div><br>
                                        <div class="form-group col-lg-6 col-md-12">
                                                <?php 
                                               // if($candi_score>0){ 
                                               // echo "SELECT * FROM candidate_register WHERE candidate_id=$candidate_id";
                                                $check_rejected=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM job_applications WHERE job_id=$j and candidate_id=$candidate_id"));
                                               // if($check_rejected=='0')
                                               
                                              // echo '--------'. $candi_score;
                                              
                                              if($check_rejected=='0'){
                                              if( $candi_score > '4' ) 
                                                {?>
                                                <a href="apply_job.php?job_id=<?=$j; ?>" class="theme-btn btn-style-one" >Apply</a> &nbsp; &nbsp;
                                                <?php }  }else { ?>
                                                 <a href="#" class="theme-btn btn-style-one" >Already Applied</a> &nbsp; &nbsp;
                                                <?php } ?>
                                                
                                                <?php
                                                if(!empty($array2['job_offer'])){
                                                    echo "<a class='theme-btn btn-style-one' href='candidate_offer.php?id=".$j."'>Final Offer</a>"; 
                                                }
                                                ?>
                                                 
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


