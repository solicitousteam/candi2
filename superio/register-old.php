<?php 
require_once 'CandidateData.php';
?>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:06:38 GMT -->
<head>
<meta charset="utf-8">
<title>Candi.ai</title>

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/Candi-AI-06.png" type="image/x-icon">
<link rel="icon" href="images/Candi-AI-06.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">
        <div class="container-fluid">
            <!-- Main box -->
            <div class="main-box">
                <!--Nav Outer -->
                <div class="nav-outer">
                    <div class="logo-box">
                        <div class="logo"><a href="candi.html"><img src="images/Candi-AI-07.png"  style="height: 35px; width: 128px;" alt="" title=""></a></div>
                    </div>
                </div>

                <div class="outer-box">
                    <!-- Login/Register -->
                    <!-- <div class="btn-box">
                        <a href="login-popup.html" class="theme-btn btn-style-three call-modal">Login</a>
                        <a href="register-popup.html" class="theme-btn btn-style-three call-modal">Register</a>
                        <a href="dashboard-post-job.html" class="theme-btn btn-style-one"><span class="btn-title">Job Post</span></a>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index.html"><img src="images/Candi-AI-07.png"  style="height: 40px; width: 128px;" alt="" title=""></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">

                <div class="outer-box">
                    <!-- Login/Register -->
                    <div class="login-box"> 
                        <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
                    </div>

                    <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>
    </header>
    <!--End Main Header -->

    <!-- Info Section -->
    <div class="login-section">
        <div class="image-layer" style="background-image: url(images/background/candi-reg.jpg ); height: 800px;"></div> 
        <div class="outer-box">
            <!-- Login Form -->
            <div class="login-form default-form">
                <div class="form-inner">
                    <h3>Create a Candi.ai Profile</h3>

                    <!--Login Form-->
                    <form method="post" >
                        <!-- <div class="form-group">
                            <div class="btn-box row">
                                <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn btn-style-seven"><i class="la la-user"></i> Candidate </a>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <a href="#" class="theme-btn btn-style-four"><i class="la la-briefcase"></i> Employer </a>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lname"  placeholder="Last Name" required>
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>

                        <div class="form-group">
                            <label> Password</label>
                            <input type="password" name="password" id="password" placeholder="Password" required>
                        </div>

                        <div class="form-group">
                            <label>Repeat Password</label>
                            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
                            <div class="registrationFormAlert" id="divCheckPasswordMatch">
                        </div>
                        
                        
                        
                        <div class="form-group">
                      <button class="theme-btn btn-style-one " type="submit" name="Register" style="margin-left: 0px;margin-top: 30px; ">Register</button>
                        </div>
                    </form>
                    <!--<form action="login.php">-->
                    <!--<div class="form-group">-->
                    <!--        <input class="theme-btn btn-style-one" type="submit" name="log-in" value="Log In">-->
                    <!--    </div>-->
                    <!--</form>-->

                    <div class="bottom-box">
                        <div class="divider"><span>or</span></div>
                        <div class="btn-box row">
                            <div class="col-lg-6 col-md-12">
                                <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-facebook-f"></i> Log In via Facebook</a>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via Gmail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Login Form -->
        </div>
    </div>
    <!-- End Info Section -->


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
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#cpassword").keyup(checkPasswordMatch);    
function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#cpassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}
});
</script>
</body>

<!-- Mirrored from creativelayers.net/themes/superio/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:06:38 GMT -->
</html>


