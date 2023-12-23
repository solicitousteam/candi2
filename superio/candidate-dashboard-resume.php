<?php include 'candidate-auth-session.php';
// include 'candidate-header.html';
// include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="utf-8">
  <title>Candi.ai</title>

  <!-- Stylesheets -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/modal.css" rel="stylesheet">

  <link rel="shortcut icon" href="images/Candi-AI-06.png" type="image/x-icon">
  <link rel="icon" href="images/Candi-AI-06.png" type="image/x-icon">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  -->
<!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
    .ls-widget {
    margin-top: -86px;
    margin-left: 8px;
    }
    .w3-teal, .w3-hover-teal:hover {
    color: #fff!important;
    background-color: #FFA737!important;
}
.w3-text-teal, .w3-hover-text-teal:hover {
    color: #FFA737!important;
}

h4.res-heading {
    font-size: 24px;
    text-transform: capitalize;
    /* position: relative; */
    font-weight: bold;
    margin: 0px;
    background: none;
    line-height: 1.2em;
    margin-bottom: 55px;
    top: 22px;
    left: 19px;
}

.ls-widget {
    margin-top: 50px;
    margin-left: 8px;
}

.ls-widget {
    /* position: relative; */
    background: #ffffff;
    border-radius: 8px;
    -webkit-box-shadow: 0px 6px 15px rgb(64 79 104 / 5%);
    box-shadow: 0px 6px 15px rgb(64 79 104 / 5%);
    margin-bottom: 30px;
}

h2.w3-text-grey.w3-padding-16 {
    font-size: 24px;
    text-transform: capitalize;
    position: relative;
    font-weight: bold;
    margin: 0px;
    background: none;
    line-height: 1.2em;
}

p.emp-info {
    font-weight: 500;
    font-size: 16px;
    line-height: 22px;
    color: #202124;
    margin-top: 22px
}

b.emp-skl {
    font-size: 20px;
    text-transform: capitalize;
    position: relative;
    font-weight: bold;
    margin: 0px;
    background: none;
    line-height: 1.2em;
}
p.emp-skl {
    font-size: 20px;
    text-transform: capitalize;
    position: relative;
    font-weight: bold;
    margin: 0px;
    background: none;
    line-height: 1.2em;
    top: 10px;
}

.btn {
  background-color: #FFA737!important;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
  margin-left: 23px;
}


.chosen-container.chosen-container-multi {
    margin-top: 22px;
    margin-bottom: 22px;
}

.chosen-container-multi .chosen-choices{
    background: #FFA737 !important;
    
}

.chosen-container .chosen-drop{
    background: #FFA737 !important;
    
}

.default-form .form-group > label{
    font-size: 15px;
    line-height: 20px;
    color: #202124;
    font-weight: 500;
    margin-bottom: 10px;
    margin-top: 22px;
}

input.link-pro{
    position: relative;
    min-width: 250px;
    display: block;
    height: 60px;
    line-height: 30px;
    padding: 15px 20px;
    font-size: 15px;
    color: #000;
    background: #FFA737 !important;
    border: 1px solid #F0F5F7;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border-radius: 8px;
    -webkit-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}

.w3-container{
        border-radius: 13px !important;
}

.w3-white.w3-text-grey.w3-card-4{
        border-radius: 13px !important;
}

.main-skil {
    border: 1px solid red;
    width: 100%;
    float: left;
    position: relative;
    min-width: 250px;
    display: block;
    height: 60px;
    line-height: 30px;
    padding: 15px 20px;
    font-size: 15px;
    color: #000;
    background: #FFA737 !important;
    border: 1px solid #F0F5F7;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border-radius: 8px;
    -webkit-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
    margin-bottom: 22px;
    margin-top: 22px;
}

.main-skil-left {
    width: 33%;
    float: left;
}

.main-skil-mid {
    width: 33%;
    float: left;
}

.main-skil-right {
    width: 33%;
    float: left;
}

.para-01 {
    background: wheat;
    margin-right: 22px;
    padding: 4px 20px;
    border-radius: 22px;
    width: 100%;
    margin: 0px 0px;
}

.para-02 {
    background: wheat;
    margin-right: 22px;
    padding: 4px 20px;
    border-radius: 22px;
    width: 100%;
    margin: 0px 0px;
    margin-left: 3px;
}

