<?php 
include 'connect.php';
session_start();

   $candididate=mysqli_query($conn,"SELECT * FROM candidate_profile left join candidate_register on  candidate_profile.candidate_id=candidate_register.candidate_id  WHERE 1=1 $search_query");
   while( $result=mysqli_fetch_array($candididate))
   {
       echo $result['candidate_fname'];
       echo '<br>';
   }
   
   ?>
   
   




<!DOCTYPE html>
<html lang="en">
<head>    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Candi.ai</title>
    <!-- Favicon icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <link rel="icon" type="image/png" sizes="16x16" href="images/Candi-AI-06.png">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
   <br />
   <!-- <b>Notice</b>:  session_start(): A session had already been started - ignoring in <b>C:\xampp\htdocs\portal\sidebar.php</b> on line <b>2</b><br /> -->
-->
<!--**********************************
            Nav header start
            ***********************************-->
            <div class="nav-header">
                <a href="index.php" class="brand-logo">
                    <img src="images/Candi-AI-06.png"  height="64px">

                    <img src="images/Candi-AI-08.png" class="brand-title"  fill-rule="evenodd">
                </a>
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
        <!--**********************************
            Nav header end
            ***********************************-->

        <!--**********************************
            Header start
            ***********************************-->
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left">
                                <div class="dashboard_bar">
                                    Application
                                </div>
                            </div>
                            <ul class="navbar-nav header-right">
							<!-- <li class="nav-item">
								<div class="input-group search-area d-xl-inline-flex d-none">
									<input type="text" class="form-control" placeholder="Search here...">
									<div class="input-group-append">
										<span class="input-group-text"><a href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a></span>
									</div>
								</div>
							</li> -->
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                   <div class="header-info">
                                      <span class='text-black'><strong>Nishant  Gautam</strong></span>										<!-- <span class="text-black"><strong></strong></span> -->
                                      <p class="fs-12 mb-0"> Admin</p>
                                  </div>
                                  <img src='logo/logo.jpg' alt='employer logo displayed in a circular shape' class='thumb'>                                </a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                   <a href="app-profile.php" class="dropdown-item ai-icon">
                                      <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                      <span class="ml-2">Profile </span>
                                  </a>
                                  <a href="logout-user.php" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
        <!--**********************************
            Header end ti-comment-alt
            ***********************************-->


<!--**********************************
            Sidebar start
            ***********************************-->
            <div class="deznav">
                <div class="deznav-scroll">
                    <ul class="metismenu" id="menu">
                       <li><a class="ai-icon" href="index.php" aria-expanded="false">
                          <i class="fa fa-bars" aria-hidden="true"></i>
                          <!-- <i class="flaticon-381-notepad"></i> -->
                          <span class="nav-text">Dashboard</span>
                      </a>
                  </li>
                  <li>


                      <li><a class="ai-icon" href="requirement.php" aria-expanded="false">
                         <i class="fa fa-television" aria-hidden="true"></i>
                         <!-- <i class="flaticon-381-notepad"></i> -->
                         <span class="nav-text">Requirement</span>
                     </a>
                 </li>

                 <li>
                   <li>
                      <li><a class="ai-icon" href="candidate-front.php" aria-expanded="false">
                         <i class="fa fa-user" aria-hidden="true"></i>
                         <!-- <i class="flaticon-381-notepad"></i> -->
                         <span class="nav-text">Candidates</span>
                     </a>
                 </li>


                 <li><a class="ai-icon" href="manage_job.php" aria-expanded="false">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                    <!-- <i class="flaticon-381-notepad"></i> -->
                    <span class="nav-text">Manage Job</span>
                </a>
            </li>	

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
              <i class="fa fa-calendar-o" aria-hidden="true"></i>

              <span class="nav-text">Reports</span>
          </a>

          <ul aria-expanded="false">
            <li><a href="table.php">Report-1</a></li>
            <li><a href="rep11.php">Report-2</a></li>

        </ul>
    </li>





    <li><a href="email-parser.php" class="ai-icon" aria-expanded="false">
      <!-- <i class="flaticon-381-settings-2"></i> -->
      <i class="fa fa-search" aria-hidden="true"></i>
      <span class="nav-text">Email Parser</span>
  </a>
