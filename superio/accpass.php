<?php 
include 'CandidateData.php';
include 'candidate-header.html';
    include 'sidebar.php';
?>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:06:38 GMT -->
<head>
<link rel="stylesheet" href="accpass.css">
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="login-page">
      <div class="form">
  <div class="login">
          <div class="login-header">
            <!-- <h3>LOGIN</h3> -->
            <img
                        src="images/Candi_Logo_Final_02_1.png"
                        style="width=200px"
                        height="65px"
                      />
            <p style="font-size: 15px;
    color: #696969;
    line-height: 24px;
    font-weight: 400;
    margin: 0;">Please enter your credentials to delete account</p>
          </div>
        </div>
                    <form class="login-form" method="post">










                    
                    <?php
                        if (count($errors) > 0) {
                        ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                foreach ($errors as $showerror) {
                                    echo $showerror;
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="form-group">
                            <!-- <label>Email</label> -->
                            <input type="text" name="email" placeholder="Email" required>
                        </div>
                        
                        <div class="form-group">
                            <!-- <label>Password</label> -->
                            <input id="password-field" type="password" name="password" placeholder="Password" required>
                        </div>

<div class="form-group" >
                          <input style="background-color: orange; color: white;" type="submit" name="accpass" value="Submit">
                        </div>












<!--                     <div class="bottom-box">
                        <div class="text">Don't have an account? <a href="register.php">Register</a></div>
                        <div class="divider"><span>or</span></div>
                        <div class="btn-box row">
                            <div class="col-lg-6 col-md-12">
                                <a href="#" class="theme-btn social-btn-two facebook-btn"><i class="fab fa-facebook-f"></i> Log In via Facebook</a>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <a href="#" class="theme-btn social-btn-two google-btn"><i class="fab fa-google"></i> Log In via Gmail</a>
                            </div>
                        </div>
                    </div> -->
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
</body>

<!-- Mirrored from creativelayers.net/themes/superio/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:06:38 GMT -->
</html>