.para-03 {
    background: wheat;
    margin-right: 22px;
    padding: 4px 20px;
    border-radius: 22px;
    width: 100%;
    margin: 0px 0px;
    margin-left: 8px;
}

.para-01 p {
    color: black;
}
.para-02 p {
    color: black;
}
.para-03 p {
    color: black;
}

@media (min-width: 810px) and (max-width: 899px){
    p.emp-skl{
            min-width: 232px !important;
            right: 10px;
    }
    
    p.emp-info{
       margin-left: -8px; 
    }
    
    input.link-pro{
        left: -15px;
        font-size: 13px !important;
    }
}

@media screen and (max-width: 1000px){
    input.link-pro{
            min-width: 200px;
            margin-left: -22px;
    }
}

@media (min-width: 700px) and (max-width: 799px){
   input.link-pro{
       right: 22px;
   } 
}

@media (min-width: 700px) and (max-width: 799px){
    .main-skil{
            right: 25px;
            padding: 12px 0px;
    }
}

@media (min-width: 800px) and (max-width: 899px){
    .main-skil{
            right: 12px;
            padding: 16px 0px;
    }
}
@media screen and (max-width: 700px){
    .res-btn{
        margin-top: -22px;
    }
}

@media screen and (max-width: 1100px){
    .para-01{
        padding: 5px 6px;    
    }
}
</style>
</head>


<body>

  <div class="page-wrapper dashboard">

    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <?php
  include 'sidebar.php';
?>
   <!--<header class="main-header header-shaddow">-->
   <!--     <div class="container-fluid">-->
          <!-- Main box -->
          <div class="main-box">
            <!--Nav Outer -->
            <!--<div class="nav-outer">-->
            <!--  <div class="logo-box">  -->
            <!--    <div class="logo">-->
            <!--                  <a href="index.html"-->
            <!--  ><img src="images/Candi-AI-07.png" style="height: 35px; width: 141px;" alt="" title=""></a>-->
            <!--    </div>-->
            <!--  </div>-->
<!-- Only for Mobile View -->
                  <!--<li class="mm-add-listing">-->
                  <!--  <a href="add-listing.html" class="theme-btn btn-style-one"-->
                  <!--    >Job Post</a-->
                  <!--  >-->
                                        
              </nav> 

              <!-- Main Menu End-->
            </div>

            <!--<div class="outer-box">-->
                
            <!--  <button class="menu-btn">-->
            <!--    <span class="count">1</span>-->
            <!--    <span class="icon la la-heart-o"></span>-->
            <!--  </button>-->

              <!--<button class="menu-btn">-->
              <!--    <span class="count">1</span>-->
              <!--  <span class="icon la la-bell"></span>-->
              <!--</button>-->

              <!-- Dashboard Option -->
<!--              <div class="dropdown dashboard-option">-->
<!--                <a-->
<!--                  class="dropdown-toggle"-->
<!--                  role="button"-->
<!--                  data-toggle="dropdown"-->
<!--                  aria-expanded="false"-->
<!--                >-->
<!--                  <img-->
<!--                    src="images/resource/company-6.png"-->
<!--                    alt="avatar"-->
<!--                    class="thumb"-->
<!--                  />-->
<!--                  <span class="name">My Account</span>-->
<!--                </a>-->
<!--                <ul class="dropdown-menu">-->
<!--                   <li>-->
<!--              <a href="candidate-dashboard.php"-->
<!--                ><i class="la la-home"></i>Dashboard</a-->
<!--              >-->
<!--            </li>-->
<!--            <li>-->
<!--              <a href="candidate-dashboard-profile.html"-->
<!--                ><i class="la la-user-tie"></i>My Profile</a-->
<!--              >-->
<!--            </li>-->
<!--            <li><a href="jobs_applied.php"><i class="la la-bookmark-o"></i>Jobs applied</a></li> -->
<!--<li class=""><a href="candidate-dashboard-resume.php"><i class="la la-paste"></i>My Resume</a></li>-->
<!--            <li>-->
<!--              <a href="http://r.py.solicitous.cloud/"-->
<!--                ><i class="la la-sticky-note"></i>Document Validation</a-->
<!--              >-->
<!--            </li>-->
<!--            <li class="">-->
<!--              <a href="interview-terms.php"-->
<!--                ><i class="la la-reddit"></i>Interview</a-->
<!--              >-->
<!--            </li>-->