</li>
				<!-- <li><a href="add_user.php" class="ai-icon" aria-expanded="false">
						
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<span class="nav-text">Add User</span>
					</a>
				
            <li>
              <a class="ai-icon" href="" aria-expanded="false">
                <i class="fa fa-sign-in" aria-hidden="true"></i>

                <span class="nav-text">Logout </span>
              </a>
            </li>
        -->                    

					<!-- <li><a class="ai-icon" href="logout-user.php" aria-expanded="false">
						<i class="fa fa-sign-in" aria-hidden="true"></i> -->
						<!-- <i class="flaticon-381-notepad"></i> -->
						<!-- <span class="nav-text">Logout </span>
					</a>
               </li> -->
					<!-- <li><a class="ai-icon" href="page-register.php" aria-expanded="false">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						<span class="nav-text">Register</span>
					</a>
               </li> -->


           </ul>

           <div class="copyright">
            <p><strong> © Copyright Solicitous. <br> All Right Reserved</strong>  </p>
            <p><a href="http://solicitousbusiness.com/">Powered with <i class="fa fa-heart" style="color:red;"></i> By</a><a href="http://solicitousbusiness.com/"> Solicitous</a></p>
        </div>
    </div>
</div>
        <!--**********************************
            Sidebar end
        ***********************************    <!--*******************
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
                                                <div class="profile-personal-info">
                                                    <!-- <h4 class="text-primary mb-4">Personal Information</h4> -->
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Skills<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php if(isset($_GET['skills']))
{
    $skills=$_GET['skills'];
    $search_query.="and FIND_IN_SET('".$skills."',candidate_skills) ";
     
} ?>
    
</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Experience <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php if(isset($_GET['exp']))
{
    $exp=$_GET['exp'];
    $search_query.="and candidate_workexp like '$exp%' ";
     
} ?>
    
</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Job Title<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php if(isset($_GET['job_title']))
{
    $job_title=$_GET['job_title'];
    $search_query.="and candidate_jobtitle like '%$job_title%' ";
     
} ?>
    
</span>
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
                                                    <!-- <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500"><span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span></span>
                                                        </div>
                                                    </div> -->


                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Shift<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php if(isset($_GET['shift']))
{
    $shift=$_GET['shift'];
    $search_query.="and candidate_employ_title like '%$shift%' ";
     
} ?>
    
</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Location<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span><?php if(isset($_GET['location']))
{
    $location=$_GET['location'];
    $search_query.="and candidate_location like '%$location%' ";
     
} ?>
    
</span>
                                                        <!-- </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Travel Requirement<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500"><span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Post Expire Date<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-sm-3 col-5">
                                                            <h5 class="f-w-500">Number of Openings<span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-sm-9 col-7"><span></span>
                                                        </div>
                                                    </div> -->
                                                    <center> <a href="edit_requirement.php?id=17" class="btn btn-primary rounded">Edit</a>
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
						
                                                  Update Resumes</a> -->
													<!-- <a href="javascript:void(0);" class="btn rounded btn-primary  mr-2 mb-0 mb-md-0 mb-sm-2"><i class="las la-download scale5 mr-3"></i>
						
															Download Resumes</a>
                                                     -->
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
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
  <!--**********************************
            Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p><a href="http://solicitousbusiness.com/">Powered with <i class="fa fa-heart" style="color:red;"></i> By</a><a href="http://solicitousbusiness.com/"> Solicitous</a></p>
                </div>
            </div>
        <!--**********************************
            Footer end
            ***********************************-->

            <!-- Required vendors -->
            <script src="vendor/global/global.min.js"></script>
            <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
            <script src="vendor/lightgallery/js/lightgallery-all.min.js"></script>
            <script src="js/custom.min.js"></script>
            <script src="js/deznav-init.js"></script>
            <script>
              $('#lightgallery').lightGallery({
                 thumbnail:true,
             });
         </script>    





     </body>



     </html>