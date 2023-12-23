<?php
include 'auth_session.php';
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("header.html"); ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
<?php include("sidebar.php"); ?>
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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Candidates</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
					</ol>
                </div>
                <!-- row -->
               <?php
               $i=$_GET['id'];
               $_SESSION['view_id']=$i;
               $j=$_SESSION['job_id'];
               $query2="UPDATE `job_applications` SET `view_status`='seen' WHERE job_id=$j and candidate_id=$i"; 
               $result2=mysqli_query($conn,$query2);
               
               
                $query22="SELECT * FROM  `job_applications`  WHERE job_id=$j and candidate_id=$i"; 
                $result22=mysqli_query($conn,$query22);
                
              //$arrayrWW['view_status'];
               

               $queryr="Select * FROM candidate_register,candidate_profile,candidate_social_network where candidate_register.candidate_id=candidate_profile.candidate_id AND candidate_register.candidate_id=candidate_social_network.candidate_id AND candidate_profile.candidate_id=' ".$i." '"; 
               $resultr=mysqli_query($conn,$queryr);
               if ($resultr->num_rows > 0)
               $arrayr=mysqli_fetch_assoc($resultr);
            
               $query="Select * FROM candidate_register,candidate_profile where candidate_register.candidate_id=candidate_profile.candidate_id and candidate_profile.candidate_id=' ".$i." '"; 
               $result=mysqli_query($conn,$query);
               if ($result->num_rows > 0):
             
               while($array=mysqli_fetch_assoc($result)){ 
                ?>
                <div class="row">
                 
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                       
                                    
												<form>
                                                <div class="profile-about-me">
                                                    <div class="pt-4 border-bottom-1 pb-3">
                                                        <h4 class="text-primary">About Me</h4>
                                                        <p class="mb-2"><?php echo $array["candidate_aboutme"]; ?></p>
                                                        <!--A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>-->
                                                    </div>
                                                </div>
                                                <div class="profile-skills mb-5" style="color: cyan;">
                                                    <h4 class="text-primary mb-2">Skills</h4>
                                                    <?php
                                                    $skills=$array["candidate_skills"];
                                                    
                                                    $array1 =  explode(',', $skills);

                                                    foreach ($array1 as $item) {
                                                        echo " <a href='javascript:void()' class='btn btn-primary light btn-xs mb-1'>$item</a>";
                                                    }
                                                     ?>                                               
                                                    <!--<a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Admin</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Dashboard</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Photoshop</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Responsive</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Crypto</a>-->
                                                </div>
                                                <div class="profile-lang  mb-5">
                                                    <h4 class="text-primary mb-2">Language</h4>
                                                    <?php
                                                    $lang=$array["candidate_language"];
                                                    
                                                    $array2 =  explode(',', $lang);

                                                    foreach ($array2 as $item) {
                                                        echo " <a href='javascript:void()' class='btn btn-primary light btn-xs mb-1'>$item</a>";
                                                    }
                                                     ?>                          
													<!--<a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a> 
													<a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>-->
                                                </div>
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Personal Information</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Candi ID <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-4 col-7"><span><?php echo $array["candidate_id"]; ?></span>
                                                        </div>
                                                    </div>
													<div class="row mb-2">
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-4 col-7"><span><?php echo $array["candidate_fname"]." ".$array["candidate_lname"]; ?></span>
                                                        </div>
                                                    </div>
													<div class="row mb-2">
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Position<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-4 col-7"><span><?php echo $array["candidate_position_title"]; ?></span>
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
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Candi Score <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-4 col-7"><span><?php echo $array["candi_score"]; ?>/10</span>
                                                        </div>
                                                    </div>
													
													
													<div class="row mb-2">
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Total Experience<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-4 col-7"><span><?php echo $array["candidate_workexp"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Work Authorization<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-4 col-7"><span><?php echo $array["candidate_workauth"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Contact No<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-4 col-7"><span><?php echo $array["candidate_phoneno"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <!--<div class="row mb-2">-->
                                                    <!--    <div class="col-sm-4 col-5">-->
                                                    <!--        <h5 class="f-w-500">Security Clearance<span class="pull-right">:</span></h5>-->
                                                    <!--    </div>-->
                                                    <!--    <div class="col-sm-4 col-7"><span><?php echo $array["candidate_security"]; ?></span>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                    <!--<div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Employment Title<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php /*echo $array["candidate_employ_title"]; */?></span>
                                                        </div>
                                                    </div>-->
                                                    <div class="row mb-2">
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-7 col-7"><span><?php echo $array["candidate_email"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Skype ID <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-7 col-7"><span><?php echo $array["candidate_skype"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Linkedin ID <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-7 col-7"><span><?php echo $array["candidate_linkedin"]; ?></span>
                                                        </div>
                                                    </div>
                                                    <!--<div class="row mb-2">-->
                                                    <!--    <div class="col-sm-4 col-5">-->
                                                    <!--        <h5 class="f-w-500">Skype ID<span class="pull-right">:</span>-->
                                                    <!--        </h5>-->
                                                    <!--    </div>-->
                                                    <!--    <div class="col-sm-4 col-7"><span><?php if(!empty($arrayr["candidate_skype"])) echo $arrayr["candidate_skype"]; else echo " - ";  ?></span>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                    <!--<div class="row mb-2">-->
                                                    <!--    <div class="col-sm-4 col-5">-->
                                                    <!--        <h5 class="f-w-500">Linkedin ID<span class="pull-right">:</span>-->
                                                    <!--        </h5>-->
                                                    <!--    </div>-->
                                                    <!--    <div class="col-sm-4 col-7"><span><?php if(!empty($arrayr["candidate_linkedin"])) echo $arrayr["candidate_linkedin"]; else echo " - ";  ?></span>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                    <div class="row mb-2">
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Location <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-4 col-7"><span><?php echo $array["candidate_location"]; ?></span>
                                                        </div>
                                                    </div>
													
                                                    <!--<div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Expected Rate <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php/* echo $array["candidate_salary"]; */?></span>
                                                        </div>
                                                    </div>-->
													<!--<div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Visa Status<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span>H1B</span>
                                                        </div>
                                                    </div>-->
													
													<div class="row mb-2">
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Link for Video <span class="pull-right" >:</span>Interview</h5>
                                                        </div>
                                                        <div class="col-sm-4 col-7"><span><a href="#">Video link</a></span>
                                                        </div>
                                                    </div>
													<div class="row mb-2">
                                                        <div class="col-sm-4 col-5">
                                                            <h5 class="f-w-500">Resume Link<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <?php echo "<div class='col-sm-4 col-7'><span><a href='resume.php?id=".$array['candidate_id']."'>View</a></span>"; ?>
                                                        </div>
                                                    </div>

													<!-- <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Video Link<span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><a href="#">Video link</a></span>
                                                        </div>
                                                    </div> -->
													
													<!-- <a href="company-form.html" class="btn rounded btn-danger  mr-2 mb-0 mb-md-0 mb-sm-2"><i class="las la-upload scale5 mr-3"></i>
						
														Update Resumes</a> -->
														
														
														
														
                                                   <?php
                                                   
                                                  if ($result22->num_rows > 0){
                                                   
                                                    $arrayrWW=mysqli_fetch_assoc($result22);
                                                   
                                                  
                                                   if (  !empty($arrayrWW['interview_date'])){
                                                       
                                                       echo "<a href='https://main.solicitous.cloud/portal/table.php' class='btn rounded btn-primary  mr-2 mb-0 mb-md-0 mb-sm-2'>View Status</a>"; 
                                                   } else  {
                                                        echo "<a href='interview.php?id=".$array["candidate_id"]."' class='btn rounded btn-primary  mr-2 mb-0 mb-md-0 mb-sm-2'>Proceed to Final Interview</a>"; ?>
                                                     <!--<?php echo "<a href='table.php' class='btn rounded btn-primary  mr-2 mb-0 mb-md-0 mb-sm-2'>Interview Status</a>"; ?>-->
                                                   <a data-toggle="modal" data-target="#myModal"  href='rejectapplication.php?id=<?php echo $array['candidate_id']; $is_rejected='1'; ?>'  class='btn rounded btn-primary  mr-2 mb-0 mb-md-0 mb-sm-2'>Reject Application</a> 
                                                  
                                                  <?php  } 
                                                   }else  {
                                                   
                                                   
                                                   echo "<a href='interview.php?id=".$array["candidate_id"]."' class='btn rounded btn-primary  mr-2 mb-0 mb-md-0 mb-sm-2'>Proceed to Final Interview</a>"; ?>
                                                     <!--<?php echo "<a href='table.php' class='btn rounded btn-primary  mr-2 mb-0 mb-md-0 mb-sm-2'>Interview Status</a>"; ?>-->
                                                   <a data-toggle="modal" data-target="#myModal"  href='rejectapplication.php?id=<?php echo $array['candidate_id']; $is_rejected='1'; ?>'  class='btn rounded btn-primary  mr-2 mb-0 mb-md-0 mb-sm-2'>Reject Application</a> 
                                                   
                                                   <?php }  ?>
                                                   
                                                   
                                                </div>

                                            </form>


                                                <!--Division for Modal-->
<div id="myModal" class="modal fade" role="dialog">
    <!--Modal-->
    <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-content">
            <!-- Modal Header-->
            <div class="modal-header" style="background-color: #ff9b52">
                <h3 >Feedback Request</h3>
                <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
            </div> <!-- Modal Body-->
            <form method="post" >
            <div class="modal-body text-center"> <i class="far fa-file-alt fa-4x mb-3 animated rotateIn icon1"></i>
                <h3>Your opinion matters</h3>
                <h5>Help us improve our product? <strong>Give us your feedback.</strong></h5>
                <hr>
                <h6>Your Rating</h6>
            </div> <!-- Radio Buttons for Rating-->
            <div class="form-check mb-4"> <input name="feedback" type="radio" value="Very good"> <label class="ml-3">Very good</label> </div>
            <div class="form-check mb-4"> <input name="feedback" type="radio" value="Good"> <label class="ml-3">Good</label> </div>
            <div class="form-check mb-4"> <input name="feedback" type="radio" value="Mediocre"> <label class="ml-3">Mediocre</label> </div>
            <div class="form-check mb-4"> <input name="feedback" type="radio" value="Bad"> <label class="ml-3">Bad</label> </div>
            <div class="form-check mb-4"> <input name="feedback" type="radio" value="Very Bad"> <label class="ml-3">Very Bad</label> </div>
            <!--Text Message-->
            <div class="text-center">
                <h4>What could we improve?</h4>
            </div> <textarea type="textarea" name="message" placeholder="Your Message" rows="3"></textarea> <!-- Modal Footer-->
            <div class="modal-footer"> <button type="submit" name="submit" class="btn btn-primary">Send <i class="fa fa-paper-plane"></i> </button> <a href="" class="btn btn-outline-primary" data-dismiss="modal">Cancel</a> </div>
            </form>
            
        <?php
            if (isset($_POST['submit'])) {
                $rating= $_POST['feedback'];
                $message= $_POST['message'];
                $sql = "INSERT INTO feedback (user_id,rating,message)
                VALUES ('".$_GET['id']."','".$rating."','".$message."')";
                
                  if (mysqli_query($conn, $sql)) {
                    echo " record created successfully";
                    header("Refresh: 2");
                  } else {
                    echo " Please try later.";  
                    header("Refresh: 2");
                    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
            }    
        ?>        
        
        </div>
    </div>
</div>
                                            </div>
										
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


<?php include("footer.html"); ?>

		
</body>



</html>