<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Candi.ai</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />

    <link
      rel="shortcut icon"
      href="images/Candi-AI-06.png"
      type="image/x-icon"
    />
    <link rel="icon" href="images/Candi-AI-06.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.sidenav {
    min-width: 264px !important;
}
a.dropdown-item:hover {
    background-color: #FFF1D2;
}
.user-sidebar .navigation li a i{
    left: 7px;
}
/* Fixed sidenav, full height */
/*.sidenav {*/
/*  height: 100%;*/
/*  width: 200px;*/
/*  position: fixed;*/
/*  z-index: 1;*/
/*  top: 0;*/
/*  left: 0;*/
/*  background-color: #111;*/
/*  overflow-x: hidden;*/
/*  padding-top: 20px;*/
/*}*/

/* Style the sidenav links and the dropdown button */
/*.sidenav a, .dropdown-btn {*/
/*  padding: 6px 8px 6px 16px;*/
/*  text-decoration: none;*/
/*  font-size: 20px;*/
/*  color: #818181;*/
/*  display: block;*/
/*  border: none;*/
/*  background: none;*/
/*  width: 100%;*/
/*  text-align: left;*/
/*  cursor: pointer;*/
/*  outline: none;*/
/*}*/

/* On mouse-over */
/*.sidenav a:hover, .dropdown-btn:hover {*/
/*  color: #f1f1f1;*/
/*}*/

/* Main content */
/*.main {*/
/*  margin-left: 200px; */
/*  font-size: 20px;*/
/*  padding: 0px 10px;*/
/*}*/

/* Add an active class to the active dropdown button */
/*.active {*/
/*  background-color: green;*/
/*  color: white;*/
/*}*/

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  /*background-color: #262626;*/
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

.amount-outer:hover {
    background: #ffa737 !important;
}