<!--            <li>-->
<!--              <a href="job_opening.php"-->
<!--                ><i class="la la-briefcase"></i> Job Openings</a-->
<!--              >-->
<!--            </li>-->

<!--            <li>-->
<!--              <a href="candidate-dashboard-shortlisted-jobs.php"-->
<!--                ><i class="-->
<!--la la-clone"></i>Shortlisted Jobs</a-->
<!--              >-->
<!--            </li>-->

<!--            <li>-->
<!--              <a href="dashboard-change-password.php"-->
<!--                ><i class="la la-unlock-alt"></i>Change Password</a-->
<!--              >-->
<!--            </li>-->
<!--            <li>-->
<!--              <a href="change-email.html"-->
<!--                ><i class="la la-retweet"></i>Change Email</a-->
<!--              >-->
<!--            </li>-->
<!--<li>-->
<!--              <a href="delete account.html"-->
<!--                ><i class="la la-trash"></i>Delete Account</a-->
<!--              >-->
<!--            </li>-->
<!--             <li><a href="candidate-feedback.php"><i class="-->
<!--la la-thumbs-up"></i>Feedback</a></li>-->
<!--            <li>-->
<!--              <a href="candidate-logout.php"><i class="la la-sign-out"></i>Logout</a>-->
<!--            </li>-->
            
           
<!--                </ul>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->

        <!-- Mobile Header -->
        <!--<div class="mobile-header">-->
        <!--  <div class="logo">-->
        <!--               <a href="index.html"-->
        <!--      ><img src="images/Candi-AI-07.png" alt="" title=""></a>-->
        <!--  </div>-->

          <!--Nav Box-->
          <div class="nav-outer clearfix">
            <div class="outer-box">
              <!-- Login/Register -->
        <!--      <div class="login-box">-->
        <!--        <a href="login-popup.html" class="call-modal"-->
        <!--          ><span class="icon-user"></span-->
        <!--        ></a>-->
        <!--      </div>-->

        <!--      <button id="toggle-user-sidebar">-->
        <!--        <img-->
        <!--          src="images/resource/company-6.png"-->
        <!--          alt="avatar"-->
        <!--          class="thumb"-->
        <!--        />-->
        <!--      </button>-->
        <!--      <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"-->
        <!--        ><span class="flaticon-menu-1"></span-->
        <!--      ></a>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>
      </header>
    <!--End Main Header -->

    <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>

    <!-- User Sidebar -->
<!--      <div class="user-sidebar">-->
<!--        <div class="sidebar-inner">-->
<!--          <ul class="navigation">-->
<!--             <li>-->
<!--              <a href="candidate-dashboard.php"-->
<!--                ><i class="la la-home"></i>Dashboard</a-->
<!--              >-->
<!--            </li>-->
<!--            <li>-->
<!--              <a href="candidate-dashboard-profile.php"-->
<!--                ><i class="la la-user-tie"></i>My Profile</a-->
<!--              >-->
<!--            </li>-->
<!--            <li><a href="jobs_applied.php"><i class="la la-bookmark-o"></i>Jobs applied</a></li> -->
<!--<li class=""><a href="candidate-dashboard-resume.php"><i class="-->
<!--la la-paste"></i>My Resume</a></li>-->
<!--            <li>-->
<!--              <a href="http://r.py.solicitous.cloud/"-->
<!--                ><i class="la la-sticky-note"></i>Document Validation</a-->
<!--              >-->
<!--            </li>-->
<!--            <li class="">-->
<!--              <a href="interview-terms.php"-->
<!--                ><i class="la la-reddit"></i>Interview</a-->
<!--              >-->
<!--            </li>-->

<!--            <li>-->
<!--              <a href="job_opening.php"-->
<!--                ><i class="la la-briefcase"></i> Job Openings</a-->
<!--              >-->
<!--            </li>-->

<!--            <li>-->
<!--              <a href="candidate-dashboard-shortlisted-jobs.php"-->
<!--                ><i class="-->
<!--la la-clone"></i>Shortlisted Jobs</a-->
<!--              >-->
<!--            </li>-->

