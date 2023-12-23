<?php 
include 'auth_session.php';
include 'header.html'; ?></head>
<body>
<?php include 'sidebar.php';
      include("connect.php");
      //$id= $_SESSION['jobid'];
      $id=$_GET['id'];
      $skill1=array();
      $skill="";
      $title = stripslashes($_POST['title']);
      $email = stripslashes($_POST['email']);
      $location = stripslashes($_POST['location']);
      $description = stripslashes($_POST['description']);
      $skill1=$_POST['skill'];
      foreach ($skill1 as $value) {
        $skill.= $value.", ";
    }
      $skill = rtrim(trim($skill), ',');
      $skill = trim($skill);
      $shift = stripslashes($_POST['shift']);
      $pay = stripslashes($_POST['pay']);
      $travel = stripslashes($_POST['travel']);
      $post_date = stripslashes($_POST['post_date']);
      $expire_date = stripslashes($_POST['expire_date']);
      $opening = stripslashes($_POST['opening']);
      
      $query2="Select admin_id from admin where admin_email='".$_SESSION['email']."'";
      $result2=mysqli_query($conn,$query2);
      $array2=mysqli_fetch_array($result2);
      $adminid = $array2[0];

      $query="INSERT INTO `job_details` (`job_id`, `admin_id`, `job_title`, `job_mail`, `job_location`, `job_description`, `job_skill`, `job_contract_type`, `job_pay_range`, `job_travel_requirement`, `job_post_date`, `job_expire_date`, `job_opening`, `job_status`)  VALUES ('$id','$adminid','$title','$email','$location','$description','$skill','$shift','$pay','$travel','$post_date','$expire_date','$opening','Active')";
      $result=mysqli_query($conn,$query);
      if($result){
         echo "Success";
      }
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
       
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Requirement</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">View</a></li>
					</ol>
                </div>
                <!-- row -->
               
                <div class="row">
                 
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                       
                                    
												<form>
                                                <!-- <div class="profile-about-me">
                                                    <div class="pt-4 border-bottom-1 pb-3">
                                                        <h4 class="text-primary">About Me</h4>
                                                        <p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="profile-skills mb-5" style="color: cyan;">
                                                    <h4 class="text-primary mb-2">Skills</h4>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Admin</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Dashboard</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Photoshop</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Responsive</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Crypto</a>
                                                </div> -->
                                                <!-- <div class="profile-lang  mb-5">
                                                    <h4 class="text-primary mb-2">Language</h4>
													<a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a> 
													<a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                                                </div> -->
                                                <?php
                                                //$i=$_SESSION['jobid'];
                                                $i=$_GET['id'];
                                                $query="Select * FROM job_details where job_id=' ".$i." '"; 
                                                $result=mysqli_query($conn,$query);
                                                if ($result->num_rows > 0):
                                                
                                                while($array=mysqli_fetch_assoc($result)){ 
                                                    ?>
                                                <div class="profile-personal-info">
                                                    <!-- <h4 class="text-primary mb-4">Personal Information</h4> -->
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Job Title<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php echo $array["job_title"]; ?></span>
                                                        </div>
                                                    </div>
													<div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php echo $array["job_mail"]; ?></span>
                                                        </div>
                                                    </div>
													<div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Location<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php echo $array["job_location"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Job Title <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>Java Developer</span>
                                                        </div>
                                                    </div> -->
													<div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Best Skill <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php echo $array["job_skill"]; ?></span>
                                                        </div>
                                                    </div>
													
													
													<div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Direct Hire/Contract<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php echo $array["job_contract_type"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Pay Range<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php echo $array["job_pay_range"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Travel Requirement<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php echo $array["job_travel_requirement"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Job Post Date<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php echo $array["job_post_date"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Post Expire Date<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php echo $array["job_expire_date"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Company Name<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php echo $array["company_name"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Number of Openings<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php echo $array["job_opening"]; ?></span>
                                                        </div>
                                                    </div>
                                                   <center> <a href="edit_requirement.php?id=<?php echo $i; ?>" class="btn btn-primary rounded">Edit</a>
                                                            <a href="manage_job.php" class="btn btn-primary rounded">Post Requirement</a>
                                                  </center>

                                                    <!-- <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Security Clearance<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>Yes</span>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Employment Title<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>C2C</span>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>arundixit1@gmail.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Skype ID<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>arundixit1@gmail.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Location <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>Wilmington DE</span>
                                                        </div>
                                                    </div>
													
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Expected Rate <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>$72/hr on C2C</span>
                                                        </div>
                                                    </div>
													<div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Visa Status<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>H1B</span>
                                                        </div>
                                                    </div>
													
													<div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Availability for <span class="pull-right" >:</span>Interview</h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>Video</span>
                                                        </div>
                                                    </div>
													<div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Resume Link<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><a href="./resume.html">David.Exce</a></span>
                                                        </div>
                                                    </div>

													<div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Video Link<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><a href="#">Video link</a></span>
                                                        </div>
                                                    </div>
													 -->
													<!-- <a href="company-form.html" class="btn rounded btn-danger  mr-2 mb-0 mb-md-0 mb-sm-2"><i class="las la-upload scale5 mr-3"></i>
						
													<!--	Update Resumes</a> -->
													<!-- <a href="javascript:void(0);" class="btn rounded btn-primary  mr-2 mb-0 mb-md-0 mb-sm-2"><i class="las la-download scale5 mr-3"></i>
						
															Download Resumes</a>
														 -->
                                                </div>
                                            </div>
										</form>
                                        </div>
                                    </div>
                                    <?php
                                         }
                                        endif;
                                    ?>
									<!-- Modal -->
									<div class="modal fade" id="replyModal">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Post Reply</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
												</div>
												<div class="modal-body">
													<form>
														<textarea class="form-control" rows="4">Message</textarea>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Reply</button>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
	
	<!--removeIf(production)-->
        
    <!--**********************************
        Scripts
    ***********************************-->
<?php include 'footer.html'; ?>
    



	
		
</body>



</html>