.amount-outer:hover a.upd-pro {
    color: #ffffff;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/*.ls-widget {*/
/* margin-top: -92px;*/
/*    margin-left: -27px;*/
/*}*/

</style>



    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
  </head>

  <body>
    <div class="page-wrapper dashboard">
      <!-- Preloader -->
      <!-- <div class="preloader"></div> -->

      <!-- Header Span -->
      <span class="header-span"></span>

      <!-- Main Header-->
      <?php include 'navbar.php';?>
      <!--End Main Header -->

      <!-- Sidebar Backdrop -->
      <div class="sidebar-backdrop"></div>

      
      <!-- Sidebar Backdrop -->
      <div class="sidebar-backdrop"></div>

      <!-- User Sidebar -->
      <div class="user-sidebar">
        <div class="sidebar-inner">
          <ul class="navigation">
             <li>
              <a href="candidate-dashboard.php"
                ><i class="la la-home"></i>Dashboard</a
              >
            </li>
           
           <li class=""><a href="candidate-dashboard-profile.php"><i class="la la-user"></i>My Profile</a></li>
            <li class=""><a href="candidate-dashboard-resume.php"><i class="la la-paste"></i>My Resume</a></li>
            
  <!--          <li class="dropdown">-->
  <!--            <a href="candidate-dashboard-applied-job.html" class="dropdown-toggle"-->
  <!--              id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-briefcase"></i> Jobs-->
  <!--            </a>-->
  <!--            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">-->
  <!--  <a class="dropdown-item" href="dashboard-change-password.php"> Job Openings</a>-->
  <!--  <a class="dropdown-item" href="change-email.php">Jobs applied</a>-->
    
  <!--</div>-->
  <!--          </li>-->
            
            <li>
            <div class="sidenav">
  <button class="dropdown-btn"><a><i class="la la-briefcase"></i>Jobs  <i class="fa fa-caret-down"></i></a>
  </button>
  
  <div class="dropdown-container" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="dashboard-change-password.php"> Job Openings</a>
    <a class="dropdown-item" href="change-email.php">Jobs applied</a>
    
  </div>
  
</div>
           </li>
           <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>




            <!--<li>-->
            <!--  <a href="job_opening.php"-->
            <!--    ><i class="la la-briefcase"></i> Job Openings</a-->
            <!--  >-->
            <!--</li>-->
            <!--<li><a href="jobs_applied.php"><i class="la la-bookmark-o"></i>Jobs applied</a></li> -->

            <!--<li>-->
            <!--  <a href="http://r.py.solicitous.cloud/"-->
            <!--    ><i class="la la-sticky-note"></i>Document Validation</a>-->
            <!--</li>-->
            
        <li>
 <div class="sidenav">
  <button class="dropdown-btn"><a><i class="la la-sticky-note"></i> Document Validation  <i class="fa fa-caret-down"></i></a>
  </button>
  
  <div class="dropdown-container" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href=""> - Visa</a>
    <a class="dropdown-item" href="">- Identity Proof</a>
    <a class="dropdown-item" href=""> - Green Card </a>
    <a class="dropdown-item" href="">- Other</a>
  </div>
  
</div>
     </li>
              <li>
              <a href="candidate-dashboard-shortlisted-jobs.php"
                ><i class="la la-file-text"></i>Short Listed Jobs</a
              >
            </li>
            <li class="">
              <a href="interview-terms.php"
                ><i class="la la-reddit"></i>Candi Interview</a
              >
            </li>

            

          

            <!-- <li><a href="dashboard-change-password.php"><i class="la la-unlock-alt"></i>Change Password</a></li>-->
            <!--<li><a href="change-email.php"><i class="la la-retweet"></i>Change Email</a></li>-->
            <!--<li><a href="accpass.php"><i class="la la-trash"></i>Delete Account</a></li>-->
             <li><a href="candidate-feedback.php"><i class="la la-thumbs-up"></i>Feedback</a></li>
              <li><a href=""><i class="la la-rupee"></i>Refer & Earn</a></li>
           
  <!--           <li class="dropdown">-->
  <!--            <a href="candidate-dashboard-applied-job.html" class="dropdown-toggle"-->
  <!--              id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-cog"></i> Account Setting-->
  <!--            </a>-->
  <!--            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">-->
   
  <!--  <a class="dropdown-item" href="dashboard-change-password.php">Change Password</a>-->
  <!--  <a class="dropdown-item" href="change-email.php">Change Email</a>-->
  <!--  <a class="dropdown-item" href="#">Update Profile</a>-->
  <!--  <a class="dropdown-item" href="candidate-logout.php">Logout</a>-->
  <!--  <a class="dropdown-item" href="accpass.php">Delete Profile</a>-->
  <!--</div>-->
  <!--          </li>-->
            
            <li>
            <div class="sidenav">
  <button class="dropdown-btn"><a><i class="la la-cog"></i>Account Setting  <i class="fa fa-caret-down"></i></a>
  </button>
  
  <div class="dropdown-container" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
     <a class="dropdown-item" href="dashboard-change-password.php">Change Password</a>
    <a class="dropdown-item" href="change-email.php">Change Email</a>
    <a class="dropdown-item" href="#">Update Profile</a>
    <a class="dropdown-item" href="candidate-logout.php">Logout</a>
    <a class="dropdown-item" href="accpass.php">Delete Profile</a>
  </div>
  
</div>
           </li>
           <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 1; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>


          </ul>
        </div>
      </div>
      <!-- End User Sidebar -->

      <!-- Dashboard -->
     <section class="user-dashboard">
        <div class="dashboard-outer">
          
       

        


            <!-- -----new dashboard ---------- -->
            <div class="col-lg-12">
              <!-- applicants Widget -->
              <div class="applicants-widget ls-widget" style="margin-top: 28px;">
              
                <div class="widget-content">
                  <div class="row">
                    <!-- Candidate block three -->
                    <div class="candidate-block-four col-lg-4 col-md-6 col-sm-12" style="  margin-top: 30px; ">
                      <div class="inner-box" style="margin-top: 60px;">
                   
                    <span class="thumb"><img src="images/resource/candidate-2.png" alt=""></span>
                    <h3 class="name"><a href="#">Darrell Steward</a></h3>
                    <span class="cat">UI Designer</span>
                    <ul class="job-info">
                      <li><span class="icon flaticon-mobile"></span>+91 6789567589 </li>
                      <li><span class="icon flaticon-email"></span> Darrell@gmail.com</li>
                    </ul>
                    <!--<ul class="post-tags">-->
                    <!--  <li><a href="#">App</a></li>-->
                    <!--  <li><a href="#">Design</a></li>-->
                    <!--  <li><a href="#">Digital</a></li>-->
                    <!--</ul>-->
                    <a href="#" class="theme-btn btn-style-three">View Profile</a>
                  </div>
                    </div>

                    <!-- Candidate block three -->

                    <!-- Candidate block three -->

                    <!-- Candidate block three -->
                    <div 
                      class="candidate-block-three col-lg-8 col-md-12 col-sm-12" style="margin-top: 32px;"
                    >
                     
                        <!-- <div class="row"> -->
                        <div class="row">
                          <div
                            class="ui-block col-lg-6 col-lg-6 col-md-6 col-sm-12"
                          >
                            <div class="ui-item" style="background: linear-gradient(to bottom, 
#FC6600 0%, 
#F9A602 100%">
                              <div class="left">
                                <i class="icon flaticon-briefcase" style="color:white"></i>
                              </div>
                              <div class="right">
                                <h4 style="color:white">22</h4>
                                <p style="color:white">Applied Job</p>
                              </div>
                            </div>
                          </div>
                          <div
                            class="ui-block col-lg-6 col-lg-6 col-md-6 col-sm-12"
                          >
                            <div class="ui-item ui-red" style="background: linear-gradient(to bottom, #B0B0B0 0%, #696969 100%">
                              <div class="left">
                                <i class="icon la la-file-invoice" style="color:white"></i>
                              </div>
                              <div class="right">
                                <h4 style="color:white">9</h4>
                                <p style="color:white">Shortlisted Jobs</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div
                            class="ui-block col-lg-3 col-lg-6 col-md-6 col-sm-12"
                          >
                            <div class="ui-item ui-yellow" style="background: linear-gradient(to bottom, #B0B0B0 0%, #696969 100%">
                              <div class="left">
                                <i class="icon la la-comment-o" style="color:white"></i>
                              </div>
                              <div class="right">
                                <h4 style="color:white">4</h4>
                                <p style="color:white">Interview</p>
                              </div>
                            </div>
                          </div>
                          <div
                            class="ui-block col-xl-6 col-lg-2 col-md-6 col-sm-12"
                          >
                            <div class="ui-item ui-green" style="background: linear-gradient(to bottom, #FC6600 0%, #F9A602 100%">
                              <div class="left">
                                <i class="icon la la-stack-overflow" style="color:white"></i>
                              </div>
                              <div class="right">
                                <h4 style="color:white">8/10</h4>
                                <p style="color:white">Candi Score</p>
                              </div>
                            </div>
                          </div>
                          </div>
                          <!-- ----profile score------ -->
                            <div class="widget-content">

                 <h5 class="right"  style="color: #ffa737; margin-bottom: 20px;">Profile Strength(Average)<span style="float: right;">68%</span></h5>
                  <div class="range-slider-one salary-range">
              <div class="salary-range-slider"></div>
              <div class="input-outer">
                <div class="amount-outer"  style="background: #fef2d9;color: #F9AB00;">
                   <li><a class="upd-pro" href="#">Update Profile</a></li>
                <style>
                    a{
                      color: #f9ab00;
                    }
                </style>
                </div>
              </div>
            </div>
                   
                  </div>
                        </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            
            <!-- -----end new dashboard---------- -->
  <!-- Job Search Form -->
   <div class="col-lg-12">
        <div class="job-search-form">
          <form method="post" action="">
            <div class="row">
              <!-- Form Group -->
              <div class="form-group col-lg-4 col-md-12 col-sm-12">
                <span class="icon flaticon-search-1"></span>
                <input type="text" name="field_name" placeholder="Job title, keywords, or company">
              </div>

              <!-- Form Group -->
              <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                <span class="icon flaticon-map-locator"></span>
                <input type="text" name="field_name" placeholder="City">
              </div>

              <!-- Form Group -->
              <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                <span class="icon flaticon-briefcase"></span>
                <select class="chosen-select">
                  <option value="">All Categories</option>
                  <option value="44">Accounting / Finance</option>
                  <option value="106">Automotive Jobs</option>
                  <option value="46">Customer</option>
                  <option value="48">Design</option>
                  <option value="47">Development</option>
                  <option value="45">Health and Care</option>
                  <option value="105">Marketing</option>
                  <option value="107">Project Management</option>
                </select>
              </div>


              <!-- Form Group -->
              <div class="form-group col-lg-2 col-md-12 col-sm-12 text-right">
                <button type="submit" class="theme-btn btn-style-one">Find Jobs</button>
              </div>
            </div>
          </form>
        </div>
        </div>
        <!-- Job Search Form -->
    <div class="col-lg-12">
              <!-- applicants Widget -->
              <div class="applicants-widget ls-widget">
                <div class="widget-title">
                  <h4>Recommended Jobs </h4>
                </div>
                <div class="widget-content">
                  <div class="row">
                    <!-- Job Block -->
                    <div class="job-block col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                        <div class="content">
                          <span class="company-logo"
                            ><img
                              src="images/resource/company-logo/1-1.png"
                              alt=""
                          /></span>
                          <h4>
                            <a href="#"
                              >PHP Developer</a>
                          </h4>
                          <ul class="job-info">
                            <li>
                              <span class="icon flaticon-briefcase"></span>
                              Segment
                            </li>
                            <li>
                              <span class="icon flaticon-map-locator"></span>
                              New York, US
                            </li>
                            <li>
                              <span class="icon flaticon-clock-3"></span> 11
                              hours ago
                            </li>
                            <!--<li>-->
                            <!--  <span class="icon flaticon-money"></span> $35k --->
                            <!--  $45k-->
                            <!--</li>-->
                          </ul>
                          <!--<ul class="job-other-info">-->
                          <!--  <li class="time">Full Time</li>-->
                          <!--  <li class="privacy">Private</li>-->
                          <!--  <li class="required">Urgent</li>-->
                          <!--</ul>-->
                          <!-- <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                        </div>
                      </div>
                    </div>

                    <!-- Job Block -->
                    <div class="job-block col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                        <div class="content">
                          <span class="company-logo"
                            ><img
                              src="images/resource/company-logo/1-2.png"
                              alt=""
                          /></span>
                          <h4><a href="#">Java Developer</a></h4>
                          <ul class="job-info">
                            <li>
                              <span class="icon flaticon-briefcase"></span>
                              Full Time
                            </li>
                            <li>
                              <span class="icon flaticon-map-locator"></span>
                              California, US
                            </li>
                            <li>
                              <span class="icon flaticon-clock-3"></span> 11
                              hours ago
                            </li>
                            <!--<li>-->
                            <!--  <span class="icon flaticon-money"></span> $35k --->
                            <!--  $45k-->
                            <!--</li>-->
                          </ul>
                          <!--<ul class="job-other-info">-->
                          <!--  <li class="time">Full Time</li>-->
                          <!--  <li class="privacy">Private</li>-->
                          <!--  <li class="required">Urgent</li>-->
                          <!--</ul>-->
                          <!-- <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                        </div>
                      </div>
                    </div>

                    <!-- Job Block -->
                    <div class="job-block col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                        <div class="content">
                          <span class="company-logo"
                            ><img
                              src="images/resource/company-logo/1-3.png"
                              alt=""
                          /></span>
                          <h4><a href="#">Web Developer</a></h4>
                          <ul class="job-info">
                            <li>
                              <span class="icon flaticon-briefcase"></span>
                              Full Time
                            </li>
                            <li>
                              <span class="icon flaticon-map-locator"></span>
                              Texas, US
                            </li>
                            <li>
                              <span class="icon flaticon-clock-3"></span> 11
                              hours ago
                            </li>
                            <!--<li>-->
                            <!--  <span class="icon flaticon-money"></span> $35k --->
                            <!--  $45k-->
                            <!--</li>-->
                          </ul>
                          <!--<ul class="job-other-info">-->
                          <!--  <li class="time">Full Time</li>-->
                          <!--  <li class="privacy">Private</li>-->
                          <!--  <li class="required">Urgent</li>-->
                          <!--</ul>-->
                          <!-- <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                        </div>
                      </div>
                    </div>

                    <!-- Job Block -->
                    <div class="job-block col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                        <div class="content">
                          <span class="company-logo"
                            ><img
                              src="images/resource/company-logo/1-4.png"
                              alt=""
                          /></span>
                          <h4><a href="#">SQL Developer</a></h4>
                          <ul class="job-info">
                            <li>
                              <span class="icon flaticon-briefcase"></span>
                              Full Time
                            </li>
                            <li>
                              <span class="icon flaticon-map-locator"></span>
                              Florida, US
                            </li>
                            <li>
                              <span class="icon flaticon-clock-3"></span> 11
                              hours ago
                            </li>
                            <!--<li>-->
                            <!--  <span class="icon flaticon-money"></span> $35k --->
                            <!--  $45k-->
                            <!--</li>-->
                          </ul>
                          <!--<ul class="job-other-info">-->
                          <!--  <li class="time">Full Time</li>-->
                          <!--  <li class="privacy">Private</li>-->
                          <!--  <li class="required">Urgent</li>-->
                          <!--</ul>-->
                          <!-- <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                        </div>
                      </div>
                    </div>

                    <!-- Job Block -->
                    <div class="job-block col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                        <div class="content">
                          <span class="company-logo"
                            ><img
                              src="images/resource/company-logo/1-5.png"
                              alt=""
                          /></span>
                          <h4>
                            <a href="#"
                              >flutter Developer</a
                            >
                          </h4>
                          <ul class="job-info">
                            <li>
                              <span class="icon flaticon-briefcase"></span>
                              Full Time
                            </li>
                            <li>
                              <span class="icon flaticon-map-locator"></span>
                              Arizona, US
                            </li>
                            <li>
                              <span class="icon flaticon-clock-3"></span> 11
                              hours ago
                            </li>
                            <!--<li>-->
                            <!--  <span class="icon flaticon-money"></span> $35k --->
                            <!--  $45k-->
                            <!--</li>-->
                          </ul>
                          <!--<ul class="job-other-info">-->
                          <!--  <li class="time">Full Time</li>-->
                          <!--  <li class="privacy">Private</li>-->
                          <!--  <li class="required">Urgent</li>-->
                          <!--</ul>-->
                          <!-- <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                        </div>
                      </div>
                    </div>

                    <!-- Job Block -->
                    <div class="job-block col-lg-6 col-md-12 col-sm-12">
                      <div class="inner-box">
                        <div class="content">
                          <span class="company-logo"
                            ><img
                              src="images/resource/company-logo/1-6.png"
                              alt=""
                          /></span>
                          <h4>
                            <a href="#"
                              >UI Desiner</a
                            >
                          </h4>
                          <ul class="job-info">
                            <li>
                              <span class="icon flaticon-briefcase"></span>
                              Full Time
                            </li>
                            <li>
                              <span class="icon flaticon-map-locator"></span>
                              Missouri, US
                            </li>
                            <li>
                              <span class="icon flaticon-clock-3"></span> 11
                              hours ago
                            </li>
                            <!--<li>-->
                            <!--  <span class="icon flaticon-money"></span> $35k --->
                            <!--  $45k-->
                            <!--</li>-->
                          </ul>
                          <!--<ul class="job-other-info">-->
                          <!--  <li class="time">Full Time</li>-->
                          <!--  <li class="privacy">Private</li>-->
                          <!--  <li class="required">Urgent</li>-->
                          <!--</ul>-->
                          <!-- <button class="bookmark-btn">
                            <span class="flaticon-bookmark"></span>
                          </button> -->
                        </div>
                      </div>
                      
                      
      <!--                <div class="copyright-text">-->
      <!--  <div class="copyright-text">	<p><a href="http://solicitousbusiness.com/">Powered with <i class="fa fa-heart" style="color:red;"></i> By</a><a href="http://solicitousbusiness.com/"> Solicitous</a></p></div>-->
      <!--</div>-->
                      
                      
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
        </div>
      </section>
      <!-- End Dashboard -->

      <!-- Copyright -->
       <div class="copyright-text">
        <div class="copyright-text">	<p><a href="http://solicitousbusiness.com/">Powered with <i class="fa fa-heart" style="color:red;"></i> By</a><a href="http://solicitousbusiness.com/"> Solicitous</a></p></div>
      </div>
    <!--  <div class="copyright-text">-->
    <!--    <div class="copyright-text">	<p><a href="http://solicitousbusiness.com/">Powered with <i class="fa fa-heart" style="color:red;"></i> By</a><a href="http://solicitousbusiness.com/"> Solicitous</a></p></div>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- End Page Wrapper -->

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/chosen.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.modal.min.js"></script>
    <script src="js/mmenu.polyfills.js"></script>
    <script src="js/mmenu.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/rellax.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/knob.js"></script>
    <script src="js/script.js"></script>

    <!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
    <script src="js/chart.min.js"></script>
    <script>
      Chart.defaults.global.defaultFontFamily = "Sofia Pro";
      Chart.defaults.global.defaultFontColor = "#888";
      Chart.defaults.global.defaultFontSize = "14";

      var ctx = document.getElementById("chart").getContext("2d");

      var chart = new Chart(ctx, {
        type: "line",
        // The data for our dataset
        data: {
          labels: ["January", "February", "March", "April", "May", "June"],
          // Information about the dataset
          datasets: [
            {
              label: "Views",
              backgroundColor: "transparent",
              borderColor: "#1967D2",
              borderWidth: "1",
              data: [196, 132, 215, 362, 210, 252],
              pointRadius: 3,
              pointHoverRadius: 3,
              pointHitRadius: 10,
              pointBackgroundColor: "#1967D2",
              pointHoverBackgroundColor: "#1967D2",
              pointBorderWidth: "2",
            },
          ],
        },

        // Configuration options
        options: {
          layout: {
            padding: 10,
          },

          legend: {
            display: false,
          },
          title: {
            display: false,
          },

          scales: {
            yAxes: [
              {
                scaleLabel: {
                  display: false,
                },
                gridLines: {
                  borderDash: [6, 10],
                  color: "#d8d8d8",
                  lineWidth: 1,
                },
              },
            ],
            xAxes: [
              {
                scaleLabel: {
                  display: false,
                },
                gridLines: {
                  display: false,
                },
              },
            ],
          },

          tooltips: {
            backgroundColor: "#333",
            titleFontSize: 13,
            titleFontColor: "#fff",
            bodyFontColor: "#fff",
            bodyFontSize: 13,
            displayColors: false,
            xPadding: 10,
            yPadding: 10,
            intersect: false,
          },
        },
      });
    </script>
  </body>

  
</html>