<!--            <li>-->
<!--              <a href="dashboard-change-password.php"-->
<!--                ><i class="la la-unlock-alt"></i>Change Password</a-->
<!--              >-->
<!--            </li>-->
<!--            <li>-->
<!--              <a href="change-email.html"-->
<!--                ><i class="la la-retweet"></i>Change Email</a-->
<!--              >-->
<!--            </li>-->
<!-- <li>-->
<!--              <a href="delete account.html"-->
<!--                ><i class="la la-trash"></i>Delete Account</a-->
<!--              >-->
<!--            </li>-->
<!--            <li><a href="candidate-feedback.php"><i class="-->
<!--la la-thumbs-up"></i>Feedback</a></li>-->
<!--            <li>-->
<!--              <a href="candidate-logout.php"><i class="la la-sign-out"></i>Logout</a>-->
<!--            </li>-->
           
<!--          </ul>-->
<!--        </div>-->
<!--      </div>-->
    <!-- End User Sidebar -->

<!-- Dashboard -->

    <div class="res-btn">
        <p></p>
<button class="btn"><i class="fa fa-download"></i> Download</button>
    </div>


    <div class="ls-widget">
        
    <div class="main-heading">
        <h4 class="res-heading">My Resume</h4>
    </div>
    
    
    <!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <!--<img class="joe-wom" src="images/avatar-hat.jpg" style="width:100%" alt="Avatar">-->
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2></h2>
          </div>
        </div>
        <div class="w3-container">
          <p class="emp-skl"><i class="la la-user w3-margin-right w3-large w3-text-teal"></i>Pushkar Sonpatki</p>
          <p class="emp-info"><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>PHP Developer</p>
          <p class="emp-info"><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Delaware US State</p>
          <p class="emp-info"><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>pushkar@gmail.com</p>
          <p class="emp-info"><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>7083872954</p>
          <hr>

          <p class="w3-large"><b class="emp-skl"><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          
                        <!-- <select data-placeholder="Categories" class="chosen-select multiple" multiple="" tabindex="4" required>-->
                        <!--  <option value="Banking">Banking</option>-->
                        <!--  <option value="Digital&amp;Creative">Digital &amp; Creative</option>-->
                        <!--  <option value="Retail">Retail</option>-->
                        <!--  <option value="Human Resources">Human Resources</option>-->
                        <!--  <option value="Management">Management</option>-->
                        <!--</select>-->
                        
                        <div class="main-skil">
                            <div class="main-skil-left">
                                <div class="para-01">
                                <p>Banking</p>
                                </div>
                            </div>
                            <div class="main-skil-mid">
                                <div class="para-02">
                                <p>Digital</p>
                                </div>
                            </div>
                            <div class="main-skil-right">
                                <div class="para-03">
                                <p>Retail</p>
                                </div>
                            </div>
                        </div>
                        
                        
                        
            <p class="w3-large"><b class="emp-skl"><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Social Network</b></p> 
                                        
                                        <div class="widget-content">
                                        
                                        <form class="default-form">
                                            
                                         <div class="form-group col-lg-6 col-md-12">
                                            <label>Linkedin URL<span class="required">*</span></label>
                                            <input class="link-pro" type="text" name="name" placeholder="https://in.linkedin.com/" required>
                                        </div>
                                        
                                        
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Skype ID<span class="required">*</span></label>
                                            <input class="link-pro" type="text" name="name" placeholder="live:.cif.ffbe468gfrdc3467" required>
                                        </div>
                                        
                                        </form>
                                        
                                        </div>
          <br>

          <p class="w3-large w3-text-theme"><b class="emp-skl"><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          <p class="emp-info">English</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p class="emp-info">Spanish</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p class="emp-info">German</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        
                            <div class="resume-block">
                            <div class="inner">
                              <span class="name">M</span>
                              <div class="title-box">
                                <div class="info-box">
                                  <h3>PHP Developer</h3>
                                  <span>Google</span>
                                </div>
                                <div class="edit-box">
                                  <span class="year">2012 - 2014</span>
                                  <div class="edit-btns">
                                    <!--<button type="button" data-toggle="modal" data-target="#experience"><span class="la la-pencil"></span></button>-->
                                    <!--<button><span class="la la-trash"></span></button>-->
                                  </div>
                                </div>
                              </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>
                            </div>
                          </div>
                           
        
         
                            <div class="resume-block">
                            <div class="inner">
                              <span class="name">H</span>
                              <div class="title-box">
                                <div class="info-box">
                                  <h3>UI Developer</h3>
                                  <span>Amazon</span>
                                </div>
                                <div class="edit-box">
                                  <span class="year">2008 - 2012</span>
                                  <div class="edit-btns">
                                    <!--<button type="button" data-toggle="modal" data-target="#exampleModal111"><span class="la la-pencil"></span></button>-->
                                    <!--<button><span class="la la-trash"></span></button>-->
                                  </div>
                                </div>
                              </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>
                            </div>
                          </div>
        
        
        
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Certificate</h2>
        
                            <div class="resume-block">
                            <div class="inner">
                              <span class="name">M</span>
                              <div class="title-box">
                                <div class="info-box">
                                  <h3>UI Design</h3>
                                  <span>BitDegree</span>
                                </div>
                                <div class="edit-box">
                                  <span class="year">2012 - 2014</span>
                                  <div class="edit-btns">
                                    <!--<button type="button" data-toggle="modal" data-target="#certificate"><span class="la la-pencil"></span></button>-->
                                    <!--<button><span class="la la-trash"></span></button>-->
                                  </div>
                                </div>
                              </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>
                            </div>
                          </div>
                          
                          
                          
                          <div class="resume-block">
                            <div class="inner">
                              <span class="name">H</span>
                              <div class="title-box">
                                <div class="info-box">
                                  <h3>Graphics Design</h3>
                                  <span>Coursera</span>
                                </div>
                                <div class="edit-box">
                                  <span class="year">2008 - 2012</span>
                                  <div class="edit-btns">
                                    <!--<button type="button" data-toggle="modal" data-target="#exampleModal111"><span class="la la-pencil"></span></button>-->
                                    <!--<button><span class="la la-trash"></span></button>-->
                                  </div>
                                </div>
                              </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>
                            </div>
                          </div>
        
        
        
      </div>
      
      
      <div class="w3-container w3-card w3-white w3-margin-bottom" style="margin-top: 22px;">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        
                            <!-- Resume BLock -->
                          <div class="resume-block">
                            <div class="inner">
                              <span class="name">M</span>
                              <div class="title-box">
                                <div class="info-box">
                                  <h3>Bachlors in Fine Arts</h3>
                                  <span>Modern College</span>
                                </div>
                                <div class="edit-box">
                                  <span class="year">2014</span>
                                  <div class="edit-btns">
                                    <!--<button type="button" data-toggle="modal" data-target="#exampleModal111"><span class="la la-pencil"></span></button>-->
                                    <!--<button><span class="la la-trash"></span></button>-->
                                  </div>
                                </div>
                              </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>
                            </div>
                          </div>
                           
        
         
                             <div class="resume-block">
                            <div class="inner">
                              <span class="name">H</span>
                              <div class="title-box">
                                <div class="info-box">
                                  <h3>Computer Science</h3>
                                  <span>Harvard University</span>
                                </div>
                                <div class="edit-box">
                                  <span class="year">2012</span>
                                  <div class="edit-btns">
                                    <!--<button type="button" data-toggle="modal" data-target="#exampleModal111"><span class="la la-pencil"></span></button>-->
                                    <!--<button><span class="la la-trash"></span></button>-->
                                  </div>
                                </div>
                              </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>
                            </div>
                          </div>

        
        
        
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
    
    
    
    
    
    <!-- End Dashboard -->
    
    
    </div>

    <!-- Copyright -->
   <div class="copyright-text">
        <div class="copyright-text">	<p><a href="http://solicitousbusiness.com/" style="color:orange;">Powered with <i class="fa fa-heart" style="color:red;"></i> By</a><a href="http://solicitousbusiness.com/" style="color:orange;"> Solicitous</a></p></div>
      </div>

  </div><!-- End Page Wrapper -->


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
  <!--Google Map APi Key-->
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyDaaCBm4FEmgKs5cfVrh3JYue3Chj1kJMw&amp;ver=5.2.4"></script>
  <script src="js/map-script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!--End Google Map APi-->
</body>


<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 09:54:22 GMT -->
</html